@extends('frontendpartials.default')
@section('section')
 <script src="https://www.google.com/recaptcha/api.js"></script>
<section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(public/theme/images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Products</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{route('welcome')}}">home</a></li>
				<li>Get Quote</li>
			</ul>
        </div>
    </section>


    
    <section class="contact-map-section mt-5">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">Get a Quote</div>
                        <h2>{{$product->title}}</h2>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form">
                    
                <!-- Contact Form -->
                <form method="post" action="{{route('saverequestquote')}}" id="quoteForm">
                    <div class="row clearfix">
                        @csrf
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Your name *</label>
                            <input type="text" name="username" placeholder="" required>
                        </div>
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Email address *</label>
                            <input type="text" name="email" placeholder="" required>
                        </div>
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Phone number *</label>
                            <input type="text" name="phone" placeholder="" required>
                        </div>
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>City</label>
                            <input type="text" name="city" placeholder="" required>
                        </div>
                        
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        
                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">


                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="g-recaptcha" data-sitekey="{{'6Ler5UQkAAAAAKWcEyxYvA7oI_j4BrelHMMuxeml'}}"></div>
                                 @if ($errors->has('g-recaptcha-response'))
                                      <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                 @endif
                                </div>


                            <button class="theme-btn btn-style-three" type='submit' name="submit-form"><span class="txt">Send Now</span></button>
                        </div>
                        
                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
            
        </div>
    </section>

	
@endsection
@section('jsOutside')



@endsection