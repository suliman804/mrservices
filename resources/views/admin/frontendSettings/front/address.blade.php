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
						<h4>Address Section Settings</h4>
						<hr>
						<div class="col-md-12">
							<form method="post" action="{{route('admin.save.address')}}" enctype="multipart/form-data">
								@csrf
								<label>Email</label>
								<input type="email" required name="email" class="form-control" value="{{$info->email??''}}">

								<label>Phone</label>
								<input type="text" required name="phone" class="form-control" value="{{$info->phone??''}}">

								<label>Address</label>
								<input type="text" required name="address" class="form-control" value="{{$info->address??''}}"> 

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