<div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{route('welcome')}}"><img alt="Construction" src="{{asset('public/logo/Klogowhite.webp')}}" width="265" height="95"  /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">We are the best world Information Technology Company. Providing the highest quality in hardware & Network solutions. About more than 25 years of experience and 1000 of innovative achievements.</p>
                                <a href="{{route('contactus')}}" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>{{$info_sections_f->address}}</li>
                                    <li><span class="icon fa fa-phone"></span>{{$info_sections_f->phone}}</li>
                                    <li><span class="icon fa fa-envelope"></span>{{$info_sections_f->email}}</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>