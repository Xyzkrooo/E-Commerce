<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\facades\Storage;

use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::latest()->get();
        confirmDelete('Delete', 'Are You Sure?');
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */

    // public function storeMedia(Request $request)
    // {
    //     if ($request->hasFile('file')) {
    //         $image = $request->file('file');
    //         $name = uniqid() . '_' . trim($image->getClientOriginalName());
    //         $image->storeAs('public/products', $name);

    //         return response()->json([
    //             'name' => $name,
    //             'original_name' => $image->getClientOriginalName(),
    //         ]);
    //     }

    //     return response()->json(['error' => 'No file uploaded'], 400);

    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'stok' => 'required|numeric',
            'desc' => 'required',
            'category_id' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;
        $product->stok = $request->stok;
        $product->desc = $request->desc;
        $product->category_id = $request->category_id;
        $product->save();

        // Upload multiple images
        foreach ($request->input('images', []) as $file) {
            $productImage = new Image();
            $productImage->product_id = $product->id;
            $productImage->image_product = $file;
            $productImage->save();
        }

        Alert::success('Success', 'Product added successfully');
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::all();
        $product = Product::with('image')->findOrFail($id);
        return view('admin.product.show', compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    // Update the specified product in storage
    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'price' => 'required|numeric',
        'stok' => 'required|numeric',
        'desc' => 'required',
    ]);

    $product->update($request->only(['name', 'category_id', 'price', 'stok', 'desc']));

    if ($request->hasFile('images')) {
        // Remove old images
        foreach ($product->images as $image) {
            Storage::disk('public')->delete('products/' . $image->image_product);
            $image->delete();
        }

        // Add new images
        foreach ($request->file('images') as $file) {
            $path = $file->store('products', 'public');
            $product->images()->create(['image_product' => $path]);
        }
    }

    Alert::success('Success', 'Product Updated successfully');
    return redirect()->route('product.index')->with('success', 'Product updated successfully');
}

    // Store media files for the product
    public function storeMedia(Request $request)
    {
        $path = $request->file('file')->store('products', 'public');
        return response()->json(['name' => basename($path), 'original_name' => $request->file('file')->getClientOriginalName()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan produk berdasarkan id
        $product = Product::findOrFail($id);

        // Hapus gambar utama jika ada
        if ($product->image) {
            Storage::delete('public/products/' . $product->image);
        }

        // Hapus gambar-gambar terkait
        $productImages = Image::where('product_id', $product->id)->get();
        foreach ($productImages as $image) {
            Storage::delete('public/products/' . $image->image_product);
            $image->delete();
        }

        // Hapus produk
        $product->delete();

        Alert::success('Success', 'Product deleted successfully');
        return redirect()->route('product.index');
    }

}