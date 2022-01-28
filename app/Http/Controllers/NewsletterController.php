<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletter(Request $request)
    {
        $news = new Newsletter();
        $news->email = $request->email;
        $news->save();
        return redirect()->back()->with("success", "Inscription validé !");
    }

    public function index()
    {
        $news = Newsletter::all();
        return view('admin.newsletter.main', compact('news'));
    }
}
