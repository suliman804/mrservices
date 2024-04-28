<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use DonatelloZa\RakePlus\RakePlus;
class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $course = Course::get();
        return view('admin.courses.index',compact('course'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function save(Request $request)
    {
        $new = new Course;
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
        $new->meta_keywords = $tags;


            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'course',
                          $image,
                          'public' );
                      $new->image = $image;
                }
            if($request->has('image2')){

                $image2 =  $request->file('image2')->getClientOriginalName();
                      $request->file('image2')->storeAs(
                          'course',
                          $image2,
                          'public' );
                      $new->image2 = $image2;
                }

        $new->save();

        return redirect()->route('admin.courses');
    }  

     public function edit($id)
    {
        $course = Course::where('id',$id)->first();
        return view('admin.courses.edit',compact('course'));
    }

    public function delete($id)
    {
        Course::where('id',$id)->delete();
        return redirect()->back();
    }  

    public function update(Request $request)
    {
        $new = Course::where('id',$request->id)->first();
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
        $new->meta_keywords = $tags;

            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'course',
                          $image,
                          'public' );
                      $new->image = $image;
                }
         if($request->has('image2')){

            $image2 =  $request->file('image2')->getClientOriginalName();
                  $request->file('image2')->storeAs(
                      'course',
                      $image2,
                      'public' );
                  $new->image2 = $image2;
            }   
        $new->save();

        return redirect()->route('admin.courses');
    }    

}