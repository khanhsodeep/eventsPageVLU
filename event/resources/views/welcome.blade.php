<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sự kiện | Eventbox Văn Lang</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

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
  <!-- <link href="/css/style.css" rel="stylesheet" type="text/css" /> -->
</head>

<!-- <body>
    
</body> -->

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">
      <div id="logo" class="me-auto m-lg-auto">
        <a href="index.html" class="scrollto"><img src="/img/logo.png" alt="" title="" /></a>
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
            <a href="#"><span>Hội nghị - Sự kiện</span>
              <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('client.category', ['id' => 1])}}">Học Thuật</a></li>
              <li><a href="{{route('client.category', ['id' => 2])}}">Văn Hóa</a></li>
              <li><a href="{{route('client.category', ['id' => 3])}}">Thể Thao</a></li>
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
        <a class="buy-tickets scrollto mx-" href="{{ route('login') }}">Đăng nhập</a>


        @if (Route::has('register'))
        <a class="buy-tickets scrollto mx-" href="{{ route('register') }}">Đăng ký</a>
        @endif
        @endauth
        @endif
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">
        TRANG SỰ KIỆN CHÍNH THỨC<br /><span>
          CỦA TRƯỜNG ĐẠI HỌC VĂN LANG</span>
      </h1>
      <a href="#about" class="about-btn scrollto">ĐĂNG KÝ SỰ KIỆN MỚI</a>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= Events Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>sự kiện mới nhất</h2>
          <p>Ở đây có các sự kiện mới vừa được tạo!</p>
        </div>

        <div class="row">
          @foreach($event_hot as $event)
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('file/' . $event->image) }}" alt="Speaker 1" class="img-fluid" />
              <div class="details">
                <h3><a href="#">{{$event->name_event}}</a></h3>
                <p>{{$event->time}}, {{$event->address}}</p>
                <div class="social">
                  <a class="buy-tickets scrollto" href="{{ route('user.event.detail', ['id' => $event->id]) }}">Tham gia ngay</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- End Speakers Section -->

    <!-- ======= likes Section ======= -->
    <section id="likes" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sự kiện nổi bật</h2>
          <p>Các sự kiện được đăng ký nhiều nhất nhất trong 2 tuần qua</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          @foreach($event_favourite as $v)
          <div class="col-lg-4 col-md-6">
            <div class="like">
              <div class="like-img">
                <img src="{{ asset('file/' . $v->image) }}" alt="" class="img-fluid" />
              </div>
              <h3>
                <a href="#">{{$v->name_event}}</a>
              </h3>
              <div class="hearts">
                <i class="bi bi-heart-fill"> {{$v->member}} lượt tham gia</i>
              </div>
            </div>
          </div>
          @endforeach

          <!-- <div class="col-lg-4 col-md-6">
            <div class="like">
              <div class="like-img">
                <img src="/img/likes/2.jpg" alt="" class="img-fluid" />
              </div>
              <h3>
                <a href="#">TẬP HUẤN KỸ THUẬT VIÊN CHƯƠNG TRÌNH BẢO DƯỠNG XE MÁY</a>
              </h3>
              <div class="hearts">
                <i class="bi bi-heart-fill"> 1232 lượt yêu thích</i>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="like">
              <div class="like-img">
                <img src="/img/likes/3.jpg" alt="" class="img-fluid" />
              </div>
              <h3><a href="#">QUAY MV COVER " CHA MẸ KHÔNG CHO"</a></h3>
              <div class="hearts">
                <i class="bi bi-heart-fill"> 555 lượt yêu thích</i>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End likes Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <div class="container" data-aos="fade-up">
        <div class="section-header mb-0">
          <h2>khoảnh khắc</h2>
          <p>Những khoảnh khắc đẹp được lưu lại trong tháng này</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
          <div class="swiper-slide">
            <a href="/img/gallery/1.jpg" class="gallery-lightbox"><img src="/img/gallery/1.jpg" class="img-fluid" alt="" /></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Câu hỏi thường gặp</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">
            <ul class="faq-list">
              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                  Khi tôi đăng ký tổ chức một sự kiện mới thì trong bao lâu
                  được duyệt? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sự kiện đăng ký mới sẽ được kiểm duyệt trong vòng 48 giờ!
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                  Khi tham gia sự kiện có được điểm rèn luyện không?
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Tùy thuộc vào mỗi sự kiện khác nhau, có thể có hoặc không
                    nhận được điểm rèn luyện!
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                  Tôi có thể đăng ký tổ chức tối đa bao nhiêu sự kiện cùng
                  lúc? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Mỗi sinh viên chỉ có thể đăng ký tối đa 1 sự kiện tại 1
                    thời điểm. Trường hợp muốn đăng ký thêm sự kiện, vui lòng
                    đợi đến khi sự kiện đã đăng ký gần nhất kết thúc.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End  F.A.Q Section -->
    <!-- Login form -->


    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>NHẬN THÔNG TIN SỰ KIỆN</h2>
          <p>
            Để lại email dưới đây để kịp thời nhận được thông báo khi có sự
            kiện mới được tổ chức
          </p>
        </div>

        <form method="POST" action="#">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="text" class="form-control" placeholder="Nhập email của bạn" />
              <button type="submit" class="ms-2">Gửi</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Liên hệ</h2>
            <p>Liên hệ với phòng sự kiện nếu bạn có thắc mắc</p>
          </div>

          <div class="row contact-info">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="bi bi-geo-alt"></i>
                <h3>Địa chỉ</h3>
                <address>
                  69/68 Đặng Thùy Trâm, phường 13, Bình Thạnh, thành phố Hồ Chí
                  Minh
                </address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="bi bi-phone"></i>
                <h3>Điện thoại</h3>
                <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3110)</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>
                  <a href="mailto:sukien.vanlanguni.edu.vn"
                    >sukien.vanlanguni.edu.vn</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="form">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="row">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Họ và tên"
                    required
                  />
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Email"
                    required
                  />
                </div>
              </div>
              <div class="form-group mt-3">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Chủ đề"
                  required
                />
              </div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  placeholder="Nội dung cần hỗ trợ"
                  required
                ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Thông tin của bạn đã được gửi. Vui lòng chờ phản hồi qua
                  email!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Gửi hỗ trợ</button>
              </div>
            </form>
          </div>
        </div>
      </section> -->
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
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
                <p><a href="tel:+0287199218">028 7109 9212 (Ext: 3111)</a></p>
              </li>
              <li>
                <p><a href="mailto:sukien.vanlanguni.edu.vn">sukien.vanlanguni.edu.vn</a></p>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>THEO DÕI CHÚNG TÔI</h4>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-tiktok"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>ĐỊA CHỈ</h4>
            <p>Trụ sở: 45 Nguyễn Khắc Nhu, P.Cô Giang, Q.1, Hồ Chí Minh.</p>
            <p>
              Cơ sở 2: 233A Phan Văn Trị, P.11, Q.Bình Thạnh, Hồ Chí Minh.
            </p>
            <p>
              Cơ sơ 3: 80/68 Dương Quảng Hàm, P.5, Q.Gò Vấp, Hồ Chí Minh.
              69/68 Đặng Thùy Trâm, P.13, Q.Bình Thạnh, Hồ Chí Minh.
            </p>


          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
</body>

</html>