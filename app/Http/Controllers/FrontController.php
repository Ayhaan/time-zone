<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $products = Product::all();
        return view('shop', compact("products"));
    }
    public function blog()
    {
        $blogs = Blog::paginate(2);
        return view('blog', compact('blogs'));
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
