@extends('backendPartials.default')
@section('section')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-2">
						@include('admin.frontendSettings.partialsn.homepage_settings_sidebar')
					</div>

					<div class="col-md-10">
						<h4>Gallery Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" id="sliderForm" action="{{route('admin.save.gallery')}}" enctype="multipart/form-data">
								@csrf
								<label>Add New</label>
								<hr>
								<label>Heading</label>
								<input type="text" required name="heading" id="heading" class="form-control" required>

								<label>Desc.</label>
								<input type="text" required name="desc" id="desc" class="form-control" required>

								<label>Image</label>
								<input type="file" required id="image" name="image" accept="image/*" class="form-control">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
							</form>
						</div>	

						<div class="col-md-12">

							<div class="row">
							@foreach($gallery as $s)
							 @php $image = Storage::disk("public")->url('frontend/home/'.$s->image); @endphp
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<img src="{{$image}}" style="width:100%">
											<h3>{{$s->heading}}</h3>
											<hr>
											<a  class="btn btn-success btn-sm editSlider" data-data="{{$s}}">Edit</a>
											<a href="{{route('admin.gallery.delete',['id'=>$s->id])}}" class="btn btn-danger btn-sm">Delete</a>
										</div>
									</div>
								</div>
							@endforeach
							</div>

						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('jsOutside')
 <script>
 	$('.editSlider').click(function(){
 		var data = $(this).data('data');
 		$('#heading').val(data.heading);
 		$('#desc').val(data.description);
 		var id = '<input type="hidden" value="'+data.id+'" name="id">';
 		$('#image').removeAttr('required');
 		$('#sliderForm').append(id);
 	});
 </script>

@endsection