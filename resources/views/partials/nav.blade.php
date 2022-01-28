<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <a href="{{ route('admin') }}"><img src={{ asset("img/logo/logo.png") }} alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->path() == 'admin/dashboard' ? 'active' : '' }} ">
                    <a href="{{ route('admin') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->path() == 'admin/product' ? 'active' : '' }}">
                    <a href="{{ route('product.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->path() == 'admin/blog' ? 'active' : '' }}">
                    <a href="{{ route('blog.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Newsletters</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mailbox</span>
                    </a>
                </li>




            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>