<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('home',compact('product'));
    }

    public function comingsoon()
    {
        
        return view('comingsoon');
    }

    public function profile()
    {
        
        
    }
}
