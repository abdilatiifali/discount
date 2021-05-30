<x-layout>
        <!-- header-area-end -->
        <!-- slider-area-start -->
        <x-home.slider :sliders="$sliders" />
        <!-- slider-area-end -->
        <!-- banner-area-start -->

        <!-- banner-area-end -->
        <!-- banner-area-2-start -->

        <div class="pt-20">
            <x-products.banner />
        </div>

        <!-- banner-area-2-end -->
        <!-- pos_new_product-area-start -->
        <x-products.new-arrivals :products="$newArrivals" />

        <!-- pos_new_product-area-end -->
        <!-- our-product-area-start -->
        
        <x-products.special :products="$specialcategories"  />

        <!-- our-product-area-end -->
        <!-- static-center-area-start -->

        <x-products.advertise :product="$advertise" />
        <!-- static-center-area-end -->
        <!-- most-popular-product-start -->

        <x-products.feature :products="$featureProducts" />


        <x-products.popular :products="$specialcategories" />

        <!-- most-popular-product-end -->
        <!-- blog-area-start -->
{{--         <x-blogs.latest />
 --}}

        <!-- blog-area-end -->
        <!-- pos_new_product-area-start -->


</x-layout>