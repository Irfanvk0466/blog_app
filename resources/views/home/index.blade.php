@extends('home.navigation.master')

@section('content')

  <div class="blog_section layout_padding margin_top_60" style="padding: 80px 0; height: 600px;">
    <div class="container">
      <h1 class="blog_taital text-center" style="color:black; font-size: 32px;">Blog Application</h1>
      <p class="blog_text text-center mb-4" style="color:black; font-size: 18px; line-height: 1.6;">
        Discover insightful articles and updates on various topics.
      </p>
      <div class="text-center">
        <a href="{{ route('home.blog') }}" class="btn btn-primary" style="font-size: 18px; padding: 10px 30px; background-color: #007bff; border: none; border-radius: 5px;">
          Explore
        </a>
      </div>
    </div>
  </div>

@endsection
