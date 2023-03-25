<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    //

    // public function index()
    // {
    //     $product = Product::all();

    //     return view('layouts.include.menu', compact('product'));
    // }

    // public function addToCart(Product $product)
    // {
    //     $cart = Cart::where('product_id', $product->id)
    //         ->where('user_id', auth()->id())
    //         ->first();

    //     if ($cart) {
    //         $cart->increment('quantity');
    //     } else {
    //         $cart = new Cart;
    //         $cart->user_id = auth()->id();
    //         $cart->product_id = $product->id;
    //         $cart->quantity = 1;
    //         $cart->save();
    //     }

    //     return back()->with('success_message', 'Item has been added to your cart!',compact('product'));
    // }
}
