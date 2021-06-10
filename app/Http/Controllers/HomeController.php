<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('home', compact('user', 'products', 'categories'));
    }
}
