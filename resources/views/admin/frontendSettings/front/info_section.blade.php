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
						<h4>Info Section Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" action="{{route('admin.save.info')}}" enctype="multipart/form-data">
								@csrf
								<label>Heading</label>
								<input type="text" required name="heading" class="form-control" value="{{$info->heading??''}}">
								<label>Title</label>
								<input type="text" required name="site_title" class="form-control" value="{{$info->site_title??''}}">

								<label>Desc.</label>
								<input type="text" required name="desc" class="form-control" value="{{$info->description??''}}"> 
								<label>Image</label>	
										@if(isset($info->image))
											@php $image = Storage::disk("public")->url('frontend/home/'.$info->image); @endphp
										@else
											@php $image = '#' @endphp
										@endif
								<img src="{{$image}}" style="width:100%;">
								<input type="file" name="image" accept="image/*" class="form-control">


								<div class="row">
									<div class="col-md-4">

										<label>Box 1 Heading</label>	
										<input type="text" required name="box_1_heading" value="{{$info->box_1_heading??''}}" class="form-control">

										<label>Box 1 Desc.</label>	
										<input type="text" required name="box_1_description" value="{{$info->box_1_description??''}}" class="form-control">

										<label>Box 1 Image</label>
										@if(isset($info->box_1_image))
											@php $box_1_image = Storage::disk("public")->url('frontend/home/'.$info->box_1_image); @endphp
										@else
											@php $box_1_image = '#' @endphp
										@endif


										<img src="{{$box_1_image}}" style="width:100%;">
										<input type="file" name="box_1_image" accept="image/*" class="form-control">										

									</div>

									<div class="col-md-4">

										<label>Box 2 Heading</label>	
										<input type="text" required name="box_2_heading" value="{{$info->box_2_heading??''}}" class="form-control">

										<label>Box 2 Desc.</label>	
										<input type="text" required name="box_2_description" value="{{$info->box_2_description??''}}" class="form-control">

										<label>Box 2 Image</label>	
										@if(isset($info->box_2_image))
											@php $box_2_image = Storage::disk("public")->url('frontend/home/'.$info->box_2_image); @endphp
										@else
											@php $box_2_image = '#' @endphp
										@endif
										<img src="{{$box_2_image}}" style="width:100%;">
										<input type="file" name="box_2_image" accept="image/*" class="form-control">										

									</div>


									<div class="col-md-4">

										<label>Box 3 Heading</label>	
										<input type="text" required name="box_3_heading" value="{{$info->box_3_heading??''}}" class="form-control">

										<label>Box 3 Desc.</label>	
										<input type="text" required name="box_3_description" value="{{$info->box_3_description??''}}" class="form-control">

										<label>Box 3 Image</label>	
										@if(isset($info->box_3_image))
											@php $box_3_image = Storage::disk("public")->url('frontend/home/'.$info->box_3_image); @endphp
										@else
											@php $box_3_image = '#' @endphp
										@endif
										<img src="{{$box_3_image}}" style="width:100%;">
										<input type="file" name="box_3_image" accept="image/*" class="form-control">										

									</div>
								</div>

								<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
							</form>
						</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection