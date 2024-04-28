<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomepageSlider;
use App\Models\ContactUs;
use App\Models\Faqs;
use App\Models\InfoSection;
use App\Models\ContactBlockList;
use App\Models\Career;
use App\Models\CareerList;
use App\Models\Visitor;
use App\Models\Reviews;
use Spatie\Sitemap\SitemapGenerator;
use Stevebauman\Location\Facades\Location;
use Mail;
use App\Mail\CareerMail;
use App\Mail\QuoteMail;
use App\Models\Product;
use App\Models\GetQuote;
use App\Models\Quote;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\Team;
use App\Models\Order;
use App\Models\Gallery;
use App\Rules\ReCaptcha;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $start_date = date('Y-m-01');
        $end_date = date('Y-m-d');        

        $begin = new \DateTime( $start_date );
        $end   = new \DateTime( $end_date );
        $records = [];
        $dates = [];
        for($i = $begin; $i <= $end; $i->modify('+1 day')){
            $visitor = Visitor::whereDate('created_at',$i->format("Y-m-d"))->groupBy('ip')->get();
            $visitor = $visitor->count();
            array_push($records,$visitor);
            array_push($dates, $i->format("m-d"));
        }

        $current_date = date('Y-m-d');
        $start_date = date('Y-m-01',strtotime("-4 month"));
        $end_date = date('Y-m-31',strtotime("+4 month"));        



        $begin = new \DateTime( $start_date );
        $end   = new \DateTime( $end_date );

/*        $vis = Visitor::whereBetween('created_at',['2022-12-01','2022-12-31'])->groupBy('ip')->get();*/

        $total_visitors = 0;

        $records_y = [];
        $dates_y = [];
        $current_month_visitors = 0;$previos_month_visitors = 0;
        for($i = $begin; $i <= $end; $i->modify('+1 month')){


            $start_d = date($i->format("Y").'-'.$i->format("m").'-01');
            $end_d = date($i->format("Y").'-'.$i->format("m").'-31');
            
            $visitor = Visitor::whereBetween('created_at',[$start_d,$end_d])->groupBy('ip')->get();
            $visitor = $visitor->count();

            if($i->format("m")==date('m')){
                $current_month_visitors = $visitor;
            }

            if($i->format("m")==date('m', strtotime("-1 month"))){
                $previos_month_visitors = $visitor;
            }

            $total_visitors = $total_visitors + $visitor;
            array_push($records_y,$visitor);
            array_push($dates_y, $i->format("F"));
        }


                //dd($records_y,$dates_y);
        $new_applicant = Career::whereNULL('is_read')->count();
        $new_queries = ContactUs::whereNULL('is_read')->count();
        $new_quotes = Quote::whereNULL('is_read')->count();
        $total_quotes = Quote::all()->count();
        $Orders = Order::all()->count();
/*        $total_visitors = Visitor::groupBy('ip')->get();*/

        $total_product_visitors = Product::sum('visitor_count');

        if($previos_month_visitors!=0){
            $average_month_visitor = ($current_month_visitors / $previos_month_visitors);
            $average_month_visitor = $average_month_visitor * 100;
            $average_month_visitor = round($average_month_visitor);
            $average_month_visitor = 100- $average_month_visitor;
        }else{
            $average_month_visitor = 1;
            $average_month_visitor = $average_month_visitor * 100;            
        }

        $top_product = Product::orderBy('visitor_count','desc')->first();
        $top_course = Course::orderBy('visitor_count','desc')->first();        
        $reviews = Reviews::count();

        $countries = [];
        $countries_list = Visitor::groupBy('country')->get()->pluck('country')->toArray();
        $colors = [];    
        foreach($countries_list as $cl => $l){
            $clv = Visitor::where('country',$l)->groupBy('ip')->get();
            array_push($countries,$clv->count());
            $rand = '#'.str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
            array_push($colors,$rand);
        }


        return view('home',compact('records','dates','records_y','dates_y','new_applicant','new_queries','total_visitors','total_product_visitors','current_month_visitors','average_month_visitor','previos_month_visitors','new_quotes','top_product','top_course','reviews','countries_list','countries','colors','Orders','total_quotes'));
    }

    public function welcome(Request $request)
    {
        $sliders = HomepageSlider::get();  
        $abouts = AboutUs::get();
        $infoSection = InfoSection::all();
        $services = Course::all();
        $reviews = Reviews::all();
        $aboutUs = AboutUs::all();
        $faqs = Faqs::get();
        $gallery_headings = Gallery::groupBy('heading')->limit(5)->get();
        $gallery_id = $gallery_headings->pluck('heading')->toArray();
        $gallery =   Gallery::whereIn('heading',$gallery_id)->get();
        $teams =   Team::where('is_active',1)->get();
        return view('welcome',compact('faqs','gallery','sliders','abouts','infoSection','services','reviews','aboutUs','teams','gallery_headings'));
    }

    public function about_us(Request $request)
    {
        $aboutUs = AboutUs::all();
        return view('about_us',compact('aboutUs'));
    }
    
    public function privacy()
    {
        return view('privacy');
    }


    public function contactus()
    {
        return view('contactus');
    }
    public function massegeStore(Request $request) {
       
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contact_us'],
            'name' => ['required', 'string', 'max:255','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'message' => ['required', 'min:10'],
        ]);
        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->message = $request->message;

        $contactUs->save();
        return response()->json(['success' => 'Your Message Recieved Successfully!']);

    }

    public function careers()
    {
        $list = CareerList::where('is_active',1)->get();
        return view('careers',compact('list'));        
    }

     public function savecontactus(Request $request)
    {  
        // dd($request->all());


        // echo "<script> alert('Contact us save') </script>";
        // $name_check = ContactBlockList::where('name',$request->username)->first();
        // $email_check = ContactBlockList::where('name',$request->email)->first();        
        // $phone_check = ContactBlockList::where('name',$request->phone)->first();    

        // $request->validate([
        //     'g-recaptcha-response' => ['required', new ReCaptcha]
        // ]);

        // if(!empty($name_check)){
        //     return redirect()->route('thankyou');
        // }   

        // if(!empty($email_check)){
        //     return redirect()->route('thankyou');    
        // }

        // if(!empty($phone_check)){
        //     return redirect()->route('thankyou');    
        // }

            $ticketId = md5(date('Y-m-d').microtime());
            $ticketId = substr($ticketId,0,7);
            
            $co = new ContactUs();
            $co->ticket_id = $ticketId;  
            $co->name = $request->username;    
            $co->email  = $request->email;  
            $co->phone    = $request->phone;
            $co->message  = $request->message;
            // $co->department = $request->department;
            $co->save();

             $mailData = [
                 'subject' => 'Thanks for connecting with us',                
                'title' => 'Reply from Construction',
                'body' => 'Dear '.$request->username.' <br>Thanks for contacting Mr4 Services. Our team will reply soon. <br> If you doesnot get a reply from us. Please call on the following number +01212272475.<br>Thanks'
            ];
            $mail = Mail::to($request->email)->send(new CareerMail($mailData));


        return redirect()->back()->with('success', 'Your message sent successfully!');

    }


     public function career_post(Request $request)
    {
        $ext = $request->file('cv')->extension();

        if($ext!='docx' && $ext!='doc' && $ext!='pdf'){

            return redirect()->back()->withInput()->with('file_error','This format isnot supported');

        }else{

            $c = new Career();
            $c->name = $request->name;    
            $c->email  = $request->email;  
            $c->phone    = $request->phone;
            $c->address  = $request->address;
            $c->joining_date = $request->date;
            $c->experience = $request->experience;
            $c->technology  = $request->technology ;

            if($request->has('cv')){

                $cvC =  $request->file('cv')->getClientOriginalName();
                      $request->file('cv')->storeAs(
                          'cvs',
                          $cvC,
                          'public' );
                      $c->cv = $cvC;
                } 

            $c->save();

             $mailData = [
                 'subject' => 'Thanks for submitting your cv',
                'title' => 'Reply from Construction',
                'body' => 'Dear '.$request->username.' <br>Thanks for applying on Construction. Our team will reply soon. <br> If you doesnot get a reply from us. Please call on the following number +923205038329.<br>Thanks'
            ];
            $mail = Mail::to($request->email)->send(new QuoteMail($mailData));


            return redirect()->route('career_thankyou');

        }   



    }    



    public function thankyou()
    {
        return view('thankyou');        
    }

    public function career_thankyou()
    {
        return view('career_thankyou');        
    }    

    public function services()
    {
        // return view('services');
        $services = Course::all();
        return view('services',compact('services'));
    }

    public function generate_sitemaps()
    {
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('https://kreashionsoftwarehouse.com')->writeToFile($path);
        dd('a');
    }

    public function reviews()
    {
        return view('reviews');        
    }

    public function savereview(Request $request)
    {

            $co = new Reviews();
            $co->name = $request->name;    
            $co->email  = $request->email;  
            $co->phone    = $request->phone;
            $co->message  = $request->message;
            $co->save();

             $mailData = [
                'subject' => 'Thanks for reviewing',
                'title' => 'Reply from Construction',
                'body' => 'Dear '.$request->name.' <br>Thanks for reviewing Construction.<br>Thanks'
            ];
            $mail = Mail::to($request->email)->send(new CareerMail($mailData));


        return redirect()->route('thankyou');

    }

    public function team()
    {
        $team = Team::where('is_active',1)->get();
        return view('team',compact('team'));
    }

    public function faq()
    {
        $faqs = Faqs::all();
        return view('faqs',compact('faqs'));
    }
   


  public function service_detail($id)
    {   
         $single_service = Course::find($id);
        // $services = Course::all();
        return view('services-detail',['serviceDetails' => $single_service]);
    
    }
  
  public function quotation()
    {
        return view('quotation');
    
    }

    //Save Quotation
    public function saveQuote(Request $request)
    {  
        // Debugging to check the incoming request data
        // dd($request->all());
         // dd('Data');
        // Validate the form data
        $validatedData = $request->validate([
            'form-name' => 'required|string',
            'form-email' => 'required|email',
            'form-phone' => 'required|string',
            'form-move-from' => 'required|string',
            'form-Move-to' => 'required|string', // Check if this matches your form field name
            'form-transport-type' => 'required|string',
            'form-date' => 'required|date|after_or_equal:' . now()->toDateString(),
            'form-time' => 'required',
            'form-message' => 'nullable|string',
        ], [
            'form-date.after_or_equal' => 'The date should not be before the current date.'
        ]);

       

        // Create a new Quote instance
        $quote = new Quote;

        // Assign values from the form to the model attributes
        $quote->name = $validatedData['form-name'];
        $quote->email = $validatedData['form-email'];
        $quote->phone = $validatedData['form-phone'];
        $quote->move_from = $validatedData['form-move-from'];
        $quote->move_to = $validatedData['form-Move-to']; // Check if this matches your form field name
        $quote->transport_type = $validatedData['form-transport-type'];
        $quote->transport_date = $validatedData['form-date'];
        $quote->transport_time = $validatedData['form-time'];
        $quote->message = $validatedData['form-message'];
        $quote->services_id = $request->input('form-service-id');

        // Save the quote to the database
        if ($quote->save()) {
            // Prepare email data
            $mailData = [
                'subject' => 'A New Quotation has been submitted',                
                'title' => 'From '.$quote->email.'',
                'name' => $quote->name,
                'email' => $quote->email,
                'phone' => $quote->phone,
                'move_from' => $quote->move_from,
                'move_to' => $quote->move_to,
                'transport_type' => $quote->transport_type,
                'transport_date' => $quote->transport_date,
                'message' => $quote->message,
            ];

            $email = 'Quote@mr4servicesv.co.uk';  

            // Send email
            $mail = Mail::to($email)->send(new QuoteMail($mailData));

            // Check if email sent successfully
            if (!$mail) {
                // Handle email sending failure
                // You might want to log this or display a message to the user
            }
            
            // Redirect back with success message
            return redirect()->back()->with('success', 'Quote submitted successfully!');
        } 
    }

    public function QuoteView(){

        return view('quote_view');
    }
    

}