<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HomepageSlider;
use App\Models\InfoSection;
use App\Models\Events;
use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\Visitor;
use App\Http\Controllers\Controller;
class FrontendController extends Controller
{
    public function frontend_settings(Request $r){

        $slider = HomepageSlider::get();        
        return view('admin.frontendSettings.front.home',compact('slider'));
    }
    public function frontend_settings_homepage_slider_save(Request $r)
    {

        if($r->has('id')){
            $new = HomepageSlider::where('id',$r->id)->first();
        }else{
            $new = new HomepageSlider();            
        }

        $new->heading = $r->heading;
        $new->description = $r->desc;

            if($r->hasFile('image')){
                  $file =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs('frontend/home/',$file, 'public' );

            $new->image = $file;
        }
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();                      


    }

    public function frontend_settings_homepage_slider_delete($id)
    {
       HomepageSlider::where('id',$id)->delete(); 
       \Toastr::success('Deleted','Success');                  
        return redirect()->back();                      
    }

    public function frontend_settings_homepage_gallery_delete($id)
    {
       Gallery::where('id',$id)->delete(); 
       \Toastr::success('Deleted','Success');                  
        return redirect()->back();                      
    }
    public function frontend_settings_homepage_event_delete($id)
    {
       Events::where('id',$id)->delete(); 
       \Toastr::success('Deleted','Success');                  
        return redirect()->back();                      
    }



    public function frontend_settings_info(Request $r){
        $info = InfoSection::first();
        return view('admin.frontendSettings.front.info_section',compact('info'));
    }

     public function frontend_settings_about(Request $r){
        $about = AboutUs::first();
        return view('admin.frontendSettings.front.about_section',compact('about'));
    }
    // public function frontend_settings_about_delete($id)
    // {
    //     AboutUs::where('id',$id)->delete(); 
    //    \Toastr::success('Deleted','Success');                  
    //     return redirect()->back();                      
    // }

    public function frontend_settings_gallery(Request $r){
        $gallery = Gallery::get();        
        return view('admin.frontendSettings.front.gallery',compact('gallery'));
    }

    public function frontend_settings_about_save(Request $r)
    {
        $new = AboutUs::first();
        if(empty($new)){    
            $new = new AboutUs();            
        }

        $new->content = $r->content;
        if($r->hasFile('image')){
            $file =  $r->file('image')->getClientOriginalName();
            $r->file('image')->storeAs('frontend/aboutUs/',$file, 'public' );

      $new->image = $file;
  }
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();                              

    }

    public function frontend_settings_gallery_save(Request $r)
    {

        if($r->has('id')){
            $new = Gallery::where('id',$r->id)->first();
        }else{
            $new = new Gallery();            
        }

        $new->heading = $r->heading;
        $new->description = $r->desc;
          if($r->hasFile('image')){
                  $file =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs(
                      'frontend/home/',
                      $file,
                      'public' );

        $new->image = $file;
    }   
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();                      


    }    

     public function frontend_settings_info_save(Request $r)
    {
        // dd($r->all());
        $new = InfoSection::first();
        if(empty($new)){    
            $new = new InfoSection();            
        }
        $new->heading = $r->heading;
        $new->site_title = $r->site_title;
        $new->description = $r->desc;
        $new->image = $r->image;
        $new->box_1_heading = $r->box_1_heading;
        $new->box_1_description = $r->box_1_description;
        $new->box_2_heading = $r->box_2_heading;
        $new->box_2_description = $r->box_2_description;
        $new->box_3_heading = $r->box_3_heading;
        $new->box_3_description = $r->box_3_description;

        if($r->hasFile('image')){    
            $image =  $r->file('image')->getClientOriginalName();
            $r->file('image')->storeAs(
                'frontend/home/',
                $image,
                'public' );
          $new->image = $image;
        }


        if($r->hasFile('box_1_image')){    
          $box_1_image =  $r->file('box_1_image')->getClientOriginalName();
          $r->file('box_1_image')->storeAs(
              'frontend/home/',
              $box_1_image,
              'public' );
        $new->box_1_image = $box_1_image;
      }

      if($r->hasFile('box_2_image')){    
          $box_2_image =  $r->file('box_2_image')->getClientOriginalName();
          $r->file('box_2_image')->storeAs(
              'frontend/home/',
              $box_2_image,
              'public' );
        $new->box_2_image = $box_2_image;
      }


      if($r->hasFile('box_3_image')){    
          $box_3_image =  $r->file('box_3_image')->getClientOriginalName();
          $r->file('box_3_image')->storeAs(
              'frontend/home/',
              $box_3_image,
              'public' );
        $new->box_3_image = $box_3_image;
      }

        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();                      


    }

    public function frontend_settings_events()
    {
        $events = Events::all();
        return view('admin.frontendSettings.front.events',compact('events'));   
    }

    public function frontend_settings_events_save(Request $r)
    {

        if($r->has('id')){
            $new = Events::where('id',$r->id)->first();
        }else{
            $new = new Events();            
        }
        
        $new->title = $r->title;
        $new->short_description = $r->short_desc;
        $new->long_description = $r->long_desc;
        $new->slug = \Str::slug($r->title);
        $new->datetime = $r->date.' '.$r->time;
        
        if($r->hasFile('image')){    
                  $image =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs(
                      'frontend/home/',
                      $image,
                      'public' );
                $new->image = $image;
              }


        $new->save();

\Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();  
    }

    public function frontend_settings_address()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.front.address',compact('info'));
    }

    public function frontend_settings_address_save(Request $r)
    {

        $new = InfoSection::first();
        if(empty($new)){    
            $new = new InfoSection();            
        }

        $new->email = $r->email;
        $new->phone = $r->phone;
        $new->address = $r->address;
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();       

    }



  public function frontend_settings_footer()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.front.footer',compact('info'));
    }

    public function frontend_settings_footer_save(Request $r)
    {

        $new = InfoSection::first();
        if(empty($new)){    
            $new = new InfoSection();            
        }

        $new->footer_about = $r->footer_about;
        $new->facebook_link = $r->facebook_link;
        $new->twitter_link = $r->twitter_link;
        $new->linkedin_link = $r->linkedin_link;
        $new->open_hours = $r->open_hours;
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();       

    }    


  public function frontend_settings_insights()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.front.insights',compact('info'));
    }

    public function frontend_settings_insights_save(Request $r)
    {

        $new = InfoSection::first();
        if(empty($new)){    
            $new = new InfoSection();            
        }

        $new->events_participated = $r->events_participated;
        $new->classes_completed = $r->classes_completed;
        $new->awards_won = $r->awards_won;
        $new->student_enrolled = $r->student_enrolled;
        $new->save();
       \Toastr::success('Successfully Saved','Success');                  
        return redirect()->back();       

    }  

    public function visitors_ip(Request $request)
    {
        $visitors = Visitor::orderBy('id','desc')->paginate(100);
        return view('admin.visitors_ip',compact('visitors'));
    }

}
