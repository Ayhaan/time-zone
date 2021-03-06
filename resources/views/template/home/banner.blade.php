<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        @php
            $product = $products->shuffle()->take(2);
        @endphp
        @foreach ($product as $item)
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">{{ __('messages.home.first_title') }}</h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">{{  __('messages.home.descri') }}</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="{{ route('shop') }}" class="btn hero-btn">{{  __('messages.home.btn_shop') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{ asset('img/products/'.$item->img) }}" alt="" class=" heartbeat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        @endforeach
        <!-- Single Slider -->
     
    </div>
</div>