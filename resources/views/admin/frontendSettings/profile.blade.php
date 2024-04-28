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
			
			<div class="row">
			<form method="POST" action="{{route('admin.updateProfile',$user->id)}}"  enctype="multipart/form-data"> 
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="col-md-12 margin">
				<div class="row">
					<div class="col-lg-4 col-5">
						<div class="form-group">
							<label>Name</label>
							
							<input type="text" name="name" value="{{$user->name}}" class="form-control input" >
						</div>
					</div>
					<div class="col-lg-4 col-5">
						<div class="form-group">
							<label>CNIC</label>
							<input type="text" name="nic" value="{{$user->nic}}" class="form-control input" required="required">
						</div>
						
					</div>

					<div class="col-lg-4 col-5">
						<div class="form-group">
							<label>Email</label><span style="margin-left: 5px;"><i class="fa fa-question-circle"  aria-hidden="true"></i></span>
							
							<input type="text" name="email" value="{{$user->email}}" class="form-control input" >
						</div>
					</div>

					<div class="col-lg-2 col-5">
						<div class="form-group">
							<label>Mobile No</label>
							
							<input type="text" name="phone" value="{{$user->phone}}" class="form-control input" >
						</div>
					</div>
					<div class="col-lg-4 col-5">
						<div class="form-group">
							<label>Address</label>
							
							<input type="text" name="address" value="{{$user->address}}" class="form-control input" required="required">
						</div>
						
					</div>


					<div class="col-lg-4 col-4">
						<div class="form-group">
							<label>Password <small><i>(Leave Empty if dont need to change)</i></small></label>
							
							<input type="text" onfocus="this.type='password'" name="password" class="form-control input">
						</div>
						
					</div>

					<div class="col-lg-2 col-2">
						<div class="form-group">
							<label>Gender</label>
							<select name="gender" value="<?php if($user->gender=='male')echo"selected='selected'";?>" class="form-control" required="required">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
							</select>
							
							
						</div>
					</div>

					<div class="col-lg-2 col-4">
						<div class="form-group">
							<label>DOB</label>
							
							<input type="date" name="dob" value="{{$user->dob}}" required max="{{date('Y-m-d')}}" class="form-control input">
						</div>
					</div>

					<div class="col-lg-4 col-4">
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" accept="image/*" class="form-control input">
						</div>
					</div>
					
				</div>
				
				
			</div>

			<input type="hidden" name="action" id="action">
			<div class="col-md-12">
				<input type="submit" name="submit" value="Update"  class="btn btn-success" style="margin-right: 80px;">				
			</div>
		</form>
	</div>

	
			</div>
		</div>
		
	</div>
</div>
@include('frontendSettings.admin.adminJS')
@endsection