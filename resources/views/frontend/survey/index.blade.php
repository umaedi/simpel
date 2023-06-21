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
                  <h3>Survey</h3>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="portfolio__area pb-90 pt-50">
    <div class="container">
        <div class="d-flex align-items-center p-3 my-1 text-white dark-blue-bg rounded shadow-sm" >
            <div class="lh-1">
              <h1 class="h6 mb-0 text-white lh-1">{{ __('Survey Kepuasan Masyarakat') }}</h1>
            </div>
        </div>
        <form id="formAjax">
            <div class="my-3 p-3 rounded shadow-sm">
              <div class="form-group mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group mb-3">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" class="form-control" id="ttl" name="tgl_lahir">
              </div>
              <div class="form-group mb-3">
                <label for="jenis_kelamin">Jenis Kelaim</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="">Pilih</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Permepuan</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="pendidikan">Pendidikan</label>
                <select class="form-control" id="pendidikan" name="pendidikan">
                  <option value="">Pilih</option>
                  <option value="1">SD</option>
                  <option value="2">SMP</option>
                  <option value="3">SMA/SMK/Sederajat</option>
                  <option value="4">Diploma 3</option>
                  <option value="5">Sarjana</option>
                  <option value="6">Master</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="opd_id">Ditujukan Untuk Dinas?</label>
                <select class="form-control" id="opd_id" name="opd_id">
                  <option value="">Pilih</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
              </div>
            </div>
            <div class="faq__wrapper my-3 p-3 rounded shadow-sm">
                <div class="accordion" id="accordionExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan nya?
                       </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_1" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_1" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_1" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_1" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_1" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading2">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Bagaimana pendapat saudara tentang kewajaran biaya\tarif dalam pelayanan ?	
                       </button>
                     </h2>
                     <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_2" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_2" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_2" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_2" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_2" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading3">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan denga hasil yang diberikan?	
                       </button>
                     </h2>
                     <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_3" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_3" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_3" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_3" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_3" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                    </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading4">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Bagaimana pendapat saudara tentang kompetensi\ kemampuan petugas dalam memberikan pelayanan?	
                       </button>
                     </h2>
                     <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_4" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_4" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_4" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_4" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_4" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading5">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Bagaimana pendapat saudara tentang kemudahan prosedur pelayanan pada unit ini ?	
                       </button>
                     </h2>
                     <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_5" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_5" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_5" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_5" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_5" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading6">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan ?
                       </button>
                     </h2>
                     <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_6" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_6" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_6" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_6" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_6" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading7">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan?
                       </button>
                     </h2>
                     <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_7" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_7" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_7" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_7" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_7" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading8">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?	
                       </button>
                     </h2>
                     <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_8" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_8" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_8" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_8" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_8" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="heading9">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?
                       </button>
                     </h2>
                     <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_9" id="surv1" value="10" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_9" id="surv2" value="7">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_9" id="surv3" value="6">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_9" id="surv4" value="5">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="indikator_9" id="surv5" value="3">
                            <label class="form-check-label" for="surv5">
                                E (Sangat Buruk)
                            </label>
                          </div>
                       </div>
                     </div>
                   </div>
                </div>
                @include('components.btn._loading_btn')
                <button id="btn_submit" type="submit" class="w-btn mt-3">KIIRM</button>
            </div>
          </form>
        </div>
    </div>
 </section>
@endsection
@push('js')
    <script type="text/javascript">
    $(document).ready(async function getopd() {
        var param = {
            method: 'GET',
            url: '{{ url()->current() }}',
        }

        await transAjax(param).then(function(res) {
            res.data.forEach(el => {
              $('#opd_id').append(`
                  <option value="${el.id}">${el.nama_opd}</option>      
              `);
            });
        });
    });

      $('#formAjax').submit(async function store(e) {
          e.preventDefault();

          var form 	= $(this)[0]; 
          var data 	= new FormData(form);

          var param = {
              method: 'POST',
              url: '/user/survey/store',
              data: data,
              processData: false,
              contentType: false,
              cache: false,
          }

              loadingsubmit(true);
              await transAjax(param).then((res) => {
                  loadingsubmit(false);
                  swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                      window.location.href = '/user/notofikasi/sukses';
                  });
              }).catch((err) => {
                  loadingsubmit(false);
                  swal({text: err.message, icon: 'error', timer: 3000,})
              });

          function loadingsubmit(state){
              if(state) {
                  $('#btn_loading').removeClass('d-none');
                  $('#btn_submit').addClass('d-none');
              }else {
                  $('#btn_loading').addClass('d-none');
                  $('#btn_submit').removeClass('d-none');
              }
          }  
      });
    </script>
@endpush