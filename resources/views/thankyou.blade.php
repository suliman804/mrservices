@extends('frontendpartials.default')
@section('section')

<section class="page-title">
        <div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
        <div class="auto-container">
            <h2>We had received your message. We will reply soon</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">home</a></li>
                <li>Thank You</li>
            </ul>
        </div>
    </section>

    <section class="contact-info-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box">
                <div class="title">GET IN TOUCH</div>
                <div class="text">For genereal enquires you can touch with our front desk supporting team <br> at <a href="mailto:info@kreashionsoftwarehouse.com">info@kreashionsoftwarehouse.com</a> or call on <a href="tel:+923205038329">+923205038329</a></div>
            </div>
            
            <div class="row clearfix">
            
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>{{$info_sections_f->address}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>Phone</strong></li>
                                <li>{{$info_sections_f->phone}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-email-1"></span></div>
                            <ul>
                                <li><strong>E-Mail</strong></li>
                                <li>{{$info_sections_f->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="contact-map-section">
        <div class="auto-container">
            <div class="map-boxed">
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section> -->

    

@endsection
