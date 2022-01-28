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


    //APPLICATION de la corbeille
    // Etapes à suivre :
    //     - dans le model, activation de la méthode sofdelete 
    //     - creation d'une table "add_deleted_at_to_blogs_talbe" pour activier une column dans la table blogs
    
    public function destroy(Blog $blog)
    {
        //Une suppresion classique ne supprime pas définitivement l'élèment. Il est toujours stocké dans la Db mais ne s'affiche plus au niveau du front
        $blog->delete();
        return redirect()->route('blog.index')->with('warning', "Article delete");

    }
    
    public function poubelle()
    {   
        //Affiche seulement les élèments en soft delete
        $blogs = Blog::onlyTrashed()->get();
        return view("admin.blog.trash", compact('blogs'));

    }
    public function restore($id)
    {
        $blog = Blog::withTrashed()->find($id);
        $blog->restore();
        return redirect()->route('blog.index')->with('success', 'Un article restauré');
    }

    //SUPPRESSION DEFINITIVE
    public function forceDelete($id)
    {
        $blog = Blog::withTrashed()->find($id);
        Storage::disk('public')->delete("/img/blog/".$blog->img);
        $blog->forceDelete();
        return redirect()->route('blog.poubelle')->with('warning', "Suppresion definitve");
        
    }
}
