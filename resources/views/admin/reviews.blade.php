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
			<h4>Reviews</h4>		
				<div class="row">	

					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Date</td>
								<td>Name</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Message</td>

							</tr>
						</thead>		

						<tbody>
							@foreach($reviews as $c)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$c->created_at}}</td>
									<td>{{$c->name}}</td>
									<td>{{$c->email}}</td>
									<td>{{$c->phone}}</td>
									<td>{{$c->message}}</td>
								</tr>
							@endforeach
						</tbody>		
					</table>	
				</div>
				{{$reviews->links()}}
			</div>
		</div>
		
	</div>
</div>


@endsection