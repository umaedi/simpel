@extends('frontend.layouts.app')
@section('content')
<section class="hero__area hero__height p-relative d-flex align-items-center" data-background="{{ asset('frontend') }}/img/hero/home-1/hero-bg.jpg">
    <div class="hero__shape">
       <img class="hero-circle-1" src="{{ asset('frontend') }}/img/icon/hero/home-1/circle-1.png" alt="">
       <img class="hero-circle-2" src="{{ asset('frontend') }}/img/icon/hero/home-1/circle-2.png" alt="">
       <img class="hero-triangle-1" src="{{ asset('frontend') }}/img/icon/hero/home-1/triangle-1.png" alt="">
       <img class="hero-triangle-2" src="{{ asset('frontend') }}/img/icon/hero/home-1/triangle-2.png" alt="">
    </div>
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xxl-7 col-xl-6 col-lg-6">
             <div class="hero__content pr-80">
                <h2 class="hero__title wow fadeInUp" data-wow-delay=".3s">Sistem Manajemen Pelayan Publik Elektronik</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Sebuah inovasi yang dirancang untuk mempermudah masyarakat Tulang Bawang mendapatkan pelayanan di Mall Pelayanan Publik.</p>
             </div>
          </div>
          <div class="col-xxl-5 col-xl-5 col-lg-6">
            <div class="hero__thumb-4-wrapper">
               <div class="hero__thumb-4 p-relative">
                  <img class="girl" src="{{ asset('frontend') }}/img/hero/home-4/girl.png" alt="">
                  <img class="flower" src="{{ asset('frontend') }}/img/hero/home-4/flower.png" alt="">
               </div>
            </div>
         </div>
         <div class="hero__btn-4 text-center">
            <a href="{{ route('layanan') }}" class="w-btn-round mr-25 wow fadeInUp" data-wow-delay=".9s">Buka halaman utama</a>
         </div>
       </div>
    </div>
 </section>
 <!-- hero area end -->
@endsection