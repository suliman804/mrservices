<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Mail;
use App\Mail\UserEmail;
class SubscriptionController extends Controller
{
    public function index(){
       $subscriptions = Subscription::paginate(15);
        return view('admin.newsletterSubscription',compact('subscriptions'));
    }
    public function subscriptionStore(Request $request)
    {
      
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:subscriptions'],
        ]);
        $subscription = new Subscription();
        $subscription->email = $request->email;

        $subscription->save();
        $details = [
            'title' => 'Subscribe to All Tech Men Newsletter',
        ];
        
       \Mail::to('shamsafarooq24@gmail.com')->send(new UserEmail($details));
        return response()->json(['success' => ' Subscribe Newsletter successfully']);

    }
}