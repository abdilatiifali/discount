 <footer>
            <!-- footer-top-area-start -->
    <div class="footer-top-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <!-- single-footer-start -->
                    <div class="single-footer">
                        <div class="footer-logo mb-30">
                            <a href="#"><img src="/img/logo10.png" alt="logo" /></a>
                        </div>
                        <p>We Are The leading Electronic company in Somalia by far. <span class="text-red-500">Discount Ltd.</span></p>
                        <div class="footer-address">
                            <ul>
                                <li><i class="text-red-500 fa fa-map-marker"></i>address :Mogadishu banaadir bakaraha kaso horjeedka salama bank.</li>
                                <li><i class="text-red-500 fa fa-envelope"></i>Email :discountltd.so@gmail.com</li>
                                <li><i class="text-red-500 fa fa-mobile"></i>Phone :+(252) 61 8783636</li>
                            </ul>
                        </div>
                        <div class="social-link">
                            <ul>
                                <li><a href="https://www.facebook.com/discountLTD"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single-footer-end -->
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <!-- single-footer-start -->
                    <div class="single-footer">
                        <div class="footer-title">
                            <h4>Information</h4>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a class="hover:text-red-500" href="/">Home</a></li>
                                <li><a class="hover:text-red-500" href="/about-us">About Us</a></li>
                                <li><a class="hover:text-red-500" href="/contact-us">Contact Us</a></li>
                                <li><a class="hover:text-red-500" href="/shops">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single-footer-end -->
                </div>
                
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <!-- single-footer-start -->
                    <div class="single-footer">
                        <div class="footer-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a class="hover:text-red-500" href="#">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- single-footer-end -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-area-end -->
    <!-- footer-bottom-area-start -->
    <div class="footer-bottom-area ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copy-right">
                        <p>Copyright<a href="#" class="text-red-500">Discount</a>. All Rights Reserved</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- footer-bottom-area-end -->
</footer>