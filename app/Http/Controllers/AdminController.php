<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
   
    public function account()
    {
        $products = Product::all();
        $categories = Category::all();
        $users = User::all();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('admin.account-table', compact('user', 'products', 'categories', 'users'));
    }

    public function category()
    {
        $products = Product::all();
        $categories = Category::all();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('admin.category-table', compact('user', 'products', 'categories'));
    }

    public function home()
    {
        $products = Product::all();
        $categories = Category::all();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('home-user', compact('user', 'products', 'categories'));
    }

    public function admin()
    {
        $products = Product::all();
        $categories = Category::all();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('admin.product-table', compact('user', 'products', 'categories'));
    }
}
