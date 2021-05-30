<div class="most-popular-product px-4 pt-80 pb-50">
    <div class="container">
        <div class="row">

            @foreach($products as $key => $items)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-30">
                    <div class="section-title mb-30">
                        <h2>{{$key}}</h2>
                    </div>

                    <div class="product-active-2">
                        <div class="product-total">
                            <!-- single-product-start -->

                            @foreach($items as $item)
                                <div class="single-product">
                                <div class="product-img">
                                    <a href="/products/{{ $item->id }}">
                                        <img src="/{{$item->photos[0]->image}}" alt="product" class="first" />
                                        <img src="/{{$item->photos[1]->image}}" alt="product" class="second" />
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a class="hover:text-red-500" href="/products/{{ $item->id }}">{{$item->name}}</a></h3>
                                    <div class="product-rating mb-10">
                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="product-price">
                                        <ul>
                                            <li class="new-price sale">${{ $item->price }}</li>
                                            <li class="old-price">${{ $item->price + 100 }}</li>
                                        </ul>
                                    </div>
                                    <div class="add-to-links mt-15">
                                        <ul>
                                            <li>
                                                <form method="post" action="/carts">
                                                    @csrf
                                                    <input name="product" type="hidden" value="{{ $item->id }}">
                                                    <button type="submit">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                           
                            <!-- single-product-end -->
                        </div>

                        <div class="product-total">
                            <!-- single-product-start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/26.jpg" alt="product" class="first" />
                                        <img src="img/product/27.jpg" alt="product" class="second" />
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Printed Summer Dress</a></h3>
                                    <div class="product-rating mb-10">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="product-price">
                                        <ul>
                                            <li class="new-price sale">34,78 €</li>
                                            <li class="old-price">36,61 €</li>
                                        </ul>
                                    </div>
                                    <div class="add-to-links mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/28.jpg" alt="product" class="first" />
                                        <img src="img/product/29.jpg" alt="product" class="second" />
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Printed Chiffon Dress</a></h3>
                                    <div class="product-rating mb-10">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="product-price">
                                        <ul>
                                            <li class="new-price">24,78 €</li>
                                        </ul>
                                    </div>
                                    <div class="add-to-links mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/30.jpg" alt="product" class="first" />
                                        <img src="img/product/31.jpg" alt="product" class="second" />
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Printed Dress</a></h3>
                                    <div class="product-rating mb-10">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="product-price">
                                        <ul>
                                            <li class="new-price">61,78 €</li>
                                        </ul>
                                    </div>
                                    <div class="add-to-links mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-end -->
                        </div>
                    </div>
                </div>
           @endforeach
        </div>
    </div>
</div>