<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team(Request $request)
    {
        $team = Team::all();
        return view('admin.team',compact('team'));
    }

    
    public function team_save(Request $request)
    {
        $new = new Team;
        $new->name = $request->name; 
        $new->job_title = $request->job_title;
        $new->is_active = $request->active;
            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'team',
                          $image,
                          'public' );
                      $new->image = $image;
                }

        $new->save();

        return redirect()->route('admin.team');
    }

    public function team_delete($id)
    {
        $team = Team::where('id',$id)->delete();
        return redirect()->back();
    }

    public function team_update(Request $request)
    {
        $new = Team::where('id',$request->id)->first();
        $new->name = $request->name; 
        $new->job_title = $request->job_title;
        $new->is_active = $request->active;
            if($request->has('image')){

                $image =  $request->file('image')->getClientOriginalName();
                      $request->file('image')->storeAs(
                          'team',
                          $image,
                          'public' );
                      $new->image = $image;
                }

        $new->save();

        return redirect()->route('admin.team');
    }

    

}
