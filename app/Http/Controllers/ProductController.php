<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.main', compact('products'));
    }


    public function create()
    {
        //NON utilisé car on passe par des MODAL
    }


    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            "price" => ["required"],
            "description" => ["required"],
            "popular" => ["required"],
            "filter" => ["required"],
            "img" => ["required"],
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->popular = $request->popular;
        $product->filter = $request->filter;

        //LOGIQUE IMAGE
        $path = 'img/products/';
        $file = $request->file('img');
        $new_image_name = date('Ymd').uniqid().'.jpg';
        $file->move(public_path($path), $new_image_name);
        //DB
        $product->img = $new_image_name;

        $product->save();
        return redirect()->route('product.index')->with('success', 'Product create !');
    }

    public function show(Product $product)
    {
        // NON utilisé car on passe par un modal
    }


    public function edit(Product $product)
    {
        //NON utilisé car on passe par des MODAL
        
    }


    public function update(Request $request, Product $product)
    {
        request()->validate([
            "name" => ["required"],
            "price" => ["required"],
            "description" => ["required"],
            "popular" => ["required"],
            "filter" => ["required"],
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->popular = $request->popular;
        $product->filter = $request->filter;

        if ($request->img != null) {
                //storage
            Storage::disk('public')->delete("/img/products/".$product->img);
            $new_image_name = date('Ymd').uniqid().'.jpg';
            $request->file('img')->move(public_path("/img/products/"), $new_image_name);
                //DB
            $product->img = $new_image_name;
        }
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product edit !');

    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete("/img/products/".$product->img);
        $product->delete();
        return redirect()->route('product.index')->with('warning', "Product delete");
    }
}
