<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateArticle;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::with('category')->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create', [
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidateArticle $request)
    {
        $filePath = $this->handleFileUpload($request);
        $article = Article::create($this->mapArticleData($request, $filePath));
        $this->syncTags($request, $article);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', [
            'article' => $article,
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'selectedTags' => $article->tags->pluck('id')->toArray(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateArticle $request, string $id)
    {
        $article = Article::findOrFail($id);
        $filePath = $article->files;
        if ($request->hasFile('files')) {
            $this->unlinkFile($article->files);
            $filePath = $this->handleFileUpload($request);
        }
        $article->update($this->mapArticleData($request, $filePath));
        $this->syncTags($request, $article);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $this->unlinkFile($article->files);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }

    /**
     * Handle file upload and return the file path.
     */
    private function handleFileUpload(Request $request): ?string
    {
        return $request->hasFile('files') ? Article::fileUploads($request) : null;
    }

    /**
     * Delete the existing file if it exists.
     */
    private function unlinkFile(?string $filePath): void
    {
        if ($filePath && file_exists(public_path('storage/' . $filePath))) {
            unlink(public_path('storage/' . $filePath));
        }
    }

    /**
     * Map the request data to an array for creating/updating an article.
     */
    private function mapArticleData(Request $request, ?string $filePath): array
    {
        return [
            'title' => $request->title,
            'description' => $request->description,
            'files' => $filePath,
            'category_id' => $request->category_id,
        ];
    }

    /**
     * Synchronize tags with the article.
     */
    private function syncTags(Request $request, Article $article): void
    {
        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
        }
    }
}
