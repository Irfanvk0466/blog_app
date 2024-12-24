<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Display home page.
     */ 
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display blog page.
     */
    public function blog()
    {
        $blogs = Article::all();
        return view('home.blog', compact('blogs'));
    }

    /**
     * Display details of blog.
     */
    public function show(string $id)
    {
        $article = Article::with(['category', 'tags'])->findOrFail($id);
        return view('home.details', compact('article'));
    }

}
