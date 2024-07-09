<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = Session::get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->cover_image
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);
        if(isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
}
