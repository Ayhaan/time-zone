@extends('layouts.index')

@section('content')
@include('template.banner')
<div class="col-12 posts-list">
    <div class="single-post text-center py-5">
        <p class="text-center">{{ $blog->created_at->format("d-M-Y") }}</p>
       <div class="feature-img">
          <img class="img-fluid" src="{{ asset('img/blog/'. $blog->img) }}" alt="">
       </div>
       <div class="blog_details container">
            <p>{{ $blog->description }}</p>
       </div>
    </div>

 </div>
@endsection