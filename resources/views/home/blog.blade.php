@extends('home.navigation.master')

@section('content')

<div class="blog_section layout_padding margin_top_60">
  <div class="container">
    <h1 class="blog_taital text-center" style="color:black">Our Latest Articles</h1>
    <p class="blog_text text-center mb-4" style="color:black">Discover insightful articles and updates on various topics.</p>

    <div class="row">
      @foreach ($blogs as $blog)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 border-0 shadow-lg rounded">
            <div class="overflow-hidden" style="border-radius: 15px 15px 0 0;">
              <img 
                src="{{ asset('storage/' . $blog->files) }}" 
                class="card-img-top img-fluid" 
                alt="{{ $blog->title }}" 
                style="height: 200px; object-fit: cover; transition: transform 0.3s ease;">
            </div>
            <div class="card-body">
              <h5 class="card-title text-truncate" title="{{ $blog->title }}">{{ $blog->title }}</h5>
              <p class="card-text text-muted">{{ Str::limit($blog->description, 100) }}</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <a href="{{ route('article.show', $blog->id) }}" class="btn btn-primary rounded-pill px-4">
                Read More
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection