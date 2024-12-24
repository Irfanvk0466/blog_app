<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Site Meta -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- CSS Files -->
      <link rel="stylesheet" type="text/css" href="{{ asset('BlogHome/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('BlogHome/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/responsive.css') }}">
      <link rel="icon" href="{{ asset('BlogHome/images/fevicon.png') }}" type="image/gif" />
      <link rel="stylesheet" href="{{ asset('BlogHome/css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/details.css') }}">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/blog.css') }}">
      <link rel="stylesheet" href="{{ asset('BlogHome/css/header.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- Include Header -->
      @include('home.navigation.header')

      <!-- Main Content -->
      @yield('content')

      <!-- Include Footer -->
      @include('home.navigation.footer')

      <!-- JS Files -->
      <script src="{{ asset('BlogHome/js/jquery.min.js') }}"></script>
      <script src="{{ asset('BlogHome/js/popper.min.js') }}"></script>
      <script src="{{ asset('BlogHome/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('BlogHome/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('BlogHome/js/plugin.js') }}"></script>
      <script src="{{ asset('BlogHome/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('BlogHome/js/custom.js') }}"></script>
      <script src="{{ asset('BlogHome/js/owl.carousel.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
