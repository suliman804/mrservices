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
			<h4>Visitors</h4>	
				
				<div class="row">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Date</td>
								<td>IP</td>
								<td>Country</td>
								<td>State</td>
								<td>City</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($visitors as $c)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$c->created_at}}</td>
									<td>{{$c->ip}}</td>
									<td>{{$c->country}}</td>
									<td>{{$c->state}}</td>
									<td>{{$c->city}}</td>
								</tr>
							@endforeach
						</tbody>		
					</table>	
				</div>
				{{$visitors->links()}}
			</div>
		</div>
		
	</div>
</div>

@endsection