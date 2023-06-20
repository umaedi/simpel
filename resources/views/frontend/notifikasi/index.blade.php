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
                   
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
@push('js')
    <script type="text/javascript">
        let data = JSON.parse(localStorage.getItem('data_user'));
        console.log(data);
        $(document).ready(function() {
            let el = document.getElementById('notifikasi');
            el.innerHTML =`
                <h3>BERHASIL TERKIRIM</h3>
                    <P>Terimakasih atas ${data.jenis_aduan} nya, kami akan segera membalas/menjawab ${data.jenis_aduan} Anda</P>
                <a href="/" class="w-btn">Kembali</a>
            `;
        });
    </script>
@endpush