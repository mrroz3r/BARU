<!doctype html>
<html lang="en">
  <head>
    <title>Papi Kost</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">
    

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/user-style.css') }}">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand"><img src="{{ asset('img/logo.png')}}" style="width: 80px;">PapiKos</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/penginap/all')}}">Halaman Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/penginap/kost') }}">Cari Kos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/penginap/saran')}}">Saran</a>
              </li>

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset ('/images/person_2.jpg')}}" style="width: 30px;">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ url('/user/penginap/profile')}}">Edit Profile</a>
                  <a class="dropdown-item" href="\3">Logout</a>
              </div>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ url('images/big_image_1.jpg')}});">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
               <h1>Mau Cari Kos Kosan?</h1>
              <p>Dapatkan Info Kost Murah, Kost Harian, Kost Bebas dan Info Kosan Lainnya di Papikos!</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section" style="background: linear-gradient(to left, #ff3300 0%, #ff9966 100%);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            @yield('content')
</div>
Copy Right &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Application made with Papi Kos <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Capstone</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

     <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }} "></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>