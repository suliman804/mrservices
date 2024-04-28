@extends('frontendpartials.default')
@section('section')
@section('page_title',' - Services')

@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
@endsection
@section('service_bar','current')
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Services</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>Services</li>
			</ul>
        </div>
    </section>


    <section class="services-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/webdevelopment.jpg')}}"  /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-coding-1"></span>
								</div>
								<h4><a href="#">Web Development</a></h4>
								<div class="text">We carry more than just good coding skills. Our experience makes us stand out from other web development.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-mobile-app"></span>
								</div>
								<h4><a href="#">Web Designer</a></h4>
								<div class="text">We carry more than just good coding skills. Our experience makes us stand out from other web development.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/webdesign.jpeg')}}"  /></a>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/ui.jpeg')}}"  /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-computer"></span>
								</div>
								<h4><a href="#">UI/UX Design</a></h4>
								<div class="text">Build the product you need on time with an experienced team that uses a clear and effective design process.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/qa.jpeg')}}"  /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-web"></span>
								</div>
								<h4><a href="#">QA & Testing</a></h4>
								<div class="text">Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-monitor-2"></span>
								</div>
								<h4><a href="#">IT Consultancy</a></h4>
								<div class="text">Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/it.jpeg')}}"  /></a>
						</div>
					</div>
				</div>
				
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="#"><img src="{{asset('public/theme/images/services/team.jpeg')}}"  /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<div class="icon-box">
									<span class="icon flaticon-human-resources"></span>
								</div>
								<h4><a href="#">Dedicated Team</a></h4>
								<div class="text">Over the past decade, our customers succeeded by leveraging Intellectsoft’s process of building, motivating.</div>
								<!-- <a class="read-more" href="#">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a> -->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>


	<section class="featured-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Featured Block Two -->
				<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(public/theme/images/resource/feature-1.jpg)">
						<div class="number">20 +</div>
						<h4>Worldwide Work Pair</h4>
						<div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(public/theme/images/resource/feature-2.jpg)">
						<div class="number">100+</div>
						<h4>Happy Clients</h4>
						<div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>


	<section class="services-section margin-top">
		<div class="pattern-layer" style="background-image: url(public/theme/images/background/pattern-2.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">WHO WE ARE</div>
				<h2>We deal with the aspects of <br> professional IT Services</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-responsive"></span>
						</div>
						<h5><a href="#">IT Solutions</a></h5>
						<div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
						<a href="#" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-monitor"></span>
						</div>
						<h5><a href="#">Security System</a></h5>
						<div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
						<a href="#" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-coding"></span>
						</div>
						<h5><a href="#">Web Development</a></h5>
						<div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
						<a href="#" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-laptop"></span>
						</div>
						<h5><a href="#">Database Security</a></h5>
						<div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
						<a href="#" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>


	<section class="services-section-two margin-top">
		<div class="auto-container">
			<div class="upper-box">
				<div class="icon-one" style="background-image: url(public/theme/images/icons/icon-1.png)"></div>
				<div class="icon-two" style="background-image: url(public/theme/images/icons/icon-2.png)"></div>
				<div class="icon-three" style="background-image: url(public/theme/images/icons/icon-3.png)"></div>
				<!-- Sec Title -->
				<div class="sec-title light centered">
					<div class="title">WHO WE ARE</div>
					<h2>We deal with the aspects of <br> professional IT Services</h2>
				</div>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-coding-1"></span>
							</div>
							<h5><a href="#">Web Develpment</a></h5>
							<div class="text">We carry more than just good coding skills. Our experience makes us stand out from other web development.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-mobile-app"></span>
							</div>
							<h5><a href="#">Mobile Development</a></h5>
							<div class="text">Create complex enterprise software, ensure reliable software integration, modernise your legacy system.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-computer"></span>
							</div>
							<h5><a href="#">UI/UX Design</a></h5>
							<div class="text">Build the product you need on time with an experienced team that uses a clear and effective design process.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-web"></span>
							</div>
							<h5><a href="#">QA & Testing</a></h5>
							<div class="text">Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-monitor-2"></span>
							</div>
							<h5><a href="#">IT Counsultancy</a></h5>
							<div class="text">Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios.</div>
						</div>
					</div>
					
					<!-- Service Block Two -->
					<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="shape-one"></div>
							<div class="shape-two"></div>
							<div class="icon-box">
								<span class="icon flaticon-human-resources"></span>
							</div>
							<h5><a href="#">Dedicated Team</a></h5>
							<div class="text">Over the past decade, our customers succeeded by leveraging Intellectsoft’s process of building, motivating.</div>
						</div>
					</div>
					
				</div>
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


	<section class="info-section" style="background-image: url(public/theme/images/background/6.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Logo Column -->
				<div class="logo-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="logo">
							<a href="{{route('welcome')}}"><img alt="Construction" src="{{asset('public/logo/Klogowhite.webp')}}"  /></a>
						</div>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-pin"></span></div>
						<ul>
							<li><strong>Address</strong></li>
							<li>{{$info_sections_f->address}}</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-phone-call"></span></div>
						<ul>
							<li><strong>Phone</strong></li>
							<li>{{$info_sections_f->phone}}</li>
						</ul>
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner-column">
						<div class="icon-box"><span class="flaticon-email-1"></span></div>
						<ul>
							<li><strong>E-Mail</strong></li>
							<li>{{$info_sections_f->email}}</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection
