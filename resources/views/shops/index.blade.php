<x-layout>

	<x-breadcrumb />


		<!-- breadcrumb-area-end -->
		<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
				<!-- shop-right-area -->
				<div class="shop-right-area">
					<div class="page-heading mb-10">
						<div class="cart-name">
							<span>{{isset($category) ? $category->name : 'All Products'}}</span>
						</div>
						<div class="heading-counter">
							<span>There are {{$products->count()}} products.</span>
						</div>
					</div>
				</div>
				<!-- shop-right-area -->
				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane active" id="th">
						<div class="grid grid-cols-3 gap-10">
							<!-- single-product-start -->
							@forelse($products as $product)
							<div class="single-product mb-30 rounded-lg shadow-lg">
								<div class="product-img">
									<a href="/products/{{ $product->id }}">
										<img src="/{{$product->photos[0]->image}}" alt="product" class="first" />
										<img src="/{{ $product->photos[1]->image }}" alt="product" class="second" />
									</a>
								</div>
								<div class="product-content">
									<h3><a href="#">{{ $product->name }}</a></h3>
									<div class="product-rating mb-10">
										<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
										<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
										<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
										<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
										<a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="product-price">
										<ul>
											<li class="new-price">${{ $product->price }}</li>
										</ul>
									</div>
									<div class="add-to-links mt-15">
										<ul>
											<li>
												<form method="post" action="/carts">
													@csrf
													<input name="product" type="hidden" value="{{ $product->id }}">
													<button type="submit">
													<i class="fa fa-shopping-cart"></i>
													</button>
												</form>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							@empty
							<p>NO products available now</p>
							@endforelse
							
							<!-- single-product-end -->
						</div>
					</div>
					
				</div>
				<!-- tab-area-end -->
				<!-- pagination-area-start -->
				
				<!-- pagination-area-end -->
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<!-- shop-left-area-start -->
				<div class="shop-left-area">
					
					<!-- single-shop-left-end -->
					<!-- single-shop-left-start -->
					<div class="single-shop-left mb-30">
						<div class="shop-left-title">
							<h3> Enabled filters:</h3>
						</div>
						<div class="shop-left-menu-2">
							<ul>

								<li>
									<a href="/shops">All</a>
								</li>

								@foreach($categories as $category)

									<li>
										
										<a href="/shops/{{$category->id}}">{{$category->name}}({{$category->products()->count()}})</a>
									
									</li>
								@endforeach
							</ul>
						</div>
					</div>

					
					
					
					<!-- single-shop-left-end -->
					<!-- single-shop-left-start -->
					
					<!-- single-shop-left-end -->
				</div>
				<!-- shop-left-area-end -->
			</div>
		</div>
	</div>
</div>

</x-layout>