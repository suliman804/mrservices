@include('frontendpartials.head')
@include('frontendpartials.header')
<style>

 .form-field input::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

</style>
<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
            <h1 data-title="Contact"><span>Contact</span></h1>
            <div class="page-breadcrumb">
                <a href="{{route('welcome')}}">Home</a>/ <span>Contact</span>
            </div>
        </div>
      </div>
    </div>
  </section>
 <!-- Intro Section End-->

 <!-- Contact Section -->
  <section class="ptb ptb-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 offset-md-2 text-center">
          <h2>KEEP IN TOUCH</h2>
          <p class="lead">Have questions or ready to schedule your move? Contact Mr4 Services today for reliable and personalized assistance. We're here to make your relocation effortless and stress-free.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 contact pb-60 pt-30">
          <div class="row text-center">
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">{{$info_sections_f->phone}}</a> </div>
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-location icon-circle pos-s"></i>
              <!-- <p  class="mt-15"> 123 Main Street, St. NW Ste, <br />
                1 Washington, DC,USA. </p> -->
                <p  class="mt-15">   {{$info_sections_f->address}} <br />
              </p>  
            </div>
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:Construc@support.com"  class="mt-15 i-block">{{$info_sections_f->email}}</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Section -->

    <!-- Map Section -->
    <div class="testimonial_wrapper__block contact-form padding pt-xs-60 mt-up" style="box-sizing: border-box; padding: 20px 40px; margin:40px 0px">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h4 style="color: white">GET IN TOUCH</h4>
          <!-- <p> Nullam dictum felis eu pede mollis pretium. </p> -->
          <!-- Contact FORM -->
          <form class="  mt-45" id="contactForm" action="{{route('savecontactus')}}" method="post">      @csrf     
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong>   </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->           
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="username" type="text" name="username" placeholder="Your Name" style="color: white; border: 2px solid white">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email" style="color: white; border: 2px solid white">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="phone" type="number" name="phone" placeholder="Number" style="color: white; border: 2px solid white">
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message" style="background-color: rgba(0,0,0,0); color: white; border: 2px solid white" ></textarea>
                </div>
              </div>
              <div class="col-md-12 col-lg-12 mt-30">
                <button class="btn-text" type="submit" name="button"> Send Message </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM --> 
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->  
    @include('frontendpartials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')

