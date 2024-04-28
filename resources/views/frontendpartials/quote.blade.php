	<section id="feadback" class="padding ptb-xs-40 img_bg1">
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
					<div class=" col-md-12 col-lg-12">

						<!-- Contact FORM -->
						<form class="quote-form"  action="{{route('savequote')}}" method="post">
						@csrf
							<!-- IF MAIL SENT SUCCESSFULLY -->
							<div id="success">
								<strong>
				                  <!-- @if(session('success')) -->
				                    <!-- <div class="alert alert-success">
				                        {{ session('success') }}
				                    </div> -->
				                   <!--  <script>alert("{{session('success')}}")</script>
				                  @endif -->
				                </strong>
							</div>
							<!-- END IF MAIL SENT SUCCESSFULLY -->
							<div class="row">
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Full Name">
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email">
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="text" name="form-phone" placeholder="Phone">
									</div>
								</div>
								<!-- <div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="text" name="form-trasport-type" placeholder="Transport Type">
									</div>
								</div> -->
								<div class="col-md-4 col-lg-4 ">
									<div class="form-field" >
										<select class="input-s form-full" id="sub" name="form-transport-type" >
											<option selected="selected" disabled="disabled">Chose Van Size</option>
											<option value="Car">Car</option>
											<option value="Small Van">Small Van</option>
											<option value="Short Wheel Base">Short Wheel Base</option>
											<option value="Long Wheel Base">Long Wheel Base</option>
											<option value="XL Wheel Base">XL Wheel Base</option>
											<option value="Luton-tail lift">Luton-tail lift</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="text" name="form-move-from" placeholder="Pickup Postcode">
									</div>
								</div>
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="text" name="form-Move-to" placeholder="Drop off Postcode">
									</div>
								</div>
								
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="date" name="form-date" placeholder="Date" min="{{date('Y-m-d')}}">
									</div>
								</div>
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="time" name="form-time" placeholder="Date" min=" ">

									</div>
								</div>
								<div class="col-md-4 col-lg-10">
									<div class="form-field">
										<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-md-3 col-lg-2 d-flex align-items-center mt-xs-30">
									<button type="submit" class="bnt btn-text sent-but mt-xs-30"  name="button">
										Send
									</button>
								</div>
							</div>
						</form>
						<!-- END Contact FORM -->
					</div>

				</div>

			</div>
		</section>