<!-- Master Layout -->
@extends('home.navigation.master')

@section('content')
<div class="blog_section layout_padding margin_top_90">
  <div class="container">

    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="blog_details_title" style="font-size: 28px; color: #333;">Blog Details</h2>
      </div>
    </div>

    <div class="card shadow-lg" style="max-width: 400px; margin: auto;">
      <div class="card-body" style="padding: 15px;">
        <div class="row mb-3">
          <div class="col-12">
            <img src="{{ asset('storage/' . $article->files) }}" class="img-fluid rounded" alt="{{ $article->title }}" style="height: 180px; width: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <h1 class="blog_taital text-center" style="color:#333; font-size: 22px;">{{ $article->title }}</h1>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <p class="blog_text" style="color:#333">{{ $article->description}}</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <p class="category_name badge badge-category"><strong>Category:</strong> {{ $article->category->name }}</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <p class="tags">
              <strong>Tags:</strong>
              @foreach($article->tags as $tag)
                <span class="badge badge-{{ $loop->index % 2 == 0 ? 'danger' : 'primary' }}">{{ $tag->name }}</span>
              @endforeach
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
