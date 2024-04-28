@include('frontendpartials.head')
@include('frontendpartials.header')

            <!-- Intro Section -->
            <section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
                <div class="row title">
                    <div class="title_row">
                        <h1 data-title="Cart"><span>Cart</span></h1>
                        <div class="page-breadcrumb">
                            <a>Home</a>/ <span>Cart</span>
                        </div>

                    </div>

                </div>
            </div>
        </section>
            <!-- End Intro Section -->
                    <section class="padding ptb-xs-60">
                <div class="cart_page_area sp100">
                    <div class="container">
                        <div class="cart_table_wraper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="cart_wrpaer">
                                        <div class="table_scroll table-responsive">
                                            <table class=" table table-striped">
                                                <thead class="dark-bg">
                                                    <tr>
                                                        <th><span>Product</span></th>
                                                        <th><span>Description</span></th>
                                                        <th><span>Price</span></th>
                                                        <th><span>Quantity</span></th>
                                                        <th><span>Total</span></th>
                                                        <th><span></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if($cartItems->Count() > 0)
                                                    
                                                    @foreach($cartItems as $item)


                                                    <tr>
                                                        <td><img class="img-rounded" src="{{Storage::disk('public')->url('products/'.$item->model->image)}}" alt=""></td>
                                                        <td class="padding_all">
                                                        <p>
                                                            {{$item->name}}
                                                        </p></td>
                                                        <td class="padding_all">
                                                        <p>
                                                          &#163; {{$item->price}}
                                                        </p></td>
                                                        <td class="padding_all">
                                                        <div class="cart_amount_wrap">
                                                            <div class="product-regulator">
                                                                <!-- <button class="minus" type="button" onclick="updateCart('{{$item->rowId}}')">
                                                                    <i class="fa fa-minus"></i>
                                                                </button> -->
                                                                <!-- <div class="output" id="cart-quantity"> -->
                                                                    <!-- {{$item->qty}} -->
                                                                    <input type="number" class="output" name="quantity" data-rowid='{{$item->rowId}}' onchange="updateCart(this)" id="quantity-input" value="{{$item->qty}}">
                                                                <!-- </div> -->
                                                                <!-- <button class="plus" type="button" onclick="updateCart('{{$item->rowId}}')">
                                                                    <i class="fa fa-plus"></i>
                                                                </button> -->
                                                            </div>
                                                        </div></td>
                                                        <td class="padding_all">
                                                        <p>
                                                            &#163; {{$item->subtotal()}}
                                                        </p></td>
                                                        <td class="padding_all"><a href="#" onclick="removeItemFromCart('{{$item->rowId}}')"><i class="fa fa-times"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>Your Cart is empty</td>
                                                    </tr>

                                                @endif    
                                                </tbody>
                                            </table>
                                            <!-- table End -->
                                        </div>
                                        <div class="row cart_btns">
                                            <!-- <div class="col-sm-8">
                                                <form action="#">
                                                    <input type="text" placeholder="Coupon Code" class="common_btn cart_page_btn1" name="coupon">
                                                </form>
                                                <a class="cart_page_btn2 btn-text  hvr-bounce-to-right" href="#">Apply coupon</a>
                                            </div> -->
                                            <!-- column End -->
                                            <div class="col-sm-4 text-right">
                                                <a class="btn-text pull-right secondary_bg mt-xs-20" href="{{url('/products')}}">Continue Shopping </a>
                                            </div>
                                            <!-- column End -->
                                        </div>
                                        <!-- cart_btns End -->
                                    </div>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- row End -->
                            <div class="row">
                                <div class="col-sm-6 offset-sm-6">
                                    <div class="cart_totals_area gray-bg">

                                        <ul>
                                            <li>
                                                Subtotal <span>${{Cart::instance('cart')->subtotal()}}</span>
                                            </li>
                                            <li>
                                                Shipping Charge<span>free</span>
                                            </li>
                                            <li>
                                                <strong>Total</strong><span><strong> $ {{Cart::instance('cart')->total()}} </strong></span>
                                            </li>
                                        </ul>
                                        
                                         @if(Cart::instance('cart')->count() > 0)
                                            <a class="btn-text pull-right" href="{{route('checkout')}}">Proceed To Checkout</a>
                                        @endif
                                       
                                    </div>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- row End -->
                        </div>
                    </div>
                    <!-- container End -->
                </div>

            </section>
<form id="deleteFormcart" action="{{route('cart.remove')}}" method="post"> 
    @csrf
    @method('delete')
    <input type="hidden" name="rowid" id="rowid">
</form>
<!-- <form id="deleteFormcart" action="{{route('cart.remove')}}" method="post"> 
    @csrf
    @method('delete')
</form> -->
<form id="updateCartQty" action="{{route('cart.update')}}" method="post"> 
    @csrf
    @method('put')
    <input type="hidden" name="rowId" id="uprowid">
    <input type="hidden" name="quantity" id="quantity">
</form>
    <!-- Footer Area -->
    @include('frontendpartials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
       function removeItemFromCart(rowid){
        $('#rowid').val(rowid);
        $('#deleteFormcart').submit();
       }

       function updateCart(qty){
        // var qty = $('#cart-quantity').html();

        // alert(qty);
        $('#uprowid').val($(qty).data('rowid'));
        $('#quantity').val($(qty).val());
        $('#updateCartQty').submit();
       }
   </script>
    <!-- /.End Of Footer Area -->
@include('frontendpartials.scripts')