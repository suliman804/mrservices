@include('frontendpartials.head')
@include('frontendpartials.header')

    <!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
        <div class="row title">
            <div class="title_row">
                <h1 data-title="Team"><span>Team</span></h1>
                <div class="page-breadcrumb">
                    <a href="{{route('welcome')}}">Home</a>/ <span>Team</span>
                </div>

            </div>

        </div>
    </div>
</section>
    <!-- End Intro Section -->
            <div class=" padding ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--Team Section-->
                            <section id="team" class="team-section">

                                <div class="container">
                                    <div class="row text-center pb-30">
                                        <div class="col-sm-12">
                                            <div class="heading-box ">
                                                <h2><span>Our</span> Team</h2>
                                                <span class="b-line"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="row mt-80 text-center">
                                    @foreach($team as $t)
                                        <div class="col-sm-3 mb-xs-30">
                                            <div class="box-hover img-scale">
                                                <figure>
                                                    <img src="{{asset('public/theme/images/team/01.jpg')}}" alt="">
                                                </figure>

                                                <div class="team-block">
                                                    <strong>{{$t->name}}</strong>
                                                    <span>{{$t->job_title}}</span>
                                                    <hr class="small-divider border-white">
                                                    <ul class="social-icons">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </section>
                            <!--Team Section End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Contact-->


@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')

