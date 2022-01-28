<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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

    //LOGIQUE pour changer la langue de l'application complétement 
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
