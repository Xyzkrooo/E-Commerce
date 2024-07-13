<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use App\Models\Category;
use App\Models\order;
use App\Http\Middleware\role;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->role == 1) {
            $users = User::count();
            $product = product::count();
            $category = Category::count();
            $order = order::sum('total');
            
            // dd($users);
            return view('admin.index', compact('users','product','category','order'));
        } else {
            return view('home');
        }
    }

}
