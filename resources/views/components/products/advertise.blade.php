<div class="static-center-area hidden md:block">
    @unless($product == null)
        <div>
            <img src="{{$product->image}}" alt="banner" />
            <div class="static-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static-text">
                                <h3>{{ $product->title }}</h3>
                                <h4 class="text-red-500">{{ $product->subtitle }}</h4>

                                <p>Dual-mode Adaptive Noise Canceling</p>
                                <p>Iconic Beats sound</p>
                                <p>12 hour rechargeable battery with Fuel Gauge</p>
                                <p>Take hands-free calls with built-in mic</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endunless
</div>