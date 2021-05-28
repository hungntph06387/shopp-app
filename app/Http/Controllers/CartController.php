<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session as FacadesSession;
use PHPUnit\Framework\Constraint\Count;
use Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
         //dd($request->session()->get('cart'));
        return view('product.product-cart', compact('products'));
    }

    public function cartUser(Request $request)
    {
        $products = Product::all();
         //dd($request->session()->get('cart'));
        return view('product.product-cartU', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldcart = Session('cart') ? Session('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        
        return back()->with('success', 'Add to Cart success!');
    }

    public function deleteItemCart($id)
    {
       
     }
}
