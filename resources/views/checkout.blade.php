<x-layout>

	<div class="entry-header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="entry-header-title">
						<h2>Checkout</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<!-- coupon-area-area-end -->
		<!-- checkout-area-start -->
	<div class="checkout-area mb-70">
		<div class="container">
			<div class="row">
				<form action="#">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="checkbox-form">
							<h3>Billing Details</h3>
							<div class="row">
								<div class=" col-lg-12">
									<div class="country-select">
										<label>Country <span class="required">*</span></label>
										<select>
											<option value="volvo">bangladesh</option>
											<option value="saab">Algeria</option>
											<option value="mercedes">Afghanistan</option>
											<option value="audi">Ghana</option>
											<option value="audi2">Albania</option>
											<option value="audi3">Bahrain</option>
											<option value="audi4">Colombia</option>
											<option value="audi5">Dominican Republic</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
									<div class="checkout-form-list">
										<label>First Name <span class="required">*</span></label>
										<input type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Last Name <span class="required">*</span></label>
										<input type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout-form-list">
										<label>Company Name</label>
										<input type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label>
										<input type="text" placeholder="Street address">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout-form-list">
										<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout-form-list">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" placeholder="Town / City">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>State / County <span class="required">*</span></label>
										<input type="text" placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Postcode / Zip <span class="required">*</span></label>
										<input type="text" placeholder="Postcode / Zip">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Email Address <span class="required">*</span></label>
										<input type="email" placeholder="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Phone  <span class="required">*</span></label>
										<input type="text" placeholder="Postcode / Zip">
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="your-order">
							<h3>Your order</h3>
							<div class="your-order-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Total</th>
										</tr>
									</thead>
									<tbody>
										@foreach(\Cart::getContent() as $cart)
											<tr class="cart_item">
												<td class="product-name">
													{{ $cart->name }} <strong class="product-quantity"> × {{$cart->quantity}}</strong>
												</td>
												<td class="product-total">
													<span class="amount">${{ $cart->price * $cart->quantity }}</span>
												</td>
											</tr>
										@endforeach
										
									</tbody>
									<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">${{ \Cart::getSubTotal() }}.00</span></td>
									</tr>
									
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">${{ \Cart::getTotal() }}.00</span></strong>
									</td>
								</tr>
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							
							<div class="order-button-payment">
								<input type="submit" class="rounded-lg" value="Place order">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</x-layout>