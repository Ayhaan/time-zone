@extends('layouts.index')

@section('title-page')
    <title>Blog</title>
@endsection


@section('content')
    @include('template.banner')
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                {{-- CONTENT à gauche --}}
                <div class="col-lg-8 mb-5 mb-lg-0">
                    {{-- logique conditon pour afficher une phrase avec le nombre de la recherche unquiement si la fonction search est activé --}}
                    @if (request()->path() == 'search')
                        <p style="font-weight: bold">{{ count($blogs) }} résultat(s) pour la recherche "{{ $data }}"</p>
                        
                    @endif
                    @include('template.blog.article')
                </div>
                {{-- CONTENT à droite --}}
                <div class="col-lg-4">
                    @include('template.blog.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection