<header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-left">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
           <img src="assets/img/logo-mubs.png" alt="mubs logo">
          {{-- <h1 class="sitename">Impact</h1> --}}
          <span>.</span>
        </a>
{{-- imports the navigation bar --}}
       {{-- @extends('Backend.layouts.nav') --}}
       <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Board</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Administration</a></li>
              <li class="dropdown"><a href="#"><span>MUBS Electoral Commmision</span> </a></li></ul>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{route('vote')}}" class="active">Vote<br></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      </div>

    </div>

  </header>
