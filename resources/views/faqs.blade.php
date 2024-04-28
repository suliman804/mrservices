@include('frontendpartials.head')
@include('frontendpartials.header')

  <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="FAQ"><span>FAQ</span></h1>
      		<div class="page-breadcrumb">
				<a href="{{route('welcome')}}">Home</a>/ <span>FAQ</span>
			</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
  <!-- CONTENT --> 
 
  <div class="faq padding pt-xs-40">
    <div class="container">
      <div class="row" >
        <div class="col-md-12 col-lg-12">
          <div class="block-title v-line mb-35">
            <h2>Frequently Asked Questions</h2>
            <!-- <p class="italic"> Maecenas tempus, tellus eget </p> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 anim-section creer_page mb-30">
         <!--  <h3>POPULAR QUESTIONS</h3> -->
          <div id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
          	$show = 'show';
          ?>
          @foreach($faqs as $faq)

	  		<div class="card">
	    		<div class="card-header" role="tab" id="heading{{ $faq->id}}">
	      			<h5 class="mb-0 panel-title">
	        			<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq->id}}" aria-expanded="true" aria-controls="collapse{{ $faq->id}}">
	         			 {{ $faq->title}}
	         				<i class="fa fa-plus collape-plus"></i>
	        			</a>
	      			</h5>
	    		</div>

   				 <div id="collapse{{ $faq->id}}" class="collapse {{$show}} bg-custom" role="tabpanel" aria-labelledby="heading{{ $faq->id}}">
      				<div class="card-block">
        				<p>
        					{{$faq->message}}
        				</p>
      				</div>
    			</div>
  			</div>
  			<?php 
	          	$show = '';
	         ?>
  			@endforeach

</div>
        </div>
      </div>
      <!-- Collape Section End Here -->      
    </div>   
  
  </div>
@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')