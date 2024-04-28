<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\GetQuote;
use DonatelloZa\RakePlus\RakePlus;
use App\Models\Quote;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function save(Request $request)
    {
        $new = new Product;
        $new->slug = \Str::slug($request->title);
        $new->title = $request->title; 
        $new->price = $request->price;
        $new->sale_price = $request->sale_price;
        $new->category = $request->category;
        $new->is_active = $request->is_active;
        $new->show_price = $request->show_price;
        $new->short_desc = $request->short_desc;
        $new->desc = $request->desc;

        $desc = strip_tags($request->desc);
        $phrases = RakePlus::create($desc)->get();
        $tags = implode(',', $phrases);

        $short_desc = strip_tags($request->short_desc);
        $phrases_2 = RakePlus::create($short_desc)->get();

        $tags = $tags.','.$tags;
        $new->keywords = $tags;

            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'products',
                          $image,
                          'public' );
                      $new->image = $image;
                }

        $new->save();

        return redirect()->route('admin.products');
    }  

     public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        return view('admin.products.edit',compact('product'));
    }

    public function delete($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->back();
    }  

    public function update(Request $request)
    {
        $desc = strip_tags($request->desc);
        $phrases = RakePlus::create($desc)->get();
        $tags = implode(',', $phrases);

        $short_desc = strip_tags($request->short_desc);
        $phrases_2 = RakePlus::create($short_desc)->get();

        $tags = $tags.','.$tags;

        $new = Product::where('id',$request->id)->first();
        $new->slug = \Str::slug($request->title);
        $new->title = $request->title; 
        $new->price = $request->price;
        $new->keywords = $tags;
        $new->sale_price = $request->sale_price;
        $new->category = $request->category;
        $new->is_active = $request->is_active;
        $new->show_price = $request->show_price;
        $new->short_desc = $request->short_desc;
        $new->desc = $request->desc;

            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'products',
                          $image,
                          'public' );
                      $new->image = $image;
                }

        $new->save();

        return redirect()->route('admin.products');
    }    

    // public function get_a_quote(Request $request)
    // {
    //     $products = GetQuote::orderBy('id','desc')->paginate(30);
    //     return view('admin.products.get_a_quote',compact('products'));
    // }
    public function get_a_quote(Request $request)
    {
        $products = Quote::orderBy('id','desc')->paginate(30);
        return view('admin.products.get_a_quote',compact('products'));
    }

    public function get_a_quote_read($id)
    {
        // $p = GetQuote::where('id',$id)->first();
        $p = Quote::where('id',$id)->first();
        $p->is_read = 1;
        $p->save();

        return redirect()->back();
    }   

    
}   
