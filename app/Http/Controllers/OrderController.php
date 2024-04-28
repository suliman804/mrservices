<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Mail;

use App\Mail\OrderPlacedAdmin;
use App\Mail\OrderPlacedUser;
use App\Models\Product;
use Session;
use Stripe;

class OrderController extends Controller
{	

public function stripe(Request $request)
{
    // Ensure that 'request_data' is present in the query parameters
    if (!$request->has('request_data')) {
        return redirect()->route('cart')->with('error', 'Invalid request.');
    }

    // Deserialize and decode the data from the query parameter
    $requestData = unserialize(urldecode($request->query('request_data')));

    // Validate the data, and ensure required fields are present
    // Add more specific validation as needed
    if (empty($requestData['first_name']) || empty($requestData['email'])) {
        return redirect()->route('cart')->with('error', 'Invalid request data.');
    }

    try {
        $totalAmount = intval(Cart::instance('cart')->total());

        // Create the order
        $order = Order::create([
            'first_name' => $requestData['first_name'],
            'last_name' => $requestData['last_name'] ?? '',
            'company_name' => $requestData['company_name'] ?? '',
            'email' => $requestData['email'],
            'contact' => $requestData['contact'] ?? '',
            'country' => $requestData['country'] ?? '',
            'city' => $requestData['city'] ?? '',
            'state' => $requestData['state'] ?? '',
            'address' => $requestData['address'] ?? '',
            'postal_code' => $requestData['postal_code'] ?? '',
            'payment' => 'successful',
            'total_amount' => $totalAmount,
        ]);

        // Add order items
        $cartItems = Cart::instance('cart')->content();

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->id,
                'quantity' => $cartItem->qty,
                'unit_price' => $cartItem->price * $cartItem->qty,
            ]);
        }

        Cart::destroy();

        // Send emails
        $data = ['order_id' => $order->id, 'order_details' => $order];
        Mail::to('sulimanahmad804@gmail.com')->send(new OrderPlacedAdmin($data));
        Mail::to($requestData['email'])->send(new OrderPlacedUser($data));

        return redirect()->route('cart')->with('success', 'Your order placed successfully');
    } catch (\Exception $e) {
        // Log the exception or handle it as needed
        return redirect()->route('cart')->with('error', 'Error processing the order.');
    }
}

    public function stripePost(Request $request)
    {
    	// $totalAmount = intval($request->input('total_amount'));
    	$totalAmount = intval(Cart::instance('cart')->total());
    	$productName = $request->input('product_name');
    	$email = $request->input('email');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

		$totalAmountInCents = round($totalAmount * 100); // Convert to cents

		$session = \Stripe\Checkout\Session::create([
			'customer_email' => $email,
		    'line_items' => [
		        [
		            'price_data' => [
		                'currency' => 'gbp',
		                'product_data' => [
		                    'name' => $productName,
		                ],
		                'unit_amount' => $totalAmountInCents,
		            ],
		            'quantity' => 1,
		        ],
		    ],
		    'mode' => 'payment',
            'allow_promotion_codes'=>true,
			'success_url' => route('stripe.get') . '?request_data=' . urlencode(serialize($request->all())),
		    'cancel_url' => route('checkout'),
		]);

		return redirect()->away($session->url);
        
        if (strpos($session->url, 'cart') !== false) {

         	$order = Order::create([
	            'first_name'=> $request->input('first_name'),
		        'last_name'=> $request->input('last_name'),
		        'company_name'=> $request->input('company_name'),
		        'email'=> $request->input('email'),
		        'contact'=> $request->input('contact'),
		        'country'=> $request->input('country'),
		        'city'=> $request->input('city'),
		        'state'=> $request->input('state'),
		        'address'=> $request->input('address'),
		        'postal_code'=> $request->input('postal_code'),
		        'payment'=> 'successfull',
		        'total_amount' => $request->input('total_amount')
	        ]);

	        $cartItems = Cart::instance('cart')->content();
	        
			foreach ($cartItems as $cartItem) {
			    $orderItem = OrderItem::create([
			        'order_id' => $order->id,
			        'product_id' => $cartItem->id,
			        'quantity' => $cartItem->qty,
			        'unit_price' => $cartItem->price * $cartItem->qty,
			    ]);
			}

			Cart::destroy();

			$data = ['order_id' => $order->id,'order_details' =>$order];
			Mail::to('sulimanahmad804@gmail.com')->send(new OrderPlacedAdmin($data));
       		Mail::to($request->input('email'))->send(new OrderPlacedUser($data));
         }     
    }

     public function store(Request $request)
    {
    	 // Store order items
        
        if (Cart::instance('cart')->count() === 0) {

         return redirect()->route('cart')->with('success', 'Your Cart is empty');

        }else{
	        $total_amount = Cart::instance('cart')->total();	        
        }
    }

    public function adminIndex(Request $request)
    {
         // Store order items
        $orders = Order::with('items')->get();
        return view('admin.orders.index',compact('orders'));
    }
    
    public function adminViewOrder($id)
    {
         // Store order items
        $order = Order::with('items.product')->find($id);
        return view('admin.orders.view',compact('order'));
    }

    //Delete Order
        public function adminDeleteOrder($id)
        {
            // Find the order
            $order = Order::findOrFail($id);

            // Find all related order items
            $orderItems = OrderItem::where('order_id', $order->id)->get();

            // Delete each order item
            // foreach ($orderItems as $orderItem) {
            //     $orderItem->delete();
            //     $book = Book::findOrFail($orderItem->book_id);
            //     $book->order_status = 'No Order';
            //     $book->save();
            // }

            // Delete the order
            $order->delete();

            return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully!');
        }
}
