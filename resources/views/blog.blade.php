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