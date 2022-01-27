<div class="watch-area section-padding30">
    <div class="container">


        @forelse ($products->shuffle()->take(2) as $item)
            <div class="row align-items-center justify-content-between padding-130">
                @if ($loop->iteration % 2 == 0)
                <div class="col-lg-5 col-md-6">
                    <h2>{{ $item->name }}</h2>
                    <p>{{ $item->description }}</p>
                    <a href="{{ route('product-details', $item->id) }}" class="btn">Show Watches</a>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="choice-watch-img mb-40">
                        <img src="{{ asset('img/products/' . $item->img) }}" alt="">
                    </div>
                </div>
            </div>
        @else
            <div class="row align-items-center justify-content-between padding-130">
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
            </div>

        @endif

    </div>
    @empty
    <p>vide</p>
    @endforelse
</div>

