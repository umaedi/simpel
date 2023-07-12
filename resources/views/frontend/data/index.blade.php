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
                  <h3>{{ $title }}</h3>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="portfolio__area pb-90 pt-50">
    <div class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <a href="/user/export/?data=Sertifikat Standar" target="_blank" class="w-btn w-btn-1 w-100">
                        Sertifikat Standar <span>{{ $sertifikat_standar }}</span>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="/user/export/?data=Persyarat Dasar" target="_blank" class="w-btn w-btn-1 w-100">
                        Persyaratan Dasar <span>{{ $persayaratan_dasar }}</span>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="/user/export/?data=UMKU" target="_blank" class="w-btn w-btn-1 w-100">
                        UMKU <span>{{ $umku }}</span>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="#">Tampilkan Berdasarkan Jenis Izin</label>
                    <select class="form-control" name="jenis_perizinan" id="jenisPerizinan">
                      <option value="">--pilih--</option>
                      <option value="Sertifikat Standar">Sertifikat Standar</option>
                      <option value="Persyarat Dasar">Persyaratan Dasar</option>
                      <option value="UMKU">UMKU</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="#">Tampilkan Berdasarkan Nama Dokumen</label>
                    <select class="form-control" name="nama_dokumen" id="namaDokumen">
                      <option value="">--pilih--</option>
                      <option value="SPPL">SPPL</option>
                      <option value="Sertifikat Standar">Sertifikat Standar</option>
                      <option value="Persetujuan PKPLH">Persetujuan PKPLH</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="inputEmail4">Perhalaman</label>
                    <select class="form-control" name="perpage" id="perPage">
                      <option value="">--pilih--</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                </div>
              </div>
              <hr>
            <div class="card-body">
                <div class="table-responsive" id="data-table">
                    
                </div>
              </div>
        </div>
    </div>
 </section>
@endsection
@push('js')
    <script type="text/javascript">
    var page = 1;
    var paginate = 15;
    var jenis_perizinan = '';
    var nama_dokumen = '';
        $(document).ready(function() {
            loadData();

            $('#jenisPerizinan').change(() => {
              filterTable();
            });

            $('#namaDokumen').change(() => {
              filterTable();
            });

            $('#perPage').change(() => {
                filterTable();
            });
        });

        function filterTable()
        {
          jenis_perizinan = $('#jenisPerizinan').val();
          nama_dokumen = $('#namaDokumen').val();
          paginate = $('#perPage').val(); 
          loadData();
        }
        async function loadData()
        {
            var param = {
                method: 'GET',
                url: '{{ url()->current() }}',
                data: {
                    load: 'table',
                    page: page,
                    jenis_perizinan: jenis_perizinan,
                    nama_dokumen: nama_dokumen,
                    paginate: paginate
                }
            }
            await transAjax(param).then((res) => {
                $('#data-table').html(res);
            });
        }

        //paginate
        function loadPaginate(to) {
            page = to
            filterTable()
        }
    </script>
@endpush