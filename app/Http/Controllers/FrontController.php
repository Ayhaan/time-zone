<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function shop()
    {
        return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blogDetails()
    {
        return view('blog-details');
    }
    public function productDetails(Product $product)
    {
        return view('product-details', compact('product'));
    }
}
