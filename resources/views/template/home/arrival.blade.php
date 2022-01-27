<section class="new-product-area section-padding30">
    <div class="container">
        <!-- Section tittle -->
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle mb-70">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            {{-- <img src="assets/img/gallery/new_product1.png" alt=""> --}}
                            <img src="{{ asset('img/products/'. $item->img) }}" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">{{ $item->name }}</a></h3>
                            <span>$ {{ $item->price }}</span>
                        </div>
                    </div>
                </div>
                
            @endforeach

        </div>
    </div>
</section>