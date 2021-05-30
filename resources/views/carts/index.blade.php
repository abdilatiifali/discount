<x-layout>

	<x-breadcrumb />

	<div class="entry-header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="entry-header-title">
						<h2>Cart</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- entry-header-area-end -->
		<!-- cart-main-area-start -->
	<div class="cart-main-area mb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action="#">
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-thumbnail">Image</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									@foreach($carts as $cart)
										<tr>
											<td class="product-thumbnail">
												<a href="#">
													<img src="/{{ $cart->attributes->image }}" alt="{{$cart->name}}" />
												</a>
											</td>
											<td class="product-name"><a href="#">{{ $cart->name }}</a></td>
											<td class="product-price"><span class="amount">${{ $cart->price }}.00</span></td>

{{-- 											@json($cart->quantity)
 --}}
											<td class="product-quantity">
												<input value="{{$cart->quantity}}">
											</td>

											<td class="product-subtotal">£165.00</td>
											<td class="product-remove"><a href="/carts/{{ $cart->id }}"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach
									
								</tbody>
							</table>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
						<div class="buttons-cart mb-30">
							<ul>
							<li><a href="/shops">Continue Shopping</a></li>
							</ul>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cart_totals">
							<h2>Cart Totals</h2>
							<table>
								<tbody>
									<tr class="cart-subtotal">
										<th>Subtotal</th>
										<td>
											<span class="amount">${{ \Cart::getSubTotal() }}</span>
										</td>
									</tr>
									<tr class="shipping">
										<th>Shipping</th>
										<td>
											<ul id="shipping_method">
												
												<li>
													<input type="radio">
													<label> Free Shipping </label>
												</li>
											</ul>
											<a href="#">Calculate Shipping</a>
										</td>
									</tr>
									<tr class="order-total">
										<th>Total</th>
										<td>
											<strong>
											<span class="amount">${{\Cart::getTotal()}}</span>
											</strong>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="wc-proceed-to-checkout">
								<a class="bg-red-500" href="/checkout">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</x-layout>