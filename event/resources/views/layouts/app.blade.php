
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet" />
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/favicon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header id="header" class="d-flex align-items-center">
      <div class="container-fluid container-xxl d-flex align-items-center">
        <div id="logo" class="me-auto m-lg-auto">
          <a href="index.html" class="scrollto"
            ><img src="/img/logo.png" alt="" title=""
          /></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li>
              <a class="nav-link scrollto active" href="#hero">Trang chủ</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#speakers">Sự kiện nổi bật</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#likes">Sự kiện yêu thích</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="#gallery">Khoảnh khắc</a>
            </li>
            <li class="dropdown">
              <a href="#"
                ><span>Hội nghị - Sự kiện</span>
                <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">Học Thuật</a></li>
                <li><a href="#">Văn Hóa</a></li>
                <li><a href="#">Thể Thao</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a class="buy-tickets scrollto mx-"   href="{{ route('login') }}">Đăng nhập</a>
            

            @if (Route::has('register'))
            <a class="buy-tickets scrollto mx-" href="{{ route('register') }}">Đăng ký</a>
            @endif
            @endauth
        @endif
    </div>
    </div>
    </header>
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> -->
    <!-- Vendor JS Files -->
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
    <!-- Fontawesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <img src="/img/logo.png" alt="TheEvenet" />
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Liên hệ</h4>
              <ul>
                <li>
                  <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3110)</a></p>
                </li>
                <li>
                  <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3110)</a></p>
                </li>
                <li>
                  <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3110)</a></p>
                </li>
                <li>
                  <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3110)</a></p>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="#">Home</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>KẾT NỐI</h4>
              <p>Trụ sở: 45 Nguyễn Khắc Nhu, P.Cô Giang, Q.1, Hồ Chí Minh.</p>
              <p>
                Cơ sở 2: 233A Phan Văn Trị, P.11, Q.Bình Thạnh, Hồ Chí Minh.
              </p>
              <p>
                Cơ sơ 3: 80/68 Dương Quảng Hàm, P.5, Q.Gò Vấp, Hồ Chí Minh.
                69/68 Đặng Thùy Trâm, P.13, Q.Bình Thạnh, Hồ Chí Minh.
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="#" class="google-plus"><i class="bi bi-tiktok"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>


</html>