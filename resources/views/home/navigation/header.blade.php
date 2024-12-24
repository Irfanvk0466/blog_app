<div class="header_section">
   <div class="header_main">
      <div class="mobile_menu">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile">
               <a href="{{ url('/') }}">
                  <img src="{{ asset('BlogHome/images/logo.png') }}" alt="Logo">
               </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('home.blog') }}">Blog</a></li>
               </ul>
               <div class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link custom-nav-link" href="{{ route('auth.register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                  <li class="nav-item"><a class="nav-link custom-nav-link" href="{{ route('auth.login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
               </div>
            </div>
         </nav>
      </div>
      <div class="container-fluid">
         <li class="nav-item"><a class="nav-link custom-nav-link" href="{{ route('auth.login') }}" style="float: inline-end;"><i class="fas fa-sign-in-alt"></i> Login</a></li>
         <li class="nav-item"><a class="nav-link custom-nav-link" href="{{ route('auth.register') }}" style="float: inline-end;"><i class="fas fa-user-plus"></i> Register</a></li>
         <div class="logo">
         </div>
         <div class="menu_main">
            <ul>
               <li class="active"><a href="{{ url('/') }}">Home</a></li>
               <li><a href="{{ route('home.blog') }}">Blog</a></li>
            </ul>
         </div>
      </div>
   </div>

   <div class="banner_section layout_padding">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="banner_taital">Blogs App</h1>
                  <p class="banner_text">
                     There are many variations of passages of Lorem Ipsum available, 
                     but the majority have suffered. 
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
