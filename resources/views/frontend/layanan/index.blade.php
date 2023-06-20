@extends('frontend.layouts.app')
@section('content')
<section class="page__title-area page__title-height d-flex align-items-center fix p-relative z-index-1" data-background="{{ asset('frontend') }}/img/page-title/page-title.jpg">
    <div class="page__title-shape">
       <img class="page-title-dot-4" src="{{ asset('frontend') }}/img/page-title/dot-4.png" alt="">
       <img class="page-title-dot" src="{{ asset('frontend') }}/img/page-title/dot.png" alt="">
       <img class="page-title-dot-2" src="{{ asset('frontend') }}/img/page-title/dot-2.png" alt="">
       <img class="page-title-dot-3" src="{{ asset('frontend') }}/img/page-title/dot-3.png" alt="">
       <img class="page-title-plus" src="{{ asset('frontend') }}/img/page-title/plus.png" alt="">
       <img class="page-title-triangle" src="{{ asset('frontend') }}/img/page-title/triangle.png" alt="">
    </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-wrapper text-center">
                  <h3>Layanan Kami</h3>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="services__area p-relative pt-100 pb-130">
    <div class="services__shape">
       <img class="services-circle-1" src="{{ asset('frontend') }}/img/icon/services/home-1/circle-1.png" alt="">
       <img class="services-circle-2" src="{{ asset('frontend') }}/img/icon/services/home-1/circle-2.png" alt="">
       <img class="services-dot" src="{{ asset('frontend') }}/img/icon/services/home-1/dot.png" alt="">
       <img class="services-triangle" src="{{ asset('frontend') }}/img/icon/services/home-1/triangle.png" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 col-md-10 offset-md-1 p-0">
             <div class="section__title-wrapper text-center mb-75 wow fadeInUp" data-wow-delay=".3s">
                <h2 class="section__title">Silakan pilih salah satu layanan yang Anda butuhkan dibawah ini.</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-2">
             <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".3s">
                <a href="">
                <div class="services__item white-bg text-center transition-3 ">
                   <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                      <img src="{{ asset('frontend') }}/img/icon/services/home-1/services-1.png" alt="">
                   </div>
                   <div class="services__content">
                      <h3 class="services__title"><a href="services-details.html">Antrian</a></h3>
                      <p>Tiket antrian online.</p>
                   </div>
                </div>
                </a>
             </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-2">
             <div class="services__inner hover__active active mb-30 wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ route('layanan.pengaduan') }}">
                <div class="services__item white-bg mb-30 text-center transition-3" >
                   <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                      <img src="{{ asset('frontend') }}/img/icon/services/home-1/services-2.png" alt="">
                   </div>
                   <div class="services__content">
                      <h3 class="services__title">Pengaduan</h3>
                      <p>Saran dan aduan masyarakat.</p>
                   </div>
                </div>
                </a>
             </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
             <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".7s">
                <a href="{{ route('survey.index') }}">
                <div class="services__item white-bg text-center transition-3">
                   <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                      <img src="{{ asset('frontend') }}/img/icon/services/home-1/services-3.png" alt="">
                   </div>
                   <div class="services__content">
                      <h3 class="services__title">Survey</h3>
                      <p>Survey kepuasan masyarakat.</p>
                   </div>
                </div>
                </a>
             </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
             <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".9s">
                <a href="">
                <div class="services__item white-bg text-center transition-3">
                   <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                      <img src="{{ asset('frontend') }}/img/icon/services/home-1/services-4.png" alt="">
                   </div>
                   <div class="services__content">
                      <h3 class="services__title"><a href="services-details.html">Data</a></h3>
                      <p>Data statistik.</p>
                   </div>
                </div>
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection