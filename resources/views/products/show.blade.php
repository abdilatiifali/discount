<x-layout>


	<div class="mt-32 product-details-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					
					<div style="border: 1px solid rgba(229, 231, 235, .8) !important;" class="border border-gray-200 rounded-md product-img">
						<a href="#">
							<img src="/{{$product->photos[0]->image}}" alt="{{$product->name}}" class="first" />
							<img src="/{{$product->photos[1]->image}}" alt="{{$product->name}}" class="second" />
						</a>
					</div>
						
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="product-info-main">
						<div class="page-title">
							<h1>{{ $product->name }}</h1>
						</div>
						
						<div class="product-info-price">
							<div class="price-final">
								<span>${{$product->price}}.00</span>
							</div>
						</div>
						<div class="short_description_block">
							<p>
								{{ strip_tags($product->description)}}
							</p>
						</div>
						<div class="product-add-form">
							<form action="#">
								<div class="quality-button">
									<label>Qty</label>
									<input class="qty" type="number" value="1">
								</div>
							</form>
						</div>
						<div class="box-cart-bottom">
							<div class="add_to_cart">

								<form method="post" action="/carts">
									@csrf
									<input name="product" type="hidden" value="{{ $product->id }}">
									<button class="hover:bg-red-500" type="submit">Add to cart</button>
								</form>
								
							</div>
							
						</div>
						
						<div class="QuantityAvailable">
							<span>299 Items</span>
							<a href="#">In stock</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="pos_new_product ptb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title mb-30">
						<h2><span class="text-red-500">{{$relatedProducts->count()}}</span>products in the same category: </h2>
					</div>
				</div>
			</div>
			<div class="product-active-3">

				@foreach($relatedProducts as $product)
					<!-- single-product-start -->
					<div class="single-product rounded-lg shadow-lg">
						<div class="product-img">
							<a href="#">
								<img src="/{{$product->photos[0]->image}}" alt="{{$product->name}}" class="first" />
								<img src="/{{$product->photos[1]->image}}" alt="{{$product->name}}" class="second" />
							</a>
						</div>
						<div class="product-content">
							<h3>
								<a class="hover:text-red-500" href="#">
									Printed Summer Dress
								</a>
							</h3>

							<div class="text-red-500 product-rating mb-10">
								<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
								<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
								<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
								<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
								<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
							</div>
							<div class="product-price">
								<ul>
									<li class="new-price">36,78 €</li>
								</ul>
							</div>
							<div class="add-to-links mt-15">
								<ul>
									<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				@endforeach
				
				<!-- single-product-end -->
			</div>
		</div>
	</div>


</x-layout>