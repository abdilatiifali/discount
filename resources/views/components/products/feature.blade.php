<div class="pos_new_product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-30">
                    <h2><span class="text-red-500">f</span>eatured products</h2>
                </div>
            </div>
        </div>  
        <div class="product-active-3">
            <!-- single-product-start -->

            @foreach($products as $product)
                <div class="single-product rounded-lg shadow-lg mr-4">
                <div class="product-img">
                    <a href="#">
                        <img src="{{ Storage::url($product->photos[0]->image) }}" alt="{{$product->name}}" class="first" />
                        <img src="{{ Storage::url($product->photos[1]->image) }}" alt="{{$product->name}}" class="second" />
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
                            <li class="new-price">${{$product->price}}</li>
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
            @endforeach
          
            <!-- single-product-end -->
        </div>
    </div>
</div>