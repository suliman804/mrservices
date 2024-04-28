@extends('frontendpartials.default')
@section('section')
@section('courses_bar','current')
@section('page_title',' - '.$course->title)
@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
    <meta name="keywords" content="{{$course->meta_keywords}}">
@endsection
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Courses</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>{{$course->title}}</li>
			</ul>
        </div>
    </section>


    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
					
						<div class="sidebar-widget contact-widget">
							<div class="widget-content" style="background-image:url(images/resource/service.jpg)">
								<div class="border-layer"></div>
								<div class="icon-box flaticon-phone-call"></div>
								<h4>For more details</h4>
								<div class="text">Feel free to contact us.</div>
								<ul>
									<li><span class="icon flaticon-call"></span>{{$info_sections_f->phone}}</li>
									<li><span class="icon flaticon-envelope"></span>{{$info_sections_f->email}}</li>
								</ul>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                	<div class="services-detail">
						<div class="inner-box">
							<h2>{{$course->title}}</h2>
							<div class="image">
								<img src="{{Storage::disk('public')->url('course/'.$course->image)}}" alt="" />
							</div>
							
							<p>{!!$course->short_desc!!}</p><br>
							<p>{!!$course->desc!!}</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
@endsection
