<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        {{-- pour récupérer le name de url et d'avoir un titre dynamique dans le banner --}}
                        <h2>{{ Route::current()->getName() }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>