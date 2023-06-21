@extends('frontend.layouts.app')
@section('content')
<section class="services__area pt-110 pb-45">
    <div class="container">
       <div class="row">
          <div class="wow fadeInUp" data-wow-delay=".3s">
             <div class="services__item-4 white-bg mb-30">
                <div class="services__thumb-4 text-center d-flex align-items-end justify-content-center">
                   <img src="{{ asset('frontend') }}/img/services/success.svg" alt="">
                </div>
                <div class="services__content-4 text-center" id="notifikasi">
                    <h3>BERHASIL TERKIRIM</h3>
                    <P>Pesan yang Anda sampaikan sudah terkirim dan kami terima, kami akan segera menanggapi pesan Anda</P>
                    <a href="/" class="w-btn">Kembali</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection