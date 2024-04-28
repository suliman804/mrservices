<!-- resources/views/emails/order_placed_admin.blade.php -->

<p>New order has been placed!</p>
<p>Order ID :  {!!$mailData['order_id']!!}</p>
<p>Person Name: {!!$mailData['order_details']['first_name']!!}</p>
<p>Person Email: {!!$mailData['order_details']['email']!!}</p>
<p>Person Contact: {!!$mailData['order_details']['contact']!!}</p>
<p>Total Amount: &#163;{!!$mailData['order_details']['total_amount']!!}</p>
<p>Address: {!!$mailData['order_details']['address']!!}</p>

