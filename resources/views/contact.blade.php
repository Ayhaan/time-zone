@extends('layouts.index')

@section('title-page')
    <title>Contact</title>
@endsection

@section('content')
@include('template.banner')
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            @include('template.contact.maps')
        </div>
        @include('template.contact.form')
    </div>
</section>
@endsection