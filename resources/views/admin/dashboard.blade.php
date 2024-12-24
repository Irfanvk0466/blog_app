@extends('layout.navigation.master')

@section('title', 'Blog App')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card shadow-pro border-primary hover-card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title">
                    <i class="fas fa-th-list"></i> Categories
                </h5>
            </div>
            <div class="card-body text-center">
                <h3 class="font-weight-bold">{{ $categoryCount }}</h3>
                <p class="text-muted">Total Categories</p>
            </div>
            <div class="card-footer text-muted text-center">
                <small>Updated just now</small>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-pro border-info hover-card">
            <div class="card-header bg-info text-white">
                <h5 class="card-title">
                    <i class="fas fa-tags"></i> Tags
                </h5>
            </div>
            <div class="card-body text-center">
                <h3 class="font-weight-bold">{{ $tagCount }}</h3>
                <p class="text-muted">Total Tags</p>
            </div>
            <div class="card-footer text-muted text-center">
                <small>Updated just now</small>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-pro border-success hover-card">
            <div class="card-header bg-success text-white">
                <h5 class="card-title">
                    <i class="fas fa-newspaper"></i> Articles
                </h5>
            </div>
            <div class="card-body text-center">
                <h3 class="font-weight-bold">{{ $articleCount }}</h3>
                <p class="text-muted">Total Articles</p>
            </div>
            <div class="card-footer text-muted text-center">
                <small>Updated just now</small>
            </div>
        </div>
    </div>
</div>
@endsection
