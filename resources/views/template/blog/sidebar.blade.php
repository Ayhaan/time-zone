<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Search Keyword'" name="data">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Search</button>
        </form>
    </aside>

    @include('layouts.flash')
    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>

        <form action="{{ route('newsletter') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email'" name="email" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Subscribe</button>
        </form>
    </aside>
</div>