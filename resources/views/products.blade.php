@include('frontendpartials.head')
@include('frontendpartials.header')


	<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
	<div class="container">
		<div class="row title">
			<div class="title_row">
				<h1 data-title="Shop"><span>Shop</span></h1>
				<div class="page-breadcrumb">
					<a href="{{route('welcome')}}">Home</a>/ <span>Shop</span>
				</div>

			</div>

		</div>
	</div>
</section>
	<!-- End Intro Section -->
<section class="page-section padding ptb-xs-60">
	<div class="container shop text-center">
		<div class="row">
		@if($products->count())
        @foreach($products as $pr)
			<div class="col-sm-4 col-md-3">
				<div class="product-item">
					<div class="product-img">
						<img src="{{Storage::disk('public')->url('products/'.$pr->image)}}" alt="" width="265" height="276" />
						<div class="product-overlay">
							<div class="add-to-cart">
								<!-- <a href="#"> <i class="fa fa-shopping-cart"></i> Add to Cart</a> -->
								<form action="{{route('cart.store')}}" method="post">
									@csrf
									<input type="hidden" name="id" value="{{$pr->id}}">
									<input type="hidden" name="quantity" value="1">

									<button type="submit" name="" value=""><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</form>
							</div>
							<div class="quick-view">
								<a href="{{ route('product_view', ['id' => $pr->id]) }}" cl > <i class="fa fa-eye" ></i> Quick View</a>
							</div>
						</div>
					</div>
					<div class="product-details">
						<h4>{{$pr->title}}</h4>
						<h5 class="text-color">&#163; {{$pr->sale_price}}</h5>
					</div>
				</div>
			</div>
		@endforeach
		@else
			<div class="col-md-12">
				<h4 class="text-center">No Product Found!</h4>
			</div>

		@endif
		</div>
	</div>
</section>	

@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')