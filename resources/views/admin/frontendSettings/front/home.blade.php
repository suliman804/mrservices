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
						<h4>Homepage Slider Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" id="sliderForm" action="{{route('admin.save.homepageslider')}}" enctype="multipart/form-data">
								@csrf
								<label>Add New</label>
								<hr>
								<label>Heading</label>
				                <textarea type="text" required name="heading" id="heading" class="form-control"></textarea>
				                <!-- <input type="text" name="heading" class="form-control" id="heading"> -->
								<label>Desc.</label>
								 <textarea type="text" required name="desc" id="desc" class="form-control"></textarea>

								<label>Image</label>
								<input type="file" required name="image" id="image" accept="image/*" class="form-control">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
							</form>
						</div>	

						<div class="col-md-12">

							<div class="row">
							@foreach($slider as $s)
							 @php $image = Storage::disk("public")->url('frontend/home/'.$s->image); @endphp
								<div class="col-md-12">
									<div class="card">
										<div class="card-body">
											<img src="{{$image}}" style="width:100%">
											<p>{!! $s->heading !!}</p>
											<p>{!! $s->description !!}</p>
											<hr>
											<a  class="btn btn-success btn-sm editSlider" data-data="{{$s}}">Edit</a>
											<a href="{{route('admin.homepageslider.delete',['id'=>$s->id])}}" class="btn btn-danger btn-sm">Delete</a>
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
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
 <script>
 	$('.editSlider').click(function(){
 		var data = $(this).data('data');
 		
 		$('#heading').val(data.heading);
 		$('#desc').val(data.description);

 		$('#heading').text(data.heading);
 		$('#desc').text(data.description); 		

		var headingEditor = CKEDITOR.instances.heading;
        var descEditor = CKEDITOR.instances.desc;

            // Set values for the CKEditor instances
         headingEditor.setData(data.heading);
         descEditor.setData(data.description); 		

 		var id = '<input type="hidden" value="'+data.id+'" name="id">';
 		$('#image').removeAttr('required');
 		$('#sliderForm').append(id);
 	});
 </script>
<script>
      CKEDITOR.replace( 'heading' );
      CKEDITOR.replace( 'desc' );
</script>
@endsection