@extends('layouts.app')
@section('content')
<link href="/css/profile.css" rel="stylesheet" type="text/css" />
<link href="/css/profile2.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tiny.cloud/1/dt9si6ddsgdcwn8vtm72l2gkcqfs55yxcshsxmkf1v6xrp49/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="/js/profile.js"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
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
        <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-product" role="tab" aria-controls="pills-product" aria-selected="false">SỰ KIỆN ĐÃ THAM GIA</a>
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
                                 <div class="stats-right">
                                    <span class="stats-text">259 Shares</span>
                                    <span class="stats-text">21 Comments</span>
                                 </div>
                                 <div class="stats">
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                    </span>
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="stats-total">4.3k</span>
                                 </div>
                              </div>
                              <div class="timeline-footer">
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                              </div>
                              <div class="timeline-comment-box">
                                 <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"></div>
                                 <div class="input">
                                    <form action="">
                                       <div class="input-group">
                                          <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                          <span class="input-group-btn p-l-10">
                                          <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                          </span>
                                       </div>
                                    </form>
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
                              <div class="timeline-footer">
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
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
                              <div class="timeline-footer">
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
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
                              <div class="timeline-footer">
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
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
        <h2 class="mb-3 font-weight-bold">Product</h2>
        <p>Sed auctor urna sit amet eros mattis interdum. Integer imperdiet ante in quam lacinia, a laoreet risus imperdiet. Ut a blandit elit, vitae volutpat nunc. Nam posuere urna sagittis lectus eleifend viverra. Quisque mauris nunc, viverra vitae sodales non, auctor in diam. Sed dignissim pulvinar sapien sed fermentum. Praesent interdum turpis ut neque tristique ornare. Nam dictum est sed sem elementum rutrum. Nam a mollis turpis.</p>
        <p>Proin odio nisi, aliquet ac ipsum quis, auctor semper leo. Curabitur vitae justo vel augue varius cursus non quis est. Nunc vulputate nunc nibh, sed tempus erat tincidunt eget. Duis a lacus at nulla porttitor tincidunt. Vestibulum euismod elementum mi ut tincidunt. Suspendisse tempus, mi et imperdiet maximus, est turpis placerat massa, at venenatis sem elit ut ex. Donec non aliquam odio. Curabitur ut leo vitae magna lobortis accumsan. Phasellus viverra eu leo non rhoncus.</p>
        <p>Pellentesque rutrum sit amet nunc sit amet faucibus. Ut id arcu tempus, varius erat et, ornare libero. In quis felis nunc. Aliquam euismod lacus a eros ornare, ut aliquam sem mattis. Cras non varius dui, quis commodo ante. Maecenas gravida est non nulla malesuada egestas.</p>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
      <div class="container-fluid">
         <h2>Tiêu đề bài viết</h2>
         <div type="input"></div>
      <textarea>
     
      </textarea>
      <a class="btn btn-danger" >Tạo</a>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection