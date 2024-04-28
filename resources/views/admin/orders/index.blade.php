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
                <h4>All Orders</h4>

                <div class="row">
                   
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Contact</td>
                                    <td>Amount</td>
                                    <td>Payment</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->contact}}</td>
                                    <td>{{$order->total_amount}}</td>
                                    <td>{{$order->payment}}</td>
                                    <td>
                                        <a href="{{route('admin.order.view',['id'=>$order->id])}}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{route('admin.order.delete',['id'=>$order->id])}}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection