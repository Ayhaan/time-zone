<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.main', compact('blogs'));
    }

    public function create()
    {
        //NON UTILISER CAR ON PASSE via un model
    }


    public function store(Request $request)
    {
        request()->validate([
            "title" => ["required"],
            "description" => ["required"],
            "img" => ["required"],
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        //LOGIQUE IMAGE
        $path = 'img/blog/';
        $file = $request->file('img');
        $new_image_name = date('Ymd').uniqid().'.jpg';
        $file->move(public_path($path), $new_image_name);
        //DB
        $blog->img = $new_image_name;

        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Article create');
    }


    public function show(Blog $blog)
    {
        //NON UTILISER CAR ON PASSE via un model
        
    }


    public function edit(Blog $blog)
    {
        //NON UTILISER CAR ON PASSE via un model
        
    }


    public function update(Request $request, Blog $blog)
    {
        request()->validate([
            "title" => ["required"],
            "description" => ["required"],
        ]);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->img != null) {
            //storage
            Storage::disk('public')->delete("/img/blog/".$blog->img);
            $new_image_name = date('Ymd').uniqid().'.jpg';
            $request->file('img')->move(public_path("/img/blog/"), $new_image_name);
                //DB
            $blog->img = $new_image_name;
        };
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Article update');

    }


    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete("/img/blog/".$blog->img);
        $blog->delete();
        return redirect()->route('blog.index')->with('warning', "Article delete");

    }
}
