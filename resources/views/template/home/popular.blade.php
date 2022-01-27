<div class="popular-items ">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-70 text-center">
                    <h2>Popular Items</h2>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($products->shuffle() as $item)
                @if ($item->popular)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{ asset('img/products/' . $item->img) }}" alt="">
                                <div class="img-cap">
                                    <a href="{{ route('product-details', $item->id) }}">
                                        <span>SHOW</span>
                                    
                                    </a>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">{{ $item->name }}</a></h3>
                                <span>$ {{ $item->price }}</span>
                            </div>
                        </div>
                    </div>
                    
                    
                @endif
            @empty
                <p>vide</p>
            @endforelse
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn pt-70">
                <a href="catagori.html" class="btn view-btn1">View More Products</a>
            </div>
        </div>
    </div>
</div>