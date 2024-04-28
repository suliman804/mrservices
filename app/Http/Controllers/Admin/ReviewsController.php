<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;
class ReviewsController extends Controller
{
    /**
   * Display a listing of the resource.
   */
  public function index()
  {
      $reviews = Reviews::all();
      return view('admin.review.index', compact('reviews'));

  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view('admin.review.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function save(Request $request)
  {
      $data = $request->validate([
          'name' => ['required', 'string', 'min:2', 'max:255','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
          'phone' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:reviews'],
          'message' => ['required', 'string', 'min:10'],
      ]);
        $review = new Reviews();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->phone = $request->phone;
        $review->message = $request->message;

        $review->save();
    
      return redirect()->route('admin.review');

  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
      $review = Reviews::where('id', $id)->first();
      return view('admin.review.edit',compact('review'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
      $review = Reviews::where('id',$request->id)->first();
      $data = $request->validate([
        'name' => ['required', 'string', 'max:255','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
        'phone' => ['required'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'message' => ['required', 'string', 'min:10'],
      ]);
      $review->name = $request->name;
      $review->email = $request->email;
      $review->phone = $request->phone;
      $review->message = $request->message;
     
      $review->save();
     
  return redirect()->route('admin.review');   
 }


  /**
   * Remove the specified resource from storage.
   */
  public function delete(string $id)
  {
  
          $Reviews = Reviews::where('id',$id)->first();
         
          $Reviews->delete();
          return redirect()->back();
      
}
}