@extends('frontendpartials.default')
@section('section')
@section('contact_us_bar','current')
@section('page_title',' - Contact Us')
@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
@endsection
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Review</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>Reviews</li>
			</ul>
        </div>
    </section>

    <section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="title-box">
				<div class="title">Submit your Review</div>
			</div>
		</div>
	</section>


	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Review</h2>
					</div>
					<div class="pull-right">
						<div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Form -->
			<div class="contact-form">
					
				<!-- Contact Form -->
				<form method="post" action="{{route('savereview')}}">
					<div class="row clearfix">
						@csrf
						<div class="form-group col-lg-4 col-md-4 col-sm-12">
							<label>Your name *</label>
							<input type="text" name="name" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-4 col-md-4 col-sm-12">
							<label>Email address *</label>
							<input type="email" name="email" placeholder="" required>
						</div>
						
						<div class="form-group col-lg-4 col-md-4 col-sm-12">
							<label>Phone number *</label>
							<input type="text" name="phone" placeholder="" required>
						</div>
											
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<label>Your Message *</label>
							<textarea name="message" placeholder=""></textarea>
						</div>
						
						<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
							<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Submit</span></button>
						</div>
						
					</div>
				</form>
			</div>
			<!-- End Contact Form -->
			
		</div>
	</section>

@endsection
