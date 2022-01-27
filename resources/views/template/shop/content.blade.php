<section class="popular-items latest-padding">
    <div class="container">
        <div class="row product-btn justify-content-between mb-40">
            <div class="properties__button">
                <!--Nav Button  -->
                <nav>                                                      
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">NewestArrivals</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Price high to low</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Most populer </a>
                    </div>
                </nav>
                <!--End Nav Button  -->
            </div>
            <!-- Grid and List view -->
            <div class="grid-list-view">
            </div>
        </div>
        <!-- Nav Card -->
        <div class="tab-content" id="nav-tabContent">
            <!-- card one -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    @foreach ($products as $item)
                        @if ($item->filter == "home")
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('img/products/'. $item->img) }}" alt="">
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
                    @endforeach
   
                </div>
            </div>
            <!-- Card two -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    @foreach ($products as $item)
                        @if ($item->filter == "profile")
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('img/products/'. $item->img) }}" alt="">
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
                    @endforeach
                </div>
            </div>
            <!-- Card three -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    @foreach ($products as $item)
                        @if ($item->filter == "contact")
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('img/products/'. $item->img) }}" alt="">
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
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Nav Card -->
    </div>
</section>