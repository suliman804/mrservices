@include('frontendpartials.head')
@include('frontendpartials.header')
 @foreach($aboutUs as $about)
        <!-- Intro Section -->
        <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{ Storage::disk('public')->url('frontend/aboutUs/'.$about->image) }}');">
            <div class="container">
                <div class="row title">
                    <div class="title_row">
                        <h1 data-title="About"><span>About</span></h1>
                        <div class="page-breadcrumb">
                            <a href="{{route('welcome')}}">Home</a>/ <span>About</span>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Intro Section End-->
        
                <!-- About Section -->
        <div id="about-section" class="padding pt-xs-40">
            <div class="container">
           
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="block-title v-line">
                            <h2><span>Our</span> MISSION</h2>
                            <p class="italic">
                                <!-- Aenean suscipit eget mi act -->
                            </p>
                        </div>
                        <div class="text-content">
                            <p>
                                {!! nl2br($about->content) !!}
                            </p>
                        </div>
                        <hr class="divider">
                        <div class="post-content">
                            <div class="post-img">
                                <img class="img-responsive" src="{{Storage::disk('public')->url('frontend/aboutUs/'.$about->image)}}" alt="Photo">
                            </div>
                        </div>
                    </div>
                   <!--  <div class="col-md-6 col-lg-4">
                        <div class="dark-bg our-vision light-color padding-40">
                            <div class="block-title">
                                <h2><span>Our</span> VISION</h2>
                                <p class="italic">
                                    Aenean suscipit eget mi act
                                </p>
                            </div>
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
                            </p>
                        </div>
                    </div> -->
                </div>
            @endforeach
            </div>
        </div>
        <!-- About Section End-->

    <!-- Footer Area -->
    @include('frontendpartials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')