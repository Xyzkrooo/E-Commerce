<?php

namespace App\Http\Controllers;

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
            return view('admin.index');
        } else {
            return view('home');
        }

    }

}
