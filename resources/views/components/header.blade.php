<header>
            <!-- header-top-start -->
    <div class="header-top">
        <div class="container">
            <div class="row ptb-12 bb">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-left-menu">
                        <ul>
                            <li><a href="#"><img src="/img/flag/1.jpg" alt="flag" />English<i class="fa fa-angle-down"></i></a>
                                <div class="submenu-top">
                                    <ul>
                                        <li><a href="#"><img src="/img/flag/1.jpg" alt="flag" />English</a></li>
                                        <li><a href="#"><img src="/img/flag/2.jpg" alt="flag" />اللغة العربية</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Currency : EUR<i class="fa fa-angle-down"></i></a>
                                <div class="submenu-top">
                                    <ul>
                                        <li><a href="#"> Dollar (USD)</a></li>
                                        <li><a href="#"> Euro (EUR)</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">My account<i class="fa fa-angle-down"></i></a>
                                <div class="submenu-top">
                                    <ul>
                                        <li><a href="register.html">My account</a></li>
                                        <li><a href="wishlist.html">My wishlist</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="login.html">Log in</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="links-nav">
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Store Location</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Guarantee</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-30 bg-red-600 rounded-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="/"><img src="/img/logo10.png" alt="logo" /></a>
                    </div>
                </div>
                <div @click.away="show = false;" x-data="{show: false}" class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="search-area">
                        <div id="searchbox" @input="show = true;"  focus></div>
                        <div  x-show="show" id="hits"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="header-user">
                        <a><i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i>Free Shipping on Orders $50+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- header-menu-area-start -->
    <div class="header-menu-area bg-white" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9  hidden-sm hidden-xs">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a  class="{{ request()->routeIs('home') ? 'text-red-600 font-bold' : 'text-red-800 font-normal' }}" href="/">Home</a>
                                   
                                </li>
                                <li>
                                    <a  class="{{ request()->routeIs('shops') ? 'text-red-600 font-bold' : 'text-red-800 font-normal' }}"  href="/shops">
                                        Shop
                                        <i class="fa fa-angle-down"></i>
                                    </a>

                                    <div class="mega-menu-area">
                                        <div class="mega-menu">
                                            @foreach($categories as $category)
                                                <span>
                                                    <a  href="/shops/{{ $category->id }}" class="title">{{$category->name}}</a>

                                                    @foreach($category->products->take(3) as $product)
                                                        @if ($product->count() > 0)
                                                            <a href="/products/{{ $product->id }}">{{$product->name}}</a>
                                                        @else
                                                            <p>No product found</p>
                                                        @endif
                                                    @endforeach
                                                   
                                                </span>
                                            @endforeach
                                                
                                        </div>
                                        <div class="menu-static">
                                            <span>
                                                <a href="#"><img style="width: 300px; height: 150px;"class="rounded-lg" src="/img/banner1.jpeg" alt="banner" /></a>
                                            </span>
                                            <span>
                                                <a href="#"><img style="width: 300px; height: 150px;"class="rounded-lg" src="/img/banner2.jpeg" alt="banner" /></a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li><a  class="{{ request()->routeIs('contact') ? 'text-red-600 font-bold underline' : 'text-red-800 font-normal' }}" href="/contact-us">Contact Us</a></li>
                                <li><a  class="{{ request()->routeIs('about') ? 'text-red-600 font-bold underline' : 'text-red-800 font-normal' }}" href="/about-us">About Us</a></li>
                                <li><a class="{{ request()->routeIs('faq') ? 'text-red-600 font-bold underline' : 'text-red-800 font-normal' }}" href="/faq">FAQ</a></li>
                                <li><a class="{{ request()->routeIs('blog') ? 'text-red-600 font-bold underline' : 'text-red-800 font-normal' }}"  href="/blog">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="cart-area">
                        <ul>
                            
                            <li><a href="/carts"><i class="text-red-600 fa fa-shopping-cart"></i></a>
                                <span>{{\Cart::getContent()->count()}}</span>
                                <div class="mini-cart-sub">
                                    <div class="cart-product">
                                        @foreach(\Cart::getContent() as $cart)
                                            <div class="single-cart">
                                                <div class="cart-img">
                                                    <a  href="/products/{{$cart->id}}">
                                                        <img src="/{{ $cart->attributes->image }}" alt="{{$cart->name}}" />
                                                    </a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="/products/{{ $cart->id }}">{{$cart->name}}</a></h5>
                                                    <p>{{$cart->quantity}} x ${{ $cart->price }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Total <span>${{ \Cart::getTotal() }}.00</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a style="color: white !important; border-radius: 20px;" href="/checkout">Check out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-menu-area-end -->
    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul id="nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/shops">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Headphones with Mic</a></li>
                                        <li><a href="shop.html">Bluetooth/Wireless</a></li>
                                        <li><a href="shop.html">Extra Bass</a></li>
                                        <li><a href="shop.html">Noise Cancelling</a></li>
                                        <li><a href="shop.html">Wireless Headphones</a></li>
                                        <li><a href="shop.html">On Ear Headphones</a></li>
                                        <li><a href="shop.html">Planar Magnetic</a></li>
                                        <li><a href="shop.html">Bone Conduction</a></li>
                                        <li><a href="shop.html">Wire Managers</a></li>
                                        <li><a href="shop.html">Hi-Res Music Players</a></li>
                                        <li><a href="shop.html">Headphone Amplifiers</a></li>
                                        <li><a href="shop.html">Headphone DACs</a></li>
                                        <li><a href="shop.html">Earbud Tips</a></li>
                                        <li><a href="shop.html">Headphone Amps</a></li>
                                        <li><a href="shop.html">Headphone Cases</a></li>
                                        <li><a href="shop.html">Headphone Splitters</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="contact-us">Contact Us</a></li>
                                <li><a href="/blog">Blog</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->
</header>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@meilisearch/instant-meilisearch@0.3.2/dist/instant-meilisearch.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
    <script src="/app.js"></script>

@endpush