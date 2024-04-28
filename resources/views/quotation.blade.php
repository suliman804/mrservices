@include('frontendpartials.head')
@include('frontendpartials.header')

  <!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="FAQ"><span>Quotations</span></h1>
      		<div class="page-breadcrumb">
    				<a href="{{route('welcome')}}">Home</a>/ <span>Quotations</span>
    			</div>
      	</div>
      </div>
    </div>
</section>
<br>
<br>

   @include('frontendpartials.quote')
        <!--Service tab End-->
<br>
<br> 
   
@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')