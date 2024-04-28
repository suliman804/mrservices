<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\CareerList;
use Mail;
use App\Mail\CareerMail;
class CareerController extends Controller
{
    public function careers(Request $request)
    {
        $careers = Career::orderBy('id','desc')->paginate(30);
        return view('admin.careers',compact('careers'));    
    }

    public function careers_reply($id)
    {
         $career = Career::where('id',$id)->first();
         return view('admin.careers_reply',compact('career'));    
    }

    public function careers_reply_save(Request $request)
    {
        //dd($request->reply);
         $career = Career::where('id',$request->id)->first();
          $career->is_read = 1;
         $career->save();
         $mailData = [
            'title' => 'Reply from Construction',
            'body' => $request->reply,
            'subject' =>'Update On Resume'
        ];
        $mail = Mail::to($career->email)->send(new CareerMail($mailData));
        return redirect()->back();
    }

    public function careers_list(Request $request)
    {
        $careers = CareerList::orderBy('id','desc')->paginate(30);
        return view('admin.careers_list',compact('careers'));    
    }

    public function careers_list_save(Request $request)
    {
        $new = new CareerList();
        $new->name = $request->title;
        $new->is_active = $request->active;
        $new->save();
        return redirect()->back();
    }
    
    public function careers_list_status($id)
    {
        $new = CareerList::where('id',$id)->first();

            if($new->is_active==1){
                $new->is_active = 0;
            }else{
                $new->is_active = 1;
            }

        $new->save();
        return redirect()->back();
    }


    public function career_us_readALL(Request $request)
    {
        $list = explode(',', $request->read_list);

        foreach($list as $l){
            $lt = Career::where('id',$l)->first();
            $lt->is_read = 1;
            $lt->save();
        }

        return redirect()->back();

    }

    public function career_us_mark_all()
    {
        $list = Career::where('is_read', '0')->orWhereNull('is_read')->get();
        foreach($list as $lt){
            $lt = Career::where('id',$lt->id)->first();
            $lt->is_read = 1;
            $lt->save();
        }

        return redirect()->back();

    }

    


    

}
