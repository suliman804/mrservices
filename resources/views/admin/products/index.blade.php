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
			<h4>Products</h4>		

				<div class="row">
					<div class="col-md-12">
						<a style="float: right;margin-bottom: 10px;" href="{{route('admin.product.create')}}" class="btn btn-success">Add Product</a>
					</div>
					<div class="col-md-12">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Image</td>
								<td>Title</td>
								<td>Price</td>
								<td>Sale Price</td>
								<td>Show Price</td>
								<td>Active?</td>
								<td>Visitors</td>
								<td>Actions</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($products as $c)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td><img src="{{Storage::disk('public')->url('products/'.$c->image)}}" width="200" height="200" /></td>
									<td>{{$c->title}}</td>
									<td>{{$c->price}}</td>
									<td>{{$c->sale_price}}</td>
									<td>{{$c->show_price?'Yes':'No'}}</td>
									<td>{{$c->is_active?'Yes':'No'}}</td>
									<td>{{$c->visitor_count}}</td>
									<td>
										<a href="{{route('admin.product.edit',['id'=>$c->id])}}" class="btn btn-info btn-sm">Edit</a>
										<a href="{{route('admin.product.delete',['id'=>$c->id])}}" class="btn btn-danger btn-sm">Delete</a>
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