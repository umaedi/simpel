<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ $title  ?? 'Sistem Manajemen Pelayan Publik Elektronik'}}</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/preloader.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/backToTop.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/elegantFont.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      
      <!-- Add your site or application content here -->  

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div id="header-sticky" class="header__area header__transparent header__padding">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                     <div class="logo">
                        <a href="index.html">
                           <img src="{{ asset('frontend') }}/img/logo/logo-tuba.png" alt="logo" width="40">
                        </a>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a href="/">HOME</a></li>
                              <li><a href="#">DATA STATISTIK</a></li>
                              <li><a href="{{ route('layanan.pengaduan') }}">SARAN DAN ADUAN</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                     <div class="header__right text-end d-flex align-items-center justify-content-end">
                        <div class="header__right-btn d-none d-md-flex align-items-center">
                           <a href="sign-up.html" class="w-btn ml-45">MASUK</a>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                           <div class="sidebar-toggle-btn" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="{{ asset('frontend') }}/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu"></div>
               <div class="sidebar__info mt-350">
                  <a href="#" class="w-btn w-btn-4 d-block mb-15 mt-15">login</a>
                  <a href="#" class="w-btn d-block">sign up</a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>
        @yield('content')
      </main>

      <!-- footer area start -->
      <footer class="footer__area grey-bg-3 p-relative">
        <div class="container">
           <div class="footer__copyright">
              <div class="row">
                 <div class="col-xxl-12 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="footer__copyright-wrapper text-center">
                       <p>Copyright © 2023. All Rights Reserved.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     
  </footer>
      <!-- footer area end -->

      <!-- JS here -->
      <script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.1.min.js"></script>
      <script src="{{ asset('frontend') }}/js/vendor/waypoints.min.js"></script>
      <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('frontend') }}/js/jquery.meanmenu.js"></script>
      <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
      <script src="{{ asset('frontend') }}/js/jquery.fancybox.min.js"></script>
      <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
      <script src="{{ asset('frontend') }}/js/parallax.min.js"></script>
      <script src="{{ asset('frontend') }}/js/backToTop.js"></script>
      <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
      <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
      <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
      <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
      <script src="{{ asset('frontend') }}/js/main.js"></script>
      <script src="{{ asset('frontend') }}/js/sweetalert.min.js"></script>

      <script type="text/javascript">
      var token =  $('meta[name="token"]').attr('content')
        async function transAjax(data) {
        html = null;
        data.headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': `Bearer ${token}`,
        }
        await $.ajax(data).done(function(res) {
            html = res;
        })
            .fail(function() {
                return false;
            })
        return html
        }
      </script>
      @stack('js')
   </body>

</html>

