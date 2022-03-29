@extends('layouts.app')
@section('content')
<section id="speakers">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Tên danh mục</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid" />
                        <div class="details">
                            <h3><a href="event-details.html">DỰ ÁN TÔ MÀU GIẤC MƠ</a></h3>
                            <p>7:00 - 27/05/2021, Hội trường Trịnh Công Sơn, CS3</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="{{ url('/view-event') }}">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid" />
                        <div class="details">
                            <h3>
                                <a class="text-overflow" href="event-details.html">VÒNG CHUNG KẾT CUỘC THI ONLINE VỀ TÌM HIỂU Ô TÔ VÀ
                                    ATGT</a>
                            </h3>
                            <p>7:00 - 18/10/2021, Tổ chức online</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="#buy-tickets">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid" />
                        <div class="details">
                            <h3>
                                <a href="event-details.html">LỄ KÝ KẾT MOU VỚI CÔNG TY CORETECH</a>
                            </h3>
                            <p>7:00 - 18/10/2021, Tổ chức online</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="#buy-tickets">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid" />
                        <div class="details">
                            <h3>
                                <a href="event-details.html">LỄ KHAI GIẢNG - ĐÊM NHẠC HỘI CHÀO ĐÓN KHÓA 26</a>
                            </h3>
                            <p>16:30 - 11/11/2020, Sân vận động Hoa Lư</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="#buy-tickets">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                        <img src="/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid" />
                        <div class="details">
                            <h3>
                                <a href="event-details.html">SINH HOẠT CÔNG DÂN CHUYÊN ĐỀ TẬP TRUNG - K23-NHÓM 2 VÀ
                                    K24-KCT</a>
                            </h3>
                            <p>16:30 - 07/09/2020, Hội trường Trịnh Công Sơn, CS3</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="#buy-tickets">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                        <img src="/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid" />
                        <div class="details">
                            <h3>
                                <a href="event-details.html">TỔ CHỨC SHCD CẤP KHOA CHO SV KHÓA 23, 24, 25 KHOA QTKD</a>
                            </h3>
                            <p>16:30 - 07/09/2020, Hội trường Trịnh Công Sơn, CS3</p>
                            <div class="social">
                                <a class="buy-tickets scrollto" href="#buy-tickets">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection