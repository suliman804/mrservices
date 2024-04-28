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
						<h4>Footer Section Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" action="{{route('admin.save.footer')}}" enctype="multipart/form-data">
								@csrf
								<label>About</label>
								<textarea type="text" required name="footer_about" class="form-control" value="{{$info->footer_about}}">{{$info->footer_about}}</textarea> 

								<label>Facebook Link</label>
								<input type="url"  name="facebook_link" class="form-control" value="{{$info->facebook_link}}">

								<label>Twitter Link</label>
								<input type="url"  name="twitter_link" class="form-control" value="{{$info->twitter_link}}">								

								<label>Linkedin Link</label>
								<input type="url"  name="linkedin_link" class="form-control" value="{{$info->linkedin_link}}">								
								<label>Open Hours</label>
								<input type="text"  name="open_hours" class="form-control" value="{{$info->open_hours}}" placeholder="9am – 6pm (Monday - Saturday)<br>10am – 2pm (Sunday)">	

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