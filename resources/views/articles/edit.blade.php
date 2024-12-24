@extends('layout.navigation.master')

@section('title', 'Edit Article')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Edit Article</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Article</h3>
    </div>
    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" placeholder="Enter article title">
            @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"  rows="4" placeholder="Enter article description">{{ $article->description }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="files">File Input</label>
            <div class="input-group">
                <input type="file" class="form-control" id="files" name="files">
            </div>
            <small class="form-text text-muted">Leave blank if you don't want to change the file.</small>
            @error('files')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags[]" id="tags" class="form-control" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" 
                        @if(in_array($tag->id, $selectedTags)) selected @endif>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
            @error('tags')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
@endsection
