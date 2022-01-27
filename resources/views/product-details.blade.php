@extends('layouts.index')

@section('title-page')
    <title>Product Détails</title>
@endsection


@section('content')
    @include('template.banner')
    <div class="product_image_area">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
            <div class="product_img_slide owl-carousel">
                <div class="single_product_img">
                    <img src="{{ asset('img/products/' . $product->img) }}" alt="#" class="img-fluid">
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="single_product_text text-center">
                <h3>{{$product->name}}</h3>
                <p>
                    {{ $product->description }}
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection