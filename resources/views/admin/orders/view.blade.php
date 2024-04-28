@extends('backendPartials.default')
@section('section')
<style type="text/css">
.margin {
    padding: 3px;
}

.input {
    border-radius: 5px;
}
</style>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <h4>View Product</h4>
               
            </div>
            <table class="table table-striped table-bordered">
              <tr>
                    <td><b>Order ID</b> </td>
                    <td>{{$order->id}}</b></td>
              </tr>
              <tbody>
                  
              
                <tr>
                    <td><b>Customer Name</b></td>
                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                </tr>
            </tbody>
            </table>
        </div>

        

        <div class="card">
            <div class="card-body">
                <h4>Order Items</h4>
               
            </div>
            <table class="table table-striped table-bordered">
            @foreach ($order->items as $orderItem)
              <tr>
                    <td><b>Product</b> </td>
                    <td>{{$orderItem->product->title}}</b></td>
              </tr>
              <tr>
                    <td><b>Product Quantity</b> </td>
                    <td>{{$orderItem->quantity}}</b></td>
              </tr>
              @endforeach
              <tbody> </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Payment</h4>
               
            </div>
            <table class="table table-striped table-bordered">
              <tr>
                    <td><b>Amount</b> </td>
                    <td>{{$order->total_amount}}</b></td>
              </tr>
              <tbody>
                  
              
                <tr>
                    <td><b>Payment</b></td>
                    <td>{{$order->payment}}</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Contact Info</h4>
               
            </div>
            <table class="table table-striped table-bordered">
              <tr>
                    <td><b>Contact</b></td>
                    <td colspan="3">{{$order->contact}}</td>

                    <td colspan="3"><b>Email</b></td>
                    <td>{{$order->email}}</td>
              </tr>
              <tbody>
                <tr>
                    <td><b>Country</b></td>
                    <td>{{$order->country}}</td>

                    <td><b>City</b></td>
                    <td>{{$order->city}}</td>
                    <td><b>State</b></td>
                    <td>{{$order->state}}</td>
                    <td><b>Postal Code</b></td>
                    <td>{{$order->postal_code}}</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td colspan="8">{{$order->address}}</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('jsOutside')
<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>

<script>
CKEDITOR.replace('message');
</script>
@endsection