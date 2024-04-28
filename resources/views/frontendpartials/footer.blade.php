        <!-- FOOTER -->
        <footer>
            <div class="top_footer_info__block ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single_info__block">
                                <i class="fa fa-phone"></i>
                                <h4>{{$info_sections_f->phone}}
                                <!-- <span>Monday-Friday, 8am-7pm</span> -->
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_info__block">
                                <i class="fa fa-envelope-o"></i>
                                <h4>{{$info_sections_f->email}}
                                <!-- <span>Monday-Friday, 8am-7pm</span> -->
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <a href="{{url('quotation')}}">
                            <div class="single_info__block">
                                <i class="fa fa-bullhorn"></i>
                                <h4>Request a quote <span>Get all the information</span></h4>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_footer__block pb-0 pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer_box__block">
                                <h4>About Us</h4>
                                <p>
                                    {!!$info_sections_f->footer_about!!}
                                </p>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi, fuga rem aperiam expedita ipsum.
                                </p> -->
                            </div>
                        </div>
                        <div class="col-lg-4 mt-sm-30 mt-xs-30">
                            <div class="footer_box__block">
                                <h4>Pages</h4>
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/about-us')}}">About</a>
                                    </li>
                                   <!--  <li>
                                        <a href="{{url('/faqs')}}">Faqs</a>
                                    </li> -->
                                    <li>
                                        <a href="{{url('/services')}}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/products')}}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/quotation')}}">Quotations</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/contactus')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 mt-xs-30 mt-sm-30">
                            <div class="footer_box__block">
                                <h4>Our Project</h4>
                                <ul>
                                    <li>
                                        <a href="#">Go get an ice-cream</a>
                                    </li>
                                    <li>
                                        <a href="#">Become the best version</a>
                                    </li>
                                    <li>
                                        <a href="#">Eat, Sleep and have fun</a>
                                    </li>
                                    <li>
                                        <a href="#">Start the journy to the top</a>
                                    </li>
                                    <li>
                                        <a href="#">Can you do this for us?</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-lg-4 mt-sm-30 mt-xs-30">
                            <div class="footer_box__block address-box">
                                <h4>Contact info</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>
                                            Call Us {{$info_sections_f->phone}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <p>
                                            <a href="mailto:{{$info_sections_f->email}}">{{$info_sections_f->email}}</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <p>
                                            {{$info_sections_f->address}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <p>
                                            Open Hours
                                            <br>
                                            {!!$info_sections_f->open_hours!!}

                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copyriight_block ptb-20 mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="footer__block-logo"><img src="{{asset('public/logo/logo-2.png')}}" alt="" ></a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>
                                    All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- END FOOTER -->

<!-- <footer id="footer-area" class="section-padding footer-section">
            <div class="container">
                <div class="row"> -->

                    <!-- Single Widget -->
                    <!-- <div class="col-md-offset-2 col-md-3">
                        <div class="widget text_widget">
                            <img src="{{asset('public/logo/logo-w.png')}}" alt="All Tech Men" style="width:100%" class="footer-logo" />
                            <p>{{$info_sections_f->footer_about}}</p>

                            <div class="footer-social">
                                <h5 class="widget-title">Get in touch</h5>
                                <a target="_blank" href="{{$info_sections_f->facebook_link}}"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="{{$info_sections_f->twitter_link}}"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="{{$info_sections_f->linkedin_link}}"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- /.End Of Single Widget -->

                    <!-- Single Widget -->
                   <!--  <div class="col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">USEFUL LINKS</h5>
                            <ul>
                                <li><a href="#">Privacy & Poilicy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#contact">Support</a></li>
                            </ul>

                            <div class="inner-widget">
                                <div class="important-links">
                                    <h5 class="widget-title">important LINKS</h5>
                                    <ul>
                                        <li><a href="#welcome">Home</a></li>
                                        <li><a href="#about">About Us</a></li>                                        
                                        <li><a href="#services">Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
 -->                    <!-- /.End Of Single Widget -->

                    <!-- Single Widget -->
                   <!--  <div class="col-md-4">
                        <div class="widget">
                            <h5 class="widget-title">Subscribe to our newsletter</h5>
                            <p>Join our community and never miss an update! Subscribe to our newsletter to receive the latest industry insights, tech trends, and company news delivered straight to your inbox. Be the first to know about our innovative solutions, expert tips, and exclusive offers.</p>

                            <div class="footer-newsletter">

                                <form action="http://rrfinstitute.us12.list-manage.com/subscribe/post?u=5b7cbe33c1ee403dc177bdd86&amp;id=6dca9ab7d7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <input type="email" value="" placeholder="Enter Your Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
                                        </div>

                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div> -->
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                                        <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_5b7cbe33c1ee403dc177bdd86_6dca9ab7d7" tabindex="-1" value="" required>
                                        </div>

                                        <div class="clear submit">
                                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <span class="email-note">* we don’t share emails with others</span>

                        </div>
                    </div> -->
                    <!-- /.End Of Single Widget -->
                <!-- </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <div class="footer-copyright-text"><span>&copy; Copyright 2020   {{$info_sections_f->site_title}}, All rights Reserved</span>
                            <a href="#" class="scroll_top">
                                <i class="fa fa-angle-up"></i>
                            </a> -->
                            <!-- scroll_top end -->
<!--                         </div>
                    </div>
                </div>
            </div>
        </footer> -->
