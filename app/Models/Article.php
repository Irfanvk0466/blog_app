<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'files',
        'category_id',
    ];

    /**
     * Define the relationship between Article and Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Define the relationship between Article and tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }

    /**
     * Handle file uploads.
     *
     * @param Request $request
     * @return string|null
     */
    public static function fileUploads($request)
    {
        if ($request->hasFile('files')) {
            $file = $request->file('files');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            return $filePath;
        } else {
            return null;
        }
    }
}
