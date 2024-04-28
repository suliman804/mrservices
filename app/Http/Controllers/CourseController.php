<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courses(Request $request)
    {
        $courses = Course::select();
        if($request->has('s')){
           $courses = $courses->Where('title', 'like', '%' . $request->s . '%');     
        }
           $courses = $courses->where('is_active',1)->get(); 
        return view('courses',compact('courses'));
    }

    public function courses_details($slug)
    {
        $course = Course::select();
           $course = $course->where('slug',$slug)->where('is_active',1)->first(); 

        $course->visitor_count = $course->visitor_count + 1;
        $course->save();

        return view('course_single',compact('course'));
    }
}
