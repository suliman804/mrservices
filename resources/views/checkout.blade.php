@include('frontendpartials.head')
@include('frontendpartials.header')

            <!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
                <div class="row title">
                    <div class="title_row">
                        <h1 data-title="Checkout"><span>Checkout</span></h1>
                        <div class="page-breadcrumb">
                            <a>Home</a>/ <span>Checkout</span>
                        </div>

                    </div>

                </div>
            </div>
        </section>
            <!-- End Intro Section -->

            <section class="padding ptb-xs-60">
                <div class="romana_chect_out_form_area sp">
                    <div class="container">
                        <form action="{{route('stripe.post')}}" method="post">
                        @csrf
                            <div class="romana_check_out_form">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="check_form_left common_input">
                                            <div class="heading-box pb-30">
                                                <h2><span>Billing</span> Address</h2>
                                                <span class="b-line l-left"></span>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="first_name" placeholder="Fast name" required="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="last_name" placeholder="Last name" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="company_name" placeholder="Compay">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="email" placeholder="Email" required="required">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="contact" placeholder="Phone" required="required">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="select_option_one">
                                                        <select name="country" id="userSelect" class="">
                                                            <option value="1" selected disabled>Select Country</option>
                                                            <option value="Unitate State">Unitate State</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                        </select>
                                                    </div>
                                                    <div class="select_option_one">
                                                        <select name="city" id="userSelect1" class="">
                                                            <option value="State" selected disabled>Select State</option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Lowa">Lowa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="select_option_one">
                                                        <select name="state" id="userSelect2" class="">
                                                            <option value="City" selected disabled>Select City</option>
                                                            <option value="Bristol">Bristol</option>
                                                            <option value="Washington">Washington</option>
                                                            <option value="Salem">Salem</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="postal_code" placeholder="Zip Code">
                                                    @foreach($cartItems as $item)
                                                    <input type="hidden" name="product_name" value="{{$item->name}}">
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="address" placeholder="Address" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="check_form_right bg-color light-color">
                                            <div class="heading-box pb-15 ">
                                                <h2><span>your</span> order</h2>
                                                <span class="b-line l-left secondary_bg"></span>

                                            </div>

                                            <div class="product_order">
                                                <ul>
                                                    <li>
                                                        product<span>total</span>
                                                    </li>
                                                    @if($cartItems->Count() > 0)
                                                    
                                                    @foreach($cartItems as $item)
                                                    <li>
                                                       {{$item->name}}<span>&#163; {{$item->subtotal()}}</span>
                                                    </li>
                                                    @endforeach
                                                @else
                                                    <li>
                                                        <p>Your Cart is empty</p>
                                                    </li>

                                                @endif
                                                    <li>
                                                        subtotal:<span>&#163; {{Cart::instance('cart')->subtotal()}}</span>
                                                    </li>
                                                    <li>
                                                        total:<span>&#163; {{Cart::instance('cart')->total()}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="romana_select_method ">
                                                <ul class="mb-40">
                                                 <!-- <li>
                                                        <input type="radio" id="option1" name="payment" value="cash">
                                                        <label for="option1">Cash on delivery</label>
                                                        <div class="check_text">
                                                            <p>
                                                                Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                            </p>
                                                        </div>
                                                        <div class="check"></div>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="option1" name="selector">
                                                        <label for="option1">Check Payment</label>
                                                        <div class="check_text">
                                                            <p>
                                                                Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                            </p>
                                                        </div>
                                                        <div class="check"></div>
                                                    </li> -->
                                                   <!--  <li>
                                                        <input type="radio" id="option2" name="selector" checked="">
                                                        <label for="option2">paypal</label>
                                                        <div class="paypal_img">
                                                            <img src="assets/images/paypal-card.png" alt="">
                                                        </div>
                                                        <div class="check"></div>
                                                    </li> -->
                                                </ul>
                                                <button type="submit" class="btn-text white-btn">place order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- column End -->
                    </div>
                    <!-- container End -->
                </div>
            </section>
            <!-- End Intro Section -->

@include('frontendpartials.scripts')