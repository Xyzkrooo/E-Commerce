<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $category = Category::paginate(12);
        $product = Product::all();
        return view('front.shop',compact('product','category'));
    }


    
    public function shop_details($id)
    {
        $products = Product::all();

        $product = Product::findOrFail($id);
        $detail = Product::findOrFail($id);
        return view('front.det_product', compact('detail','product','products'));
    }

    public function kategori($id)
    {
        return $this->produkByKategori($id);
    }

    public function produkByKategori($id)
    {
        $category = Category::all();
        $product = Product::where('category_id', $id)->get();
        return view('front.shop', compact('product', 'category'));
    }

}
