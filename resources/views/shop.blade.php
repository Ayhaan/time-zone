@extends('layouts.index')

@section('title-page')
    <title>Shop</title>
@endsection

@section('content')
    @include('template.banner')
    @include('template.shop.content')
@endsection