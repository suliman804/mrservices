<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
// use Cart;

class CartController extends Controller
{
    public function index()
    {
 
    	
        $cartItems = Cart::instance('cart')->content();
        // echo $cartItems;
        return view('cart', ['cartItems' => $cartItems]);
    }

    public function CheckOut(){
        $cartItems = Cart::instance('cart')->content();
        return view('checkout', ['cartItems' => $cartItems]);
    }

    public function addtoCart(Request $request){
        $product = Product::find($request->id);
        Cart::instance('cart')->add($product->id,$product->title,$request->quantity,$product->price)->associate('App\Models\Product');

        return redirect()->back()->with('success', 'Item has been added successfully!');
    }

    public function removeItem(Request $request){
        $rowid = $request->rowid;
        Cart::instance('cart')->remove($rowid);
        return redirect()->route('cart')->with('success', 'Item has been remove successfully!');
    }

    public function clearCart(){
        
        Cart::instance('cart')->destroy();
        return redirect()->route('cart');
    }

    public function updateCart(Request $request){
        Cart::instance('cart')->update($request->rowId, $request->quantity);
        return redirect()->route('cart');
    }
}
// ,['image'=> $product->image]