<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Transaction;

class ProductController extends Controller
{
    //
    public function landing(){
        $products = Product::all();

        return view('landing.landing', compact('products'));
    }

    public function index()
    {
        $product = Product::all();

        return view('landing.cart.index', compact('product'));
    }

    public function cart()
    {
        // $product = Product::find($id);
        $product = Product::latest()->paginate(5);
        return view('landing.cart.carts', compact('product'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect("/cart")->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }



    public function checkout(Request $request){
       
        $id_product = $request->id_product;
        $total_pesanan = $request->total_pesanan;
        $totalPrice = $request->totalPrice;
 
            for($i=0;$i<count((array)$id_product);$i++){
                Order::create([
                    'id_product' => $id_product[$i],
                    'total_pesanan' => $total_pesanan[$i],
                    'totalPrice' => $totalPrice[$i]
                ]);

                $product = Product::where('id_product','=',$id_product)->first();
                $total = $product->array['stok']-$total_pesanan[$i];
                $product->update([
                    'stok' => $total[$i],
                ]);
            }
         

       
        // $item = new Product();
        // $total = ($item->stok - $request->total_pesanan);
        // // $item->where('id_product', '=', $request->id_product)->decrement('stok', $request->total_pesanan);
        // Product::where('id_product','=',$id_product)->update(['stok'=>$total]);

        $request->session()->forget('cart');
        
        return redirect('/orders')->with('success', 'Product orders successfully!');

}
}