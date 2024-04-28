
@include('frontendpartials.head')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />


<div id="main-wrapper">

    <!-- Welcom Area -->
    <div class="welcom-area" id="welcome">

        <!-- Header Area -->
        @include('frontendpartials.header')
        <!-- /.End Of Header Area -->

        <!-- Banner Area -->
        
        <div class="main-banner">
            <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                    <ul>
                        @php 
                            $num = 129;
                        @endphp
                        @foreach($sliders as $slider)
                        <!-- SLIDE  -->
                        <li data-index="rs-{{$num}}">
                            <!-- MAIN IMAGE -->
                            <img src="{{Storage::disk('public')->url('frontend/home/'.$slider->image)}}"  alt=""  class="rev-slidebg" >
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title tp-resizeme"
                            id="slide-129-layer-1"
                            data-x="['right','right','right','right']" data-hoffset="['100','50','50','30']"
                            data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                            data-fontsize="['50','50','50','30']"
                            data-lineheight="['55','55','55','35']"
                            data-width="['700','700','700','420']"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"

                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000"
                            data-splitin="none"
                            data-splitout="none"
                            data-responsive_offset="on" >
                                <div class="banner-text text-right">
                                    <span>{!! $slider->heading !!}</span>
                                    <h1>{!! $slider->description !!}</h1>
                                     <!-- <a class="btn-text" href="about_us.html"> read more</a> -->
                                </div>
                            </div>

                        </li>
                        <!-- SLIDE  -->
                        @php
                            $num++;
                        @endphp
                        @endforeach
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </div>    
      
        <!-- /. End of Banner Area -->
        <!-- About_Compney -->
      
        <section id="about_us" class="padding ptb-xs-40">
            <div class="container">
                <div class="row text-center mb-30">
                    <div class="col-sm-12">
                        <div class="sec_hedding">
                            <h1>
                            <!-- <span>Our</span>  -->
                            {{ $info_sections_f->heading}}</h1>
                            <span class=""></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-5 about-left">
                        <h4 class="italic">Welcome To Our</h4>
                        <div class="sec_hedding text-left mb-30">
                       <?php
                            $words = explode(' ', $info_sections_f->site_title);

                            $firstWord = isset($words[0]) ? $words[0] : '';
                            $secondWord = isset($words[1]) ? $words[1] : '';
                            $thirdWord = isset($words[2]) ? $words[2] : '';

                            ?>

                            <h2>{{$firstWord }} <span>{{$secondWord}} {{$thirdWord}}</span> Company</h2>
                            <span class="b-line l-left"></span>
                        </div>
                        <p>

                            {!! $info_sections_f->description!!}
                        </p>
                
                    </div>

                    <div class="col-md-12 col-lg-7 mt-sm-30 d-flex align-items-center ">
                        <div class="row">
                            @php $image = Storage::disk("public")->url('frontend/home/'.$info_sections_f->image); @endphp

                            <div class="col-md-12 "><img src="{{$image }}" alt="">
                            </div>
                            <!-- <div class="col-md-6 pic-show mt-xs-30"><img src="{{ asset('public/theme/img2/'. $info_sections_f->box_2_image) }}" alt="">
                            </div> -->
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- About_Compney_End-->
        <section class="latest__block padding ptb-xs-40">
            <div class="container">
               <!--  <div class="row text-center mb-30">
                    <div class="col-sm-12">
                        <div class="sec_hedding">
                            <h2><span>Our</span> Blog</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="img-scale">
                            <figure>
                                @php $box_1_image = Storage::disk("public")->url('frontend/home/'.$info_sections_f->box_1_image); @endphp
                                <img src="{{$box_1_image}}" alt="">
                            </figure>
                            <div class="latest__block-post gray-bg">
                                
                                <h3 class="latest__block-title text-center">
                                <!-- <a href="#"></a> -->
                                {{$info_sections_f->box_1_heading}}</h3>
                                <div class="meta-post text-center">
                                    {{$info_sections_f->box_1_description}}
                                </div>
                                <!-- <div class="flat-link flat-arrow sm  ">
                                    <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img-scale">
                            <figure>
                                @php $box_2_image = Storage::disk("public")->url('frontend/home/'.$info_sections_f->box_2_image); @endphp
                                <img src="{{$box_2_image}}" alt="">
                            </figure>
                            <div class="latest__block-post gray-bg">
                                
                                <h3 class="latest__block-title text-center">
                                <!-- <a href="#"></a> -->
                                {{$info_sections_f->box_2_heading}}</h3>
                                <div class="meta-post text-center">
                                    {{$info_sections_f->box_2_description}}
                                </div>
                                <!-- <div class="flat-link flat-arrow sm  ">
                                    <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img-scale">
                            <figure>
                                @php $box_3_image = Storage::disk("public")->url('frontend/home/'.$info_sections_f->box_3_image); @endphp
                                <img src="{{$box_3_image}}" alt="">
                            </figure>
                            <div class="latest__block-post gray-bg">
                                
                                <h3 class="latest__block-title text-center">
                                <!-- <a href="#"></a> -->
                                {{$info_sections_f->box_3_heading}}</h3>
                                <div class="meta-post text-center">
                                    {{$info_sections_f->box_3_description}}
                                </div>
                                <!-- <div class="flat-link flat-arrow sm  ">
                                    <a href="#" class="more_btn__block">More <i class="fa fa-angle-right"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
                 <!-- Service tab Start-->
        <section class="padding ptb-xs-40 gray-bg">
            <div class="container">
                <div class="row text-center mb-30">
                    <div class="col-sm-12">
                        <div class="sec_hedding">
                            <h2><span>Our</span> Service</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
    <div class="col-lg-4">
        @foreach($services as $index => $service)
            <a href="#!" class="top-service tab_funct d-flex align-items-center {{$index === 0 ? 'active' : ''}}" data-tab="service-tab{{$service->id}}">
                <div class="fr-text mr-2">
                    <img src="{{Storage::disk('public')->url('course/'.$service->image)}}" alt="" class="rounded-circle"  height="40px" />
                 </div>
                    <span>{{$service->title}}</span>
                
            </a>
        @endforeach
    </div>

    <div class="col-lg-8 mt-xs-30">
        <div class="tab-content color-white">
            @foreach($services as $index => $service)
                <div class="service-test plr-20 service-tab{{$service->id}} mt-sm-30 {{$index === 0 ? 'show active' : ''}}">
                    <!-- Your tab content goes here -->
                    <div class="row">
                        <div class="col-lg-12 bg_same">
                            <!-- Your tab content structure -->
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{Storage::disk('public')->url('course/'.$service->image2)}}" alt="" height="250px" width="100%" />
                                </div>
                                <!-- Rest of your tab content -->
                                <!-- <div class="col-md-4 push-md-8 mt-40 mt-xs-20">
                                                <div class="impotent_point">
                                                    <ul>
                                                        <li>
                                                            <i class="ion-chevron-right"></i> Labore et dolore
                                                        </li>
                                                        <li>
                                                            <i class="ion-chevron-right"></i> Magna aliqua enim
                                                        </li>
                                                        <li>
                                                            <i class="ion-chevron-right"></i> Buka amin
                                                        </li>
                                                        <li>
                                                            <i class="ion-chevron-right"></i> Labore et dolore
                                                        </li>
                                                        <li>
                                                            <i class="ion-chevron-right"></i> Magna aliqua enim
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div> -->

                                            <div class="col-md-12" >
                                                <h4>{{$service->title}}</h4>
                                                <p>
                                                {!!$service->short_desc!!}
                                                </p>
                                                <a href="{{ route('services-details', ['id' => $service->id]) }}" class="btn-text">Read More</a>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


            </div>
        </section>
        <!--Service tab End-->
   <!-- /.End Of Footer Top Area -->
            <!--Quick Quote Section start-->
        @include('frontendpartials.quote')
        <!--Quick Quote Section end-->

        <!-- Team -->
        
        <!-- Team_End -->
                <!--Testimonial Section Start-->
        <section class="testimonial_wrapper__block padding ptb-xs-40">
            <div class="container">
                <div class="row text-center mb-30">
                    <div class="col-sm-12">
                        <div class="sec_hedding">
                            <h2><span>Our</span> Testimonial</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_carosule-wrap owl-carousel">
                            @foreach($reviews->take(3) as $review)
                            <?php 
                                $truncatedContent = substr($review->message, 0, 250);
                            ?>
                            <div class="single_carousel pt-40" >
                                <!-- <p> -->
                                    {!!$review->message!!}
                                <!-- </p> -->
                                <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="{{asset('public/theme/images/user.png')}}" class="rounded-circle" alt="">
                                        <p >
                                            {{$review['name']}} <span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Section End-->
        <br>
        <br>
    <!-- Footer Area -->
    @include('frontendpartials.footer')
    <!-- /.End Of Footer Area -->
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
$(document).ready(function() {
    $(".filter").on("click", function() {
        var heading = $(this).data("filter");
        if (heading === "all") {
            $(".single-portfolio").show(500); // Show all images
        } else {
            $(".single-portfolio").hide(600); // Hide all images
            $(heading).show(500); // Show images with the selected heading
        }
    });
});
</script>

<script>
$(document).ready(function() {
    function clearMessages() {
        $("#error-email").text("");
    }
    $("#customButton").click(function() {
        var customerName = $("#customName").val();
        var customerEmail = $("#customEmail").val().trim();
        var customerMessage = $("#customMessage").val();
        if (customerName === "") {
            $("#error-name").text("Enter Your Name");
            return;
        } else if (!customerName.match(/^[A-Za-z]+$/)) {
            $("#error-name").text("Name must contain only letters");
            return;
        } else {
            $("#error-name").text("");
        }
        if (customerEmail === "") {
            $("#error-email").text("Enter Your Email");
            return;
        } else if (!customerEmail.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) {
            $("#error-email").text("Enter Email Like Construction@gmail.com");
            return;
        } else {
            $("#error-email").text("");

        }

        if (customerMessage === "") {
            $("#error-message").text("Enter Your message");
        } else if (customerMessage.length < 10) {
            $("#error-message").text("Message must be at least 10");
            return;
        } else {
            $("#error-message").text("");
        }

        var csrfToken = "{!! csrf_token() !!}";
        $.ajax({
            url: "{{ route('contactUs.store') }}",
            method: 'POST',
            data: {
                email: customerEmail,
                name: customerName,
                message: customerMessage,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            success: function(response) {
                $("#customEmail").val("");
                $("#customName").val("");
                $("#customMessage").val("");
                $("#alert-success").show();
                $("#alert-success").text(response.success);
                $("#alert-success").fadeOut(5000);
            },
            error: function(xhr, status, error) {
                var responseJSON = xhr.responseJSON;
                if (responseJSON.errors && responseJSON.errors.email) {
                    $("#error-email").text(responseJSON.errors.email[0]);
                    $("#error-name").text("");
                    $("#error-message").text("");
                    setTimeout(clearMessages, 5000);
                } else {
                    console.error('Error:', error);
                }
            }
        });


    });
});
</script>
<!-- <script>
$(document).ready(function() {
    $(".filter").on("click", function() {
        console.log("Filter clicked");
        
        var heading = $(this).data("filter");
        console.log("Heading:", heading);
        
        if (heading === "all") {
            console.log("Show all images");
            $(".single-portfolio").show(); // Show all images
        } else {
            console.log("Filter by heading:", heading);
            $(".single-portfolio").hide(); // Hide all images
            $("." + heading).show(); // Show images with the selected heading
        }
    });
});
</script> -->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<!-- <script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYXJiYXowMzIwIiwiYSI6ImNsMzZ6NTZjczBxM2IzZHJ0cmQ0OG43NG8ifQ.mai_rvECJXwIgi_nNJ4TeA';
  var map = new mapboxgl.Map({
    container: 'map',
    center: [-105.492187,60.739101, ],
     zoom: 4, // Set the initial zoom level    
    style: 'mapbox://styles/mapbox/streets-v11'
  });
</script> -->

@include('frontendpartials.scripts')
<script>
    
</script>