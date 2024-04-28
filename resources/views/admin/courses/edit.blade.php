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
			<h4>Service Add</h4>		
				<form method="post" action="{{route('admin.course.update')}}" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="id" value="{{$course->id}}">
					<div class="row">
						<div class="col-md-9">

							<div class="row">
									<div class="col-md-12">
										<label>Title</label>	
										<input type="text" required name="title" class="form-control" value="{{$course->title}}">
									</div>

									<div class="col-md-4">
										<label>Price</label>	
										<input type="number" required name="price" class="form-control" value="{{$course->price}}">
									</div>

									<div class="col-md-4">
										<label>Sale Price</label>	
										<input type="number" value="0" required name="sale_price" class="form-control" value="{{$course->sale_price}}">
									</div>

									<div class="col-md-4">
										<label>Category</label>	
										<input type="text" required name="category" class="form-control" value="{{$course->category}}">
									</div>

									<div class="col-md-4">
										<label>Is Active</label>	
										<select name="is_active" required class="form-control">
											<option <?php if($course->is_active==1) echo 'selected="selected"'; ?> value="1">Yes</option>	
											<option <?php if($course->is_active==0) echo 'selected="selected"'; ?> value="0">No</option>
										</select>
									</div>

									<div class="col-md-4">
										<label>Show Price</label>	
										<select name="show_price" required class="form-control">
											<option <?php if($course->show_price==1) echo 'selected="selected"'; ?> value="1">Yes</option>	
											<option <?php if($course->show_price==0) echo 'selected="selected"'; ?> value="0">No</option>
										</select>
									</div>

									<div class="col-md-4">
										<label>Image</label>	
										<input type="file" name="image" class="form-control">
									</div>								
							</div>

						</div>
						<div class="col-md-3">
							<img src="{{Storage::disk('public')->url('course/'.$course->image)}}" width="200" height="200" />
						</div>
						<div class="col-md-4">
							<label>Slim Image</label>	
							<input type="file" name="image2" class="form-control">
						</div>
						<div class="col-md-3">
							<img src="{{Storage::disk('public')->url('course/'.$course->image2)}}" width="200" height="200" />
						</div>
						<div class="col-md-12">
							<label>Short Desc.</label>	
							<textarea name="short_desc" class="form-control">{!!$course->short_desc!!}</textarea>
						</div>	

						<div class="col-md-12">
							<label>Desc.</label>	
							<textarea name="desc" class="form-control">{!!$course->desc!!}</textarea>
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
	<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>

	 <script>
           CKEDITOR.replace( 'short_desc' );
           CKEDITOR.replace( 'desc' );
     </script>
@endsection