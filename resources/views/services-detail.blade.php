@include('frontendpartials.head')
@include('frontendpartials.header')

  <!-- Intro Section -->

  <!-- bg-img -->
 <section class="inner-intro bg-img  light-color overlay-before parallax-background" style="background-image: url('{{ Storage::disk('public')->url('course/'.$serviceDetails->image2) }}');">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 ><span>{{ $serviceDetails->title }} </span></h1>
      		<!-- <div class="page-breadcrumb">
    				<a href="{{route('welcome')}}">Home</a>/ <span>Services Detail</span>
    			</div> -->
      	</div>
      </div>
    </div>
</section>


<br>
<br>
<div id="services-section" class="pt-80 pt-xs-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sx-12">
       <div class="container">
        <div class="row text-center mb-30">
          <div class="col-sm-12">
            <div class="sec_hedding">
              <h2><span>Quick</span> Quote</h2>
              <span class="b-line"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <div class=" col-md-12 col-lg-12" style="background-color: black; padding: 20px">

            <!-- Contact FORM -->
            <form class="quote-form"  action="{{route('savequote')}}" method="post">
            @csrf
              <!-- IF MAIL SENT SUCCESSFULLY -->
              <div id="success">
                <strong>
                          @if(session('success'))
                            <!-- <div class="alert alert-success">
                                {{ session('success') }}
                            </div> -->
                            <script>alert("{{session('success')}}")</script>
                          @endif
                        </strong>
              </div>
              <!-- END IF MAIL SENT SUCCESSFULLY -->
              <div class="row">
                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="name" type="hidden" name="form-service-id" placeholder="service-id" value="{{$serviceDetails->id}}">
                  </div>

                  <div class="form-field">
                    <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Full Name">
                  </div>
                </div>

                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12  ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-phone" placeholder="Phone">
                  </div>
                </div>
                <!-- <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-trasport-type" placeholder="Transport Type">
                  </div -->
                <div class="col-md-12 ">
                  <div class="form-field">
                    <select class="input-s form-full" id="sub"  id="sub" name="form-transport-type">
                      <option selected="selected" disabled="disabled">Chose Van Size</option>
                      <option value="Car">Car</option>
                      <option value="Small Van">Small Van</option>
                      <option value="Short Wheel Base">Short Wheel Base</option>
                      <option value="Long Wheel Base">Long Wheel Base</option>
                      <option value="XL Wheel Base">XL Wheel Base</option>
                      <option value="Luton-tail lift">Luton-tail lift</option>           </select>
                  </div>
                </div>
                <div class="col-md-12  ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-move-from" placeholder="Pickup Postcode">
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="text" name="form-Move-to" placeholder="Drop off Postcode">
                  </div>
                </div>
                
                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="date" name="form-date" placeholder="Date" min="{{date('Y-m-d')}}">
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-field">
                    <input class="input-sm form-full" id="sub" type="time" name="form-time" placeholder="Date" min=" ">
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-field">
                    <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-md-12  d-flex align-items-center mt-xs-30">
                  <button class="bnt btn-text sent-but mt-xs-30" type="submit" name="button">
                    Send
                  </button>
                </div>
              </div>
            </form>
            <!-- END Contact FORM -->
          </div>

        </div>

      </div>
        
      </div>
      <div class="col-lg-8">
        <div class="full-pic">
          <figure> <img src="{{Storage::disk('public')->url('course/'.$serviceDetails->image)}}" alt="" width="100%"> </figure>
        </div>
        <div class="text-box mt-40">
          <div class="box-title mb-20">
            <h2>{{ $serviceDetails->title }} </h2>
          </div>
          <div class="text-content">
            <p> {!! $serviceDetails->desc !!} </p>
          </div>
          <!-- <div class="row mt-45 clearfix">
            <div class="col-md-5"> <img class="img-responsive" src="assets/images/home-left.jpg" alt="Photo"> </div>
            <div class="col-md-7 text-box">
              <div class="box-title mb-20 mt-sm-30 mt-xs-30">
                <h3>Aenean suscipit eget mi act</h3>
              </div>
              <div class="text-content">
                <p> Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
                  Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
                  Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget.. </p>
              </div>
            </div>
          </div> -->
          </div> 
  </div>
</div>
</div>
</div>
<br>
<br> 
   
@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')