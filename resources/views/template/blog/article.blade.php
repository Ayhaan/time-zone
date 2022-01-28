<div class="blog_left_sidebar">
    @foreach ($blogs as $item)
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('img/blog/'. $item->img) }}" alt="">
                {{-- LOGIQUE php pour la récupération de la date et du mois --}}
                @php
                    $day = $item->created_at->format('d');
                    $month = $item->created_at->format('M');
                @endphp
                <a href="{{ route('blog-details', $item->id) }}" class="blog_item_date">
                    <h3>{{ $day }}</h3>
                    <p>{{ $month }}</p>
                </a>
            </div>

            <div class="blog_details">
                <a class="d-inline-block" href="{{ route('blog-details', $item->id) }}">
                    <h2>{{ $item->title }}</h2>
                </a>
                {{-- LOGIQUE pour diminier la phrase et ne pas tout afficher --}}
                @php
                    $cut = Str::substr($item->description, 0, 180)
                @endphp
                <p>{{$cut}} ...</p>
            </div>
        </article>
        
    @endforeach
        {{-- condition pour afficher la pagination uniquement sur la page normal et non dans la page du "search" --}}
    @if (request()->path() != 'search')
        <div class="d-flex justify-content-center">
            {{ $blogs->links("pagination::bootstrap-4") }}

        </div>

    @endif
</div>