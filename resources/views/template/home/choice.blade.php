<div class="watch-area section-padding30">
    <div class="container">
        @forelse ($products->shuffle() as $item)
            <div class="row align-items-center justify-content-between padding-130">
                @if ($loop->iteration <= 2)
                    @if ($loop->iteration % 2 == 0)
                        <div class="col-lg-5 col-md-6">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->description }}</p>
                                <a href="{{ route('product-details', $item->id) }}" class="btn">Show Watches</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="choice-watch-img mb-40">
                                <img src="{{ asset('img/products/' . $item->img) }}" alt="">
                            </div>
                        </div>
                        @else
                        <div class="col-lg-5 col-md-6">
                            <div class="choice-watch-img mb-40">
                                <img src="{{ asset('img/products/' . $item->img) }}" alt="">
                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-6">
                            <div class="watch-details mb-40">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->description }}</p>
                                <a href="{{ route('product-details', $item->id) }}" class="btn">Show Watches</a>
                            </div>
                        </div>
                    
                    @endif  
                @endif
                
            </div>
        @empty
            <p>vide</p>
        @endforelse
    </div>
        {{-- <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="choice-watch-img mb-40">
                    <img src="assets/img/gallery/choce_watch2.png" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="watch-details mb-40">
                    <h2>Watch of Choice</h2>
                    <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <a href="shop.html" class="btn">Show Watches</a>
                </div>
            </div>
        </div> --}}
</div>