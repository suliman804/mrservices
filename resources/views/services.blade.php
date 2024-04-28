@include('frontendpartials.head')
@include('frontendpartials.header')

  <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="FAQ"><span>Services</span></h1>
      		<div class="page-breadcrumb">
    				<a href="{{route('welcome')}}">Home</a>/ <span>Services</span>
    			</div>
      	</div>
      </div>
    </div>
</section>
      <!-- Service Section -->
    <div id="services-section" class="padding ptb-xs-40">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-7 offset-lg-3 col-md-8 offset-md-2 mb-30">
            <div class="heading-box">
              <h2><span>Our </span> Services</h2>
            </div>
            <p>
              Mr4 Services provides professional moving solutions including house and office removals, furniture delivery, eBay logistics, and packing services. With meticulous attention to detail, we guarantee a seamless transition to your new destination.
            </p>
          </div>
        </div>
        <div class="row">
@foreach($services as $index => $service)
          <div class="col-lg-3 col-md-6 full-wid">
            <div class="project-item">
                <div class="about-block clearfix">
                  <figure>
                    <a href="#"><img class="img-responsive" src="{{Storage::disk('public')->url('course/'.$service->image)}}" alt="Photo"></a>
                  </figure>
                  <div class="text-box mt-25">
                    <div class="box-title mb-15">

                      <h3><a href="#">{{$service->title}}</a></h3>
                    </div>
                    <div class="text-content">
                      <p>
                        @php
                            
                            $description = $service->desc;

                            $limitedDescription = Str::limit($description, 80); 


                            echo nl2br($limitedDescription);


                            @endphp
                      </p>
                      <a href="{{ route('services-details', ['id' => $service->id]) }}" class="btn-text mt-15">Read More</a>
                    </div>
                  </div>
                </div>
              </div>

          </div>

@endforeach
        </div>
      </div>
    </div>
      <!-- Service Section end -->


<br>
<br>


<br>
<br> 
   
@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')