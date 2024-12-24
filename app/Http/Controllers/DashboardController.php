<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return View
     */
    public function index()
    {
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $articleCount = Article::count();
        return view('admin.dashboard', compact('categoryCount', 'tagCount', 'articleCount'));
    }
}
