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
                  <h3>Layanan Pengaduan</h3>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="portfolio__area pb-90 pt-50">
    <div class="container">
        <div class="d-flex align-items-center p-3 my-1 text-white dark-blue-bg rounded shadow-sm" >
            <div class="lh-1">
              <h1 class="h6 mb-0 text-white lh-1">{{ __('Formulir Layanan Pengaduan') }}</h1>
            </div>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form id="pengaduanStore">
                <div class="form-group mb-3">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                  <label for="nik">NIK</label>
                  <input type="number" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email">No Tlp/WhatsApp</label>
                  <input type="number" class="form-control" id="no_tlp" name="no_tlp" required>
                </div>
                <div class="form-group mb-2">
                    <label for="jenis_aduan">Pilih Jenis Saran/aduan/pertanyaan</label>
                    <select class="form-control" id="jenis_aduan" name="jenisaduan_id" required>
                      <option>--Pilih disini--</option>
                      <option value="1">Saran</option>
                      <option value="2">Aduan</option>
                      <option value="3">Pertanyaan</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="opd_id">Ditujukan Untuk Dinas?</label>
                    <select class="form-control" id="opd_id" name="opd_id" required>
                      <option value="">Pilih</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Pesan Anda</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"  required></textarea>
                  </div>
                  @include('components.btn._loading_btn')
                <button id="btn_submit" type="submit" class="w-btn btn-lg btn-block">KIRIM</button>
              </form>
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