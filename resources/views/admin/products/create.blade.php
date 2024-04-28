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
			<h4>Product Add</h4>		
				<form method="post" action="{{route('admin.product.save')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<label>Title</label>	
							<input type="text" required name="title" class="form-control">
						</div>

						<div class="col-md-4">
							<label>Price</label>	
							<input type="number" required name="price" class="form-control">
						</div>

						<div class="col-md-4">
							<label>Sale Price</label>	
							<input type="number" value="0" required name="sale_price" class="form-control">
						</div>

						<div class="col-md-4">
							<label>Category</label>	
							<input type="text" required name="category" class="form-control">
						</div>

						<div class="col-md-4">
							<label>Is Active</label>	
							<select name="is_active" required class="form-control">
								<option value="1">Yes</option>	
								<option value="0">No</option>
							</select>
						</div>

						<div class="col-md-4">
							<label>Show Price</label>	
							<select name="show_price" required class="form-control">
								<option value="1">Yes</option>	
								<option value="0">No</option>
							</select>
						</div>

						<div class="col-md-4">
							<label>Image</label>	
							<input type="file" required name="image" class="form-control">
						</div>

						<div class="col-md-12">
							<label>Short Desc.</label>	
							<textarea name="short_desc" class="form-control"></textarea>
						</div>	

						<div class="col-md-12">
							<label>Desc.</label>	
							<textarea name="desc" class="form-control"></textarea>
						</div>	

						<div class="col-md-12">
							<button name="submit" class="btn btn-success mt-3 btn-raised">Submit</button>
						</div>
					</div>
				</form>

			</div>
		</div>
		
	</div>
</div>
@endsection
@section('jsOutside')
	<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

	 <script>
           CKEDITOR.replace( 'short_desc' );
           CKEDITOR.replace( 'desc' );
     </script>
@endsection