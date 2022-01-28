<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper position-relative justify-content-center">
                    <!-- Logo -->
                    <div class="logo position-absolute" style="left: 0;">
                        <a href="{{ route('home') }}"><img src={{ asset("img/logo/logo.png") }} alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('shop') }}">shop</a></li>
                                <li><a href="{{ route('blog') }}">blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                {{-- LOGIQUE LANGUE --}}
                                {{-- ETAPES  --}}
                                <li class="ml-2">
                                    <a href="#">
                                        <img class="mr-1" height="18px" src="{{ asset('img/flag/'. Config::get('languages')[App::getLocale()]['flag-icon'] . ".png") }}" alt="lang-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}">
                                        {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    </a>
                                    <ul class="submenu">
                                        @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <li>
                                                    <a href="{{ route('lang.switch', $lang) }}" class="d-flex align-items-center">
                                                        <img class="mr-1" height="18px" src="{{ asset('img/flag/'. $language['flag-icon'] . ".png") }}" alt="lang-{{ $language['flag-icon'] }}">
                                                        {{$language['display']}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                       
                                    </ul>
                   
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none py-4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>