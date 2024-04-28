@extends('backendPartials.default')
@section('section')
<style type="text/css">
	.margin{
		padding: 3px;
	}
	.input{
		border-radius: 5px;
	}
</style>
<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-body">
			<h4>Products Quotes</h4>		

				<div class="row">

					<div class="col-md-12">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td># <input type="checkbox" id="checkall"></td>
								<td>Date</td>
								<td>Name</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Van Size</td>
								<td>Pickup</td>
								<td>Drop off</td>
								<td>Date</td>
								<td>Time</td>
								<td>Message</td>
								<td>Action</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($products as $c)
								<tr>
									<td>@if($c->is_read!=1)<i style="font-size: 10px; color: red" class="bi bi-circle-fill"></i>@endif {{$loop->iteration}} <input type="checkbox" id="check{{$c->id}}" class="checkboxestd" value="{{$c->id}}"></td>
									<td>{{$c->created_at}}</td>
									<td>{{$c->name}}</td>
									<td>{{$c->email}}</td>
									<td>{{$c->phone}}</td>
									<td>{{$c->transport_type}}</td>
									<td>{{$c->move_from}}</td>
									<td>{{$c->move_to}}</td>
									<td>{{$c->transport_date}}</td>
									<td>{{$c->transport_time}}</td>
									<td>{{$c->message}}</td>
									<td>
										<a href="{{route('admin.get_a_quote.mark_as_read',['id'=>$c->id])}}"><i class="bi bi-reply-all-fill" title="Mark as Read"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>		
					</table>

					{{$products->links()}}
					</div>	
				</div>

			</div>
		</div>
		
	</div>
</div>
@endsection