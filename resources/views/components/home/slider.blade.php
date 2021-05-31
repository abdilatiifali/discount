<div class="slider-area background">

    @unless ($sliders->count() == 0)
        <div id="slider">
            <img src="{{ Storage::url($sliders[0]->image) }}" alt="slider-img" title="#caption1" />
            <img src="{{ Storage::url($sliders[1]->image) }}" alt="slider-img" title="#caption2" />
        </div>
    @endunless


    <div class="nivo-html-caption" id="caption1" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-text wow fadeInDownBig" data-wow-delay=".5s" >
                        <h1>portable <span class="text-red-600">bluetooth</span></h1>
                        <h2>speaker with <br /> subwoofer</h2>
                        <p>Professional Portable Bluetooth speakers with <br /> subwoofer <span class="text-red-600">USB FM</span></p>
                        <a class="hover:bg-red-600 hover:text-white" href="#"><i class="fa fa-shopping-cart"></i>buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nivo-html-caption" id="caption2" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-text wow fadeInDownBig" data-wow-delay=".5s" >
                        <h1>Up to <span class="text-red-600">60% OFF </span>& Free shipping</h1>
                        <h2>wireless Headphones  <br />reinvented</h2>
                        <p>The power and performance of both a <span class="text-red-600">40mm</span> and <br /><span class="text-red-600"> 30mm</span> neodymiumdriver in each earcup!</p>
                        <a href="#" class="hover:bg-red-600"><i class="fa fa-shopping-cart"></i>buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>