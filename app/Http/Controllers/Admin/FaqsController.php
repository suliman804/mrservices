<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FaqsController extends Controller
{
     /**
   * Display a listing of the resource.
   */
  public function index()
  {
      $faqs = Faqs::all();
      return view('admin.faqs.index', compact('faqs'));

  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view('admin.faqs.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function save(Request $request)
  {
      $data = $request->validate([
          'title' => ['required', 'string', 'min:2', 'max:255'],
          'message' => ['required', 'string', 'min:10'],
      ]);
        $faqs = new Faqs();
        $faqs->title = $request->title;
        $faqs->message = $request->message;

        $faqs->save();
    
      return redirect()->route('admin.faqs');

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
      $faqs = Faqs::where('id', $id)->first();
      return view('admin.faqs.edit',compact('faqs'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
      $faqs = Faqs::where('id',$request->id)->first();
      $data = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'message' => ['required', 'string', 'min:10'],
      ]);
      $faqs->title = $request->title;
      $faqs->message = $request->message;
     
      $faqs->save();
     
  return redirect()->route('admin.faqs');   
 }


  /**
   * Remove the specified resource from storage.
   */
  public function delete(string $id)
  {
  
          $faqs = Faqs::where('id',$id)->first();
         
          $faqs->delete();
          return redirect()->back();
      
}
}