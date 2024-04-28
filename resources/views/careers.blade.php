@extends('frontendpartials.default')
@section('section')
@section('career_bar','current')
@section('page_title',' - Careers')
@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
@endsection
 <script src="https://www.google.com/recaptcha/api.js"></script>
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Careers</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>Careers</li>
			</ul>
        </div>
    </section>

    <section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">CAREER FORM</div>
				<h2>Please Fill out all required fields</h2>
				@if(Session::has('file_error'))
				<p style="color:red">* Cv format is not supported.</p>
				@endif
			</div>
			<form method="post" action="{{route('career/post')}}" id="careerForm" enctype="multipart/form-data">			
			@csrf	
			<div class="row clearfix">
				<div class="col-md-4 col-sm-12">
					<label>Full Name *</label>
					<input type="text" name="name" value="{{old('name')}}" required class="form-control">
				</div>

				<div class="col-md-4 col-sm-12">
					<label>Email *</label>
					<input type="email" name="email" value="{{old('email')}}" required class="form-control">
				</div>

				<div class="col-md-4 col-sm-12">
					<label>Phone Number *</label>
					<input type="text" name="phone" value="{{old('phone')}}" required class="form-control">
				</div>

				<div class="col-md-4 col-sm-12">
					<label>Joining Date *</label>
					<input type="date" name="date" value="{{old('date')}}" required min="{{date('Y-m-d')}}" class="form-control">
					<small>Let us know From when you are able to join.</small>
				</div>

				<div class="col-md-8 col-sm-12">
					<label>Address *</label>
					<input type="text" name="address" value="{{old('address')}}" required class="form-control">
				</div>

				<div class="col-md-4 col-sm-12">
					<label>Experience *</label>
					<select class="form-control" required name="experience">
						<option <?php if(old('experience')!=NULL && old('experience')=='fresher') echo 'selected="selected";' ?> value="fresher">Fresher</option>
						<option <?php if(old('experience')!=NULL && old('experience')=='1') echo 'selected="selected";' ?> value="1">1-6 Months</option>
						<option <?php if(old('experience')!=NULL && old('experience')=='2') echo 'selected="selected";' ?> value="2">7-12 Months</option>
					</select>
				</div>

				<div class="col-md-4 col-sm-12">
					<label>Technology *</label>
					<select class="form-control" required name="technology">
						<option value="{{NULL}}">Choose</option>
						@foreach($list as $l)
							<option <?php if(old('experience')!=NULL && old('technology')==$l->name) echo 'selected="selected";' ?> value="{{$l->name}}">{{$l->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="col-md-4 col-sm-12">
					<label>CV * (pdf and word only.)</label>
					<input type="file" name="cv" required class="form-control">
				</div>
				<div class="col-md-4 col-sm-12"></div>
				<div class="col-md-4 col-sm-12">
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <div class="g-recaptcha" data-sitekey="{{'6Ler5UQkAAAAAKWcEyxYvA7oI_j4BrelHMMuxeml'}}"></div>
                         @if ($errors->has('g-recaptcha-response'))
                              <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                         @endif
						</div>

					<input  type='submit' name="submit" value="Submit" class="mt-3 btn btn-primary btn-block">
				</div>
				<div class="col-md-4 col-sm-12"></div>
			</div>
		</form>


		</div>
	</section>



@endsection
@section('jsOutside')


@endsection