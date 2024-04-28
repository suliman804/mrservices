<!-- resources/views/emails/order_placed_user.blade.php -->

<p>Thank you, {!!$mailData['order_details']['first_name'].' '.$mailData['order_details']['last_name']!!}, for placing your order!</p>
<p>Order ID :  {!!$mailData['order_id']!!}</p>