<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('product.add-product', compact('categories', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:products'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'categories_id' => ['required'],
            'image' => ['required'],
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->categories_id = $request->input('categories_id');
        if ($file = $request->file('image')) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $product->image = $filename;
        }
        $product->save();

        return back()->with('success', 'Add product success!');
    }

   
    

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $user = User::where('email', '=', session('LoggedUser'))->first();

        return view('product.product-detail', compact('product', 'user'));
    }



    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::findOrFail($id);

        return view('product.edit-product', compact('categories', 'products'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required','unique:products'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'categories_id' => ['required'],
            'image' => ['required'],
        ]);

        $products = Product::findOrFail($id);
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->categories_id = $request->input('categories_id');
        if ($file = $request->file('image')) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $products->image = $filename;
        }
        $products->update();

        return back()->with('success', 'Update product success!');
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return back()->with('success', 'Delete product success!');
    }



    public function search(Request $request)
    {
        
        
        $user = User::where('email', '=', session('LoggedUser'))->first();
        $search = $request->query('query');
        if($search){
            $products = Product::where('name', 'like','%'.$search.'%')->get();
            
            return view('admin.product-table', compact('user', 'products'));
        }
    }

    
    
    public function category($id)
    {
        $categories = Category::all();
        $products = Product::where('categories_id', $id)->get();
        $user = User::where('email', '=', session('LoggedUser'))->first();
        
        return view('/home', compact('products', 'categories', 'user'));
    }
}
