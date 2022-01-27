<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper position-relative justify-content-center">
                    <!-- Logo -->
                    <div class="logo position-absolute" style="left: 0;">
                        <a href="index.html"><img src={{ asset("img/logo/logo.png") }} alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('shop') }}">shop</a></li>
                                <li><a href="{{ route('blog') }}">blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
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