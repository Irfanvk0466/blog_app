@extends('layout.navigation.master')

@section('title', 'Blog App')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('tags.index') }}">Tags</a></li>
                <li class="breadcrumb-item active">Add Tag</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Tag</h3>
    </div>
    <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag" required>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
