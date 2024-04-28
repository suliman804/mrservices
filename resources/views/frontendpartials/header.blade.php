@if(session('success'))
<div class="alert alert-success" id="successAlert" style="position: absolute; z-index: 5 ; right:20px; top:200px">
    {{ session('success') }}
</div>
<!-- <script>alert("{{session('success')}}")</script> -->
@endif
@if(session('error'))
    <div class="alert alert-danger" id="successAlert" style="position: absolute; z-index: 5 ; right:20px; top:200px">
        <p class="text-red-700">{{ session('error') }}</p>
</div>
@endif
@if($errors->any())
    <div class="alert alert-danger" id="successAlert" style="position: absolute; z-index: 5 ; right:20px; top:200px">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- <div class="alert alert-success" style="position: absolute; z-index: 5 ; right:20px; top:200px">
    {{ session('success') }}
    <h1>Heading</h1>
</div> -->
<!-- loader--> 
<!--         <div id="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div> -->
<!--loader-->
                <!--Header Section Start Here
        ==================================-->
        <header style="z-index: 2">
            <div class="top-part__block">
                <div class="search__box-block">
                    <div class="container">
                        <input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
                        <a href="" class="search__close-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <p>
                                Mr4 Services
                            </p>
                        </div>
                        <div class="col-sm-5">
                            <!-- <div class="social-link__block text-right">
                                <a href="{{$info_sections_f->facebook_link}}
" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{$info_sections_f->twitter_link}}
" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{$info_sections_f->address}}
" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="{{$info_sections_f->linkedin_link}}
" class="linkedin"><i class="fa fa-linkedin"></i></a>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="middel-part__block">
            <!-- #f3f3f5 -->
                <div class="container" >
                    <div class="row"  >
                        <div class="col-lg-3 col-md-12 d-flex align-items-stretch" >
                            <div class="logo" style="background-color:#1bbce8;" >
                                <a href="{{url('/')}}" style="  padding: 5px;">
                                 <img src="{{asset('public/logo/logo-2.png')}}" alt="Logo" width="140px" height="120px" style="  margin-right: 10px">
                                 <!-- <h1 class="text-white"> Mr.Services</h1> -->
                                  </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12" style="">
                            <div class="top-info__block text-right">
                                <ul>
                                    <li style="">
                                        <i class="fa fa-map-marker"></i>
                                        <?php 
                                            $fullAddress = $info_sections_f->address;
                                            $words = explode(' ', $fullAddress);

                                            $firstPart = implode(' ', array_slice($words,0, 2));
                                            $lastPart = implode(' ',array_slice($words, 2));
                                         ?>
                                        <p>
                                           {{$firstPart}}
                                           <span> {{$lastPart}}</span>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>
                                            Call Us <span type="tel"> {{optional($info_sections_f)->phone}}</span>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p>
                                            Mail Us <span> <a href="mailto:{{optional($info_sections_f)->email}}">{{optional($info_sections_f)->email}}</a></span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_nav stricky-header__top navbar-toggleable-md" >

                <nav class="navbar navbar-default navbar-sticky bootsnav" >
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>

                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav mobile-menu">
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                    <!-- <span class="submenu-button"></span> -->
                                   <!--  <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                   </ul> -->
                                </li>
                                <li>
                                    <a href="{{url('/about-us')}}">About us</a>
                                    <!-- <span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{url('/about-us')}}">About</a>
                                        </li> -->
                                      <!--   <li>
                                            <a href="about2.html">About 2</a>
                                        </li>
                                        <li>
                                            <a href="about3.html">About 3</a>
                                        </li>
                                        <li>
                                            <a href="history.html">history</a>
                                        </li>
                                        <li>
                                            <a href="career.html">career</a>
                                        </li>
                                        <li>
                                            <a href="partnerships.html">partnerships</a>
                                        </li>
                                        <li>
                                            <a href="leadership.html">leadership</a>
                                        </li> -->
                                    <!-- </ul> -->
                                </li>
                                <li>
                                    <a href="{{url('/services')}}">Services</a>
                                    <!-- <span class="submenu-button"></span> -->
                                   <!--  <ul class="dropdown-menu">
                                        <li>
                                            <a href="services.html">All Services</a>
                                        </li> -->
                                       <!--  <li>
                                            <a href="services-details.html">Services Details</a>
                                        </li>
 -->
                                    <!-- </ul> -->
                                </li>
                                

                                <li>
                                    <!-- <a href="{{url('products')}}">Shop</a> -->
                                    <!-- <span class="submenu-button"></span> -->
                                    <!-- <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">Blog Details</a>
                                        </li>
                                    </ul> -->
                                </li>

                                <!-- <li>
                                    <a href="{{url('/faqs')}}">Faq</a> -->
                                    <!-- <span class="submenu-button"></span> -->
                                    <!-- <ul class="dropdown-menu"> -->

                                       <!--  <li>
                                            <a href="{{url('/team')}}">Team</a>
                                        </li>
 -->
                                        <!-- <li>
                                            <a href="pricing.html">pricing</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="{{url('/faqs')}}">Faq</a>
                                        </li> -->
                                       <!--  <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="login.html">login</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="testimonial.html">Testimonials</a>
                                        </li> -->
                                       <!--  <li>
                                            <a href="404.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="blank.html">blank</a>
                                        </li> -->
                                    <!-- </ul> -->
                                <!-- </li> -->
                                <li>
                                    <!-- <a href="{{url('quotation')}}">Quotation</a> -->
                                    <!-- <span class="submenu-button"></span> -->
                                    <!-- Nav Dropdown -->
                                    <!-- <ul class="dropdown-menu"> -->
                                        <!-- <li>
                                            <a href="{{url('/quotation')}}">Quotation</a>
                                        </li> -->
                                       <!--  <li>
                                            <a href="shop-sidebar.html">shop sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html">shop details</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li> -->
                                    <!-- </ul> -->
                                    <!-- End Nav Dropdown -->
                                </li>
                                <li>
                                    <a href="{{url('/contactus')}}">Contact us</a>
                                    <!-- <span class="submenu-button"></span> -->
                                    <!-- <ul class="dropdown-menu"> -->
                                       <!--  <li>
                                            <a href="{{url('/contactus')}}">contact</a>
                                        </li> -->
                                     <!--    <li>
                                            <a href="contact1.html">contact 2</a>
                                        </li> -->
                                    <!-- </ul> -->
                                </li>
                                <li>
                                    <!-- <button type="button" class="btn btn-primary position-relative"> -->
                                      
                                     
                                    <!-- </button> -->

                                   <!--  <a href="{{url('cart')}}"><i class="fa fa-shopping-cart" style="font-size: 18px"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                       {{Cart::instance('cart')->content()->count()}}
                                        </a> --> 

                                        
                                  <!--   <ul class="dropdown-menu">
                                        <li>
                                            <a href="project.html">project</a>
                                        </li> -->

                                       <!--  <li>
                                            <a href="project-details.html">Projec Details</a>
                                        </li> -->

                                    <!-- </ul> -->
                                </li>
                            </ul>
                        </div>
                        <!--navbar-collapse -->
                    </div>
                </nav>
            </div>
        </header>
        <!--Section End Here-->
<!-- <div id="headerArea" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo" style="padding:0px !important;">
                                <a href="{{url('/')}}"><img src="{{asset('public/logo/logo.png')}}" alt="Logo" style="width:100%"></a>
                            </div>
                        </div>
                        <div class="col-sm-9"> -->
                            <!-- Main Menu -->
                            <!-- <div class="mainmenu menu_one">
                                <nav class="navigation">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav">
                                            <li class="active smooth-scroll"><a href="#welcome">Home</a></li>

                                            <li class="smooth-scroll"><a href="#services">Services</a></li>
                                            <li class="smooth-scroll"><a href="#works">Projects</a></li>
                                            <li class="smooth-scroll"><a href="#team">Team</a></li>
                                            <li class="smooth-scroll"><a href="#testimonials">Testimonial</a></li>
                                            <li class="smooth-scroll"><a href="#about">About Us</a></li>
                                            <li class="smooth-scroll"><a href="#contact">Contact</a></li>

                                        </ul>

                                    </div>
                                </nav> -->
                                <!-- <div class="search-box">
                                    <span class="trigger"><i class="fa fa-search"></i></span>
                                    <div class="search-input-box">
                                        <form action="https://electricblaze.com/flash/versions/mail.php">
                                            <input type="text" name="s">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <!-- /.End of Main Menu -->
                        <!-- </div>
                    </div>
                </div>
            </div>