@extends('layouts.index')

@section('title-page')
    <title>Home</title>
    
@endsection

@section('content')
    @include('template.home.banner')
    @include('template.home.arrival')
    @include('template.home.popular')
    @include('template.home.choice')
@endsection