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
						<h4>Events Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" id="sliderForm" action="{{route('admin.save.events')}}" enctype="multipart/form-data">
								@csrf
								<label>Add New</label>
								<hr>
								<label>Title</label>
								<input type="text" required name="title" id="title" class="form-control" required>

								<label>Short Desc.</label>
								<textarea type="text" required name="short_desc" id="short_desc"  class="form-control" required></textarea>

								<label>Long Desc.</label>
								<textarea type="text" required name="long_desc" id="long_desc"  class="form-control" required></textarea>								

								<label>Date.</label>
								<input type="date" required name="date" id="date"  class="form-control" required>								

								<label>Time.</label>
								<input type="time" required name="time" id="time"  class="form-control" required>								

								<label>Image</label>
								<input type="file" required id="image" name="image" accept="image/*" class="form-control" required>
								<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
							</form>
						</div>	

						<div class="col-md-12">

							<div class="row">
							@foreach($events as $s)
							 @php $image = Storage::disk("public")->url('frontend/home/'.$s->image); @endphp
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<img src="{{$image}}" style="width:100%">
											<h3>{{$s->title}}</h3>
											<hr>
											<a  class="btn btn-success btn-sm editSlider" data-data="{{$s}}">Edit</a>
											<a href="{{route('admin.event.delete',['id'=>$s->id])}}" class="btn btn-danger btn-sm">Delete</a>
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

 <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

 <script>
  CKEDITOR.replace( 'short_desc' );
  CKEDITOR.replace( 'long_desc' );  
 </script>

 <script>
 	$('.editSlider').click(function(){
 		var data = $(this).data('data');
 		$('#title').val(data.title);
 		/*$('#short_desc').text(data.short_description);
 		$('#long_desc').text(data.long_description); 
 		console.log(data.short_description);
 		$("#short_desc").val(data.short_description);
 		$("#long_desc").val(data.long_description); 		
		*/
 		date = data.datetime.split(' ');
		CKEDITOR.instances.short_desc.setData(data.short_description);
		CKEDITOR.instances.long_desc.setData(data.long_description);		
 		$('#date').val(date[0]);
 		$('#time').val(date[1]); 		 		
 		var id = '<input type="hidden" value="'+data.id+'" name="id">';
 		$('#image').removeAttr('required');
 		$('#sliderForm').append(id);

 	});
 </script>



@endsection
