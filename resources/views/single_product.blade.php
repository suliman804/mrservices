@include('frontendpartials.head')
@include('frontendpartials.header')


  <!-- Intro Section -->

<section class="inner-intro bg-img light-color overlay-before parallax-background">
  <div class="container">
    <div class="row title">
      <div class="title_row">
        <h1 data-title="Shop"><span>{{$product['title']}} </span></h1>
        <div class="page-breadcrumb">
          <a href="{{route('welcome')}}">Home</a>/ <span>Product Details</span>
        </div>

      </div>

    </div>
  </div>
</section>
  <!-- End Intro Section -->
<section class="pt-90 pb-50 ptb-xs-60">
        <div class="container shop">
          <div class="row">
            <div class="col-sm-12 col-md-12 product-page">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="single-product">
                    <img id="zoom-product" src="{{Storage::disk('public')->url('products/'.$product['image'])}}" width="500" height="600" data-zoom-image="assets/images/shop/1.jpg" alt="" />
                    <!-- <div id="zoom-product-thumb" class="zoom-product-thumb">
                      <div class="owl-carousel nf-carousel-theme owl-carousel_product navigation-shop dark-switch lr-pad-20" data-pagination="false" data-autoplay="false" data-navigation="true" data-items="3" data-tablet="4" data-mobile="3" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right">
                        <a href="#" data-image="assets/images/shop/1.jpg" data-zoom-image="assets/images/shop/1.jpg" class="img__block"> <img id="img_01" src="assets/images/shop/1.jpg" alt="" /> </a>
                        <a href="#" data-image="assets/images/shop/2.jpg" data-zoom-image="assets/images/shop/2.jpg" class="img__block"> <img id="img_02" src="assets/images/shop/2.jpg" alt=""/> </a>
                        <a href="#" data-image="assets/images/shop/3.jpg" data-zoom-image="assets/images/shop/3.jpg" class="img__block"> <img id="img_03" src="assets/images/shop/3.jpg" alt=""/> </a>
                        <a href="#" data-image="assets/images/shop/4.jpg" data-zoom-image="assets/images/shop/4.jpg" class="img__block"> <img id="img_04" src="assets/images/shop/4.jpg" alt=""/> </a>
                        <a href="#" data-image="assets/images/shop/5.jpg" data-zoom-image="assets/images/shop/5.jpg" class="img__block"> <img id="img_05" src="assets/images/shop/5.jpg" alt=""/> </a>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- .product -->
                <div class="col-md-8 col-sm-6">
                  <div class="product-rating pull-right">
                    <div class="star-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="price-details">
                    <span class="actual-price">&#163; {{$product['price']}}</span>
                    <span class="price">&#163; {{$product['sale_price']}}</span>
                  </div>
                  <div class="description">
                  {!!$product['short_desc']!!}
                  {!!$product['desc']!!}  
                  </div>
                 <form action="{{route('cart.store')}}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$product['id']}}">
                  <input type="hidden" name="quantity" value="1">

                  <button type="submit" name="" value="" class="btn-text"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                </form>
                  <!-- <a href="#" class="btn-text">Add To Cart</a> -->
                  <div class="product-meta-details">
                    <span class="product-code">Product Code: {{$product['id']}}</span>
                    <span class="product-code pull-right">Category: {{$product['category']}}</span>
                  <!--   <div class="product-tag">
                      <strong>Tags:</strong>
                      <span class="text-color">Finance Book, Wood Cleaner</span>
                    </div> -->
                  </div>
                </div>
              </div>
              
            </div>
            

          </div>
        </div>
      </section>


@include('frontendpartials.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')