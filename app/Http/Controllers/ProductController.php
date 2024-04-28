<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\GetQuote;
class ProductController extends Controller
{
    public function products(Request $request)
    {
        $products = Product::select()->orderBy('title','asc');
        if($request->has('s')){
           $products = $products->Where('title', 'like', '%' . $request->s . '%');     
        }
           $products = $products->where('is_active',1)->get(); 
        return view('products',compact('products'));
    }

    public function product_view($slug)
    {
        $product = Product::where('id',$slug)->first();
        if(empty($product)){
            abort(404);
        }
        $product->visitor_count = $product->visitor_count + 1;
        $product->save();

        return view('single_product',compact('product'));
    }

    public function get_a_quote($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('get_quote',compact('product'));
    }

    public function saverequestquote(Request $request)
    {
        $new = new GetQuote();
        $new->name = $request->username;  
        $new->email = $request->email;
        $new->phone = $request->phone;
        $new->city  = $request->city;
        $new->product_id = $request->product_id;
        $new->save();

        return redirect()->route('thankyou');
    }

}
