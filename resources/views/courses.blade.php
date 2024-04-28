@extends('frontendpartials.default')
@section('section')
@section('courses_bar','current')
@section('page_title',' - Courses')
@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
@endsection
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Courses</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>Courses</li>
			</ul>
        </div>
    </section>


    <section class="services-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block Three -->
				@foreach($courses as $i => $c)
					@if($i%2==0)

					<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="#"><img src="{{Storage::disk('public')->url('course/'.$c->image)}}"  /></a>
							</div>
							<div class="lower-content">
								<div class="content">
									<div class="icon-box">
										<span class="icon flaticon-coding-1"></span>
									</div>
									<h4><a href="#">{{$c->title}}</a></h4>
									<div class="text">{!!$c->short_desc!!}</div>
									<a class="read-more" href="{{route('course.details',['slug'=>$c->slug])}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
								</div>
							</div>
						</div>
					</div>

					@else

							<div class="news-block-three style-two col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="lower-content">
									<div class="content">
										<div class="icon-box">
											<span class="icon flaticon-mobile-app"></span>
										</div>
											<h4><a href="#">{{$c->title}}</a></h4>
											<div class="text">{!!$c->short_desc!!}</div>
										<a class="read-more" href="{{route('course.details',['slug'=>$c->slug])}}">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
									</div>
								</div>
								<div class="image">
									<a href="#"><img src="{{Storage::disk('public')->url('course/'.$c->image)}}"  /></a>
								</div>
							</div>
						</div>

					@endif
				@endforeach
				
				
				<!-- News Block Three -->
				
				
			
			</div>
		</div>
	</section>


	


	


	


	<section class="appointment-section style-two">
		<div class="image-layer" style="background-image: url(public/theme/images/background/4.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">CONTACT US</div>
				<h2>Join Us To Get IT Free <br> Consultations</h2>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{asset('public/theme/images/resource/appointment.jpg')}}"  />
							</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h4>You Don't Hesitate To Contact <br> With Us, Now Say Hello......</h4>
							<!-- Appointment Form -->
							<div class="appointment-form">
								<form method="post" action="{{route('savecontactus')}}">
									@csrf
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required="">
											<span class="icon fa fa-user"></span>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Email" required="">
											<span class="icon fa fa-envelope"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="tel" name="phone" placeholder="Phone No" required="">
											<span class="icon fa fa-phone"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="department" placeholder="Department" required="">
											<span class="icon fa fa-home"></span>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea name="message" placeholder="Message"></textarea>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Massage</span></button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>


	
@endsection
