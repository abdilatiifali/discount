<div class="our-product-area" style="padding-top: 48px; padding-bottom: 0 !important;">
    <div class="container">

        @unless($products->count() == 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-30">
                        <h2><span class="text-red-500">o</span>ur products</h2>
                    </div>
                    <!-- tab-menu-start -->
                    <div class="tab-menu mb-30 ">
                        <ul>
                            <li class="active">
                                <a 
                                    href="#headphones" 
                                    data-toggle="tab">
                                    {{ $products->keys()[0] }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- tab-menu-end -->
                </div>
                <!-- tab-area-start -->
                <div class="tab-content">

                    <div class="tab-pane active"  id="headphones">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="total-tab">
                                    <div class="tab-1">
                                        <div class="tab-active">
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <span>-20%</span>
                                                <div class="timer text-center">
                                                    <div data-countdown="2019/12/15"></div>
                                                </div>
                                                <div class="product-img">
                                                    <a href="/products/{{ $products->first()[0]->id }}">
                                                        <img src="{{ Storage::url($products->first()[0]->photos[0]->image) }}" alt="product" class="first" />
                                                        <img src="{{ Storage::url($products->first()[0]->photos[1]->image) }}" alt="product" class="second" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">{{ $products->first()[0]->name }}</a></h3>
                                                    <div class="product-rating mb-10 color">
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="new-price sale">${{ $products->first()[0]->price }}</li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <span>-10%</span>
                                                <div class="timer text-center">
                                                    <div data-countdown="2019/12/15"></div>
                                                </div>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="img/product/11.jpg" alt="product" class="first" />
                                                        <img src="img/product/2.jpg" alt="product" class="second" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">Printed Summer Dress</a></h3>
                                                    <div class="product-rating mb-10">
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="new-price sale">32,78 €</li>
                                                            <li class="old-price">36,61 €</li>
                                                        </ul>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- single-product-end -->
                                            <!-- single-product-start -->
                                            <div class="single-product">
                                                <span>-5%</span>
                                                <div class="timer text-center">
                                                    <div data-countdown="2019/12/15"></div>
                                                </div>
                                                <div class="product-img"
                                                    <a href="#">
                                                        <img src="img/product/12.jpg" alt="product" class="first" />
                                                        <img src="img/product/1.jpg" alt="product" class="second" />
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">Faded Short Sleeves...</a></h3>
                                                    <div class="product-rating mb-10 color">
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="new-price sale">18,78 €</li>
                                                            <li class="old-price">18,61 €</li>
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

                                    <div class="tab-2">
                                        <div class="tab-active-2">
                                            <div class="total-tab-2">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="/products/{{ $products->first()[1]->id }}">
                                                            <img src="{{ Storage::url($products->first()[1]->photos[0]->image) }}" alt="product" class="first" />
                                                            <img src="{{ Storage::url($products->first()[1]->photos[1]->image) }}" alt="product" class="second" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="#">{{ $products->first()[1]->name }}</a></h3>
                                                        <div class="product-rating mb-10 color">
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="product-price">
                                                            <ul>
                                                                <li class="new-price">${{ $products->first()[1]->price }}</li>
                                                            </ul>
                                                        </div>
                                                        <p>{!! $products->first()[1]->description !!}</p>
                                                        <div class="add-to-links mt-15">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                                <!-- single-product-start -->
                                                <div class="single-product hidden-sm">
                                                    <div class="product-img">
                                                        <a href="/products/{{ $products->first()[2]->id }}">
                                                            <img src="{{ Storage::url($products->first()[2]->photos[0]->image) }}" alt="product" class="first" />
                                                            <img src="{{ Storage::url($products->first()[0]->photos[1]->image) }}" alt="product" class="second" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="#">{{ $products->first()[2]->name }}</a></h3>
                                                        <div class="product-rating mb-10">
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="text-red-500" href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="product-price">
                                                            <ul>
                                                                <li class="new-price sale">${{ $products->first()[2]->price }}</li>
                                                            </ul>
                                                        </div>
                                                        <p>{!! $products->first()[2]->description !!}</p>
                                                        <div class="add-to-links mt-15">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>

                                            <div class="total-tab-2">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="img/product/3.jpg" alt="product" class="first" />
                                                            <img src="img/product/4.jpg" alt="product" class="second" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                                        <div class="product-rating mb-10 color">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="product-price">
                                                            <ul>
                                                                <li class="new-price">36,78 €</li>
                                                            </ul>
                                                        </div>
                                                        <p> 100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
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
                                                <div class="single-product hidden-sm">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="img/product/13.jpg" alt="product" class="first" />
                                                            <img src="img/product/14.jpg" alt="product" class="second" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="#">Blouse</a></h3>
                                                        <div class="product-rating mb-10 color">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="product-price">
                                                            <ul>
                                                                <li class="new-price">32,78 €</li>
                                                            </ul>
                                                        </div>
                                                        <p> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of...</p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-area-end -->
            </div>

        @endunless


    </div>
</div>