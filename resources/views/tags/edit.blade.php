@extends('layout.navigation.master')

@section('title', 'Edit Category')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('tags.index') }}">Tags</a></li>
                <li class="breadcrumb-item active">Edit Tag</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Tag</h3>
    </div>
    <form action="{{ route('tags.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag" value="{{ $tag->name }}" required>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
@endsection
