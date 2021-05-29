<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Item;
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

    public function removeCart()
    {
        if (session()->has('LoggedUser') && session()->has('cart')) {

            session()->pull('cart');
            return redirect('/home');
        } else {
            session()->pull('cart');
            return redirect('/');
        }
    }

    public function checkout()
    {
        if (!Session('cart')) {
            return view('/home');
        }
        $oldcart = Session('cart');
        $cart = new Cart($oldcart);
        $total = $cart->totalPrice;

        return view('product.checkout', compact('total'));
    }

    public function checkouted(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
        ]);

        $cartcheckout = new Item();
        $cartcheckout->total = $request->input('total');
        $cartcheckout->name = $request->input('name');
        $cartcheckout->phone = $request->input('phone');
        $cartcheckout->email = $request->input('email');
        $cartcheckout->address = $request->input('address');

        $cartcheckout->save();

        if (session()->has('cart')) {
            session()->pull('cart');
            return redirect('/home');
        }
    }

    

    public function deleteItemCart($id)
    {
    }
}
