@extends('layouts.app')
@section('content')
<link href="/css/profile.css" rel="stylesheet" type="text/css" />
<link href="/css/profile2.css" rel="stylesheet" type="text/css" />
<script src="/js/profile.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<section id="buy-tickets" class="section-with-bg">

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div id="content" class="content content-full-width">
               <!-- begin profile -->
               <div class="profile">
                  <div class="profile-header">
                     <!-- BEGIN profile-header-cover -->
                     <div class="profile-header-cover"></div>
                     <!-- END profile-header-cover -->
                     <!-- BEGIN profile-header-content -->
                     <div class="profile-header-content">
                        <!-- BEGIN profile-header-img -->
                        <div class="profile-header-img">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        </div>
                        <!-- END profile-header-img -->
                        <!-- BEGIN profile-header-info -->
                        <div class="profile-header-info">
                           <h4 class="m-t-10 m-b-5">{{ Auth::user()->name }}</h4>
                           <p class="m-b-6">Email: {{ Auth::user()->email }}</p>
                           <p class="m-b-10">Ngày tham gia: {{ Auth::user()->created_at}}</p>
                           <a href="#" class="btn btn-sm btn-danger mb-2">Sửa thông tin</a>
                        </div>
                        <!-- END profile-header-info -->
                     </div>
                     <!-- END profile-header-content -->
                     <!-- BEGIN profile-header-tab -->

                     <!-- END profile-header-tab -->
                  </div>
               </div>
               <!-- end profile -->
               <!-- begin profile-content -->

               <!-- end profile-content -->
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="tabs-to-dropdown">
         <div class="nav-wrapper d-flex align-items-center justify-content-between">
            <ul class="nav nav-pills d-none d-md-flex" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="true">SỰ KIỆN ĐĂNG KÝ</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-product" role="tab" aria-controls="pills-product" aria-selected="false">VÉ MỜI SỰ KIỆN</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false">TẠO SỰ KIỆN MỚI</a>
               </li>
            </ul>
         </div>

         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
               <div class="profile-content">
                  <!-- begin tab-content -->
                  <div class="tab-content p-0">
                     <!-- begin #profile-post tab -->
                     <div class="tab-pane fade active show" id="profile-post">
                        <!-- begin timeline -->
                        <ul class="timeline">
                           ở đây load danh sách các sự kiện mà user đã tạo ra.
                           <li>
                              <!-- begin timeline-time -->
                              <div class="timeline-time">
                                 <span class="date">today</span>
                                 <span class="time">04:20</span>
                              </div>
                              <!-- end timeline-time -->
                              <!-- begin timeline-icon -->
                              <div class="timeline-icon">
                                 <a href="javascript:;">&nbsp;</a>
                              </div>
                              <!-- end timeline-icon -->
                              <!-- begin timeline-body -->
                              <div class="timeline-body">
                                 <div class="timeline-header">
                                    <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
                                    <span class="username"><a href="javascript:;">{{ Auth::user()->name }}</a> <small></small></span>
                                 </div>
                                 <div class="timeline-content">
                                    <p>
                                       An event here
                                    </p>
                                 </div>
                                 <div class="timeline-likes">
                                    <div class="stats">
                                       <span class="fa-stack fa-fw stats-icon">
                                          <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                          <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                       </span>

                                       <span class="stats-total">4.3k</span>
                                    </div>
                                 </div>

                              </div>
                              <!-- end timeline-body -->
                           </li>
                           <li>
                              <!-- begin timeline-time -->
                              <div class="timeline-time">
                                 <span class="date">yesterday</span>
                                 <span class="time">20:17</span>
                              </div>
                              <!-- end timeline-time -->
                              <!-- begin timeline-icon -->
                              <div class="timeline-icon">
                                 <a href="javascript:;">&nbsp;</a>
                              </div>
                              <!-- end timeline-icon -->
                              <!-- begin timeline-body -->
                              <div class="timeline-body">
                                 <div class="timeline-header">
                                    <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
                                    <span class="username">{{ Auth::user()->name }}</span>
                                 </div>
                                 <div class="timeline-content">
                                    <p>An event here</p>
                                 </div>

                              </div>
                              <!-- end timeline-body -->
                           </li>
                           <li>
                              <!-- begin timeline-time -->
                              <div class="timeline-time">
                                 <span class="date">24 February 2014</span>
                                 <span class="time">08:17</span>
                              </div>
                              <!-- end timeline-time -->
                              <!-- begin timeline-icon -->
                              <div class="timeline-icon">
                                 <a href="javascript:;">&nbsp;</a>
                              </div>
                              <!-- end timeline-icon -->
                              <!-- begin timeline-body -->
                              <div class="timeline-body">
                                 <div class="timeline-header">
                                    <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
                                    <span class="username">{{ Auth::user()->name }}</span>

                                 </div>
                                 <div class="timeline-content">
                                    <p class="lead">
                                       An event here
                                    </p>
                                 </div>

                              </div>
                              <!-- end timeline-body -->
                           </li>
                           <li>
                              <!-- begin timeline-time -->
                              <div class="timeline-time">
                                 <span class="date">10 January 2022</span>
                                 <span class="time">20:43</span>
                              </div>
                              <!-- end timeline-time -->
                              <!-- begin timeline-icon -->
                              <div class="timeline-icon">
                                 <a href="javascript:;">&nbsp;</a>
                              </div>
                              <!-- end timeline-icon -->
                              <!-- begin timeline-body -->
                              <div class="timeline-body">
                                 <div class="timeline-header">
                                    <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
                                    <span class="username">{{ Auth::user()->name }}</span>

                                 </div>
                                 <div class="timeline-content">
                                    <h4 class="template-title">
                                       <i class="fa fa-map-marker text-danger fa-fw"></i>
                                       795 Folsom Ave, Suite 600 San Francisco, CA 94107
                                    </h4>
                                    <p>An event here</p>
                                    <p class="m-t-20">
                                       <img src="../assets/img/gallery/gallery-5.jpg" alt="">
                                    </p>
                                 </div>

                              </div>
                              <!-- end timeline-body -->
                           </li>
                           <li>
                              <!-- begin timeline-icon -->
                              <div class="timeline-icon">
                                 <a href="javascript:;">&nbsp;</a>
                              </div>
                              <!-- end timeline-icon -->
                              <!-- begin timeline-body -->
                              <div class="timeline-body">
                                 Loading...
                              </div>
                              <!-- begin timeline-body -->
                           </li>
                        </ul>
                        <!-- end timeline -->
                     </div>
                     <!-- end #profile-post tab -->
                  </div>
                  <!-- end tab-content -->
               </div>
            </div>
            <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab">
               <div class="container-fluid">
                  <h2 class="mb-3 font-weight-bold">Danh sách vé mời</h2>
                  <p>Hiển thị dạng table: Các giá trị của cột: STT, Tên sự kiện, Ngày nhận vé, Vé (Là mã QR nhận được lúc ấn tham gia sự kiện)</p>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
               <div class="container-fluid">
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Tiêu đề sự kiện</span>
                     </div>
                     <input type="text" class="form-control" aria-describedby="basic-addon1">
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-7 offset-3 mt-4">
                           <div class="card-body">
                              <form method="post" action="" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                    <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  <a class="btn btn-danger">Tạo</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $('.ckeditor').ckeditor();
      });
   </script>
</section>
@endsection