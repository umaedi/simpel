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
            <div class="faq__wrapper my-3 p-3">
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
                            <input class="form-check-input" type="radio" name="exampleRadios" id="surv1" value="option1" checked>
                            <label class="form-check-label" for="surv1">
                                A (Sangat Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="surv2" value="option2">
                            <label class="form-check-label" for="surv2">
                                B (Baik)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="surv3" value="option2">
                            <label class="form-check-label" for="surv3">
                                C (Cukup)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="surv4" value="option2">
                            <label class="form-check-label" for="surv4">
                                D (Buruk)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="surv5" value="option2">
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
                         <p>Looking to start an online store and you're not sure where to begin? I'll guide will help you to navigate Would you like to boost your Twitter profile.</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
@push('js')
    <script type="text/javascript">
    var name = ''
     let data = JSON.parse(localStorage.getItem('data_user'));

     if(data !== null) {
        let name = document.getElementById('name').value = data.name;
        let nik = document.getElementById('nik').value = data.nik;
        let email = document.getElementById('email').value = data.email;
        let no_tlp = document.getElementById('no_tlp').value = data.no_tlp;
     }

      $('#pengaduanStore').submit(async function store(e) {
          e.preventDefault();

          var form 	= $(this)[0]; 
          var data 	= new FormData(form);

          var param = {
              method: 'POST',
              url: '/user/layanan/pengaduan/store',
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

          //localStorage
          let name = document.getElementById('name');
          let nik = document.getElementById('nik');
          let email = document.getElementById('email');
          let no_tlp = document.getElementById('no_tlp');
          let jenis_aduan = document.getElementById('jenis_aduan');

          let data_user = {name: name.value, nik: nik.value, email: email.value, no_tlp: no_tlp.value, jenis_aduan: jenis_aduan.options[jenis_aduan.selectedIndex].text};

          localStorage.setItem('data_user', JSON.stringify(data_user));
      });
    </script>
@endpush