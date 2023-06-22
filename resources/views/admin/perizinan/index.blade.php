@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Perizinan Berusaha</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Layout</a></div>
          <div class="breadcrumb-item">Default Layout</div>
        </div>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Export Data</h4>
          </div>
          <div class="card-body">
            <form id="formAjax">
                <input type="file" class="form-control" name="perizinan">
                <button type="submit" class="btn btn-primary mt-3">EXPORT</button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-primary mr-2">
              Sertifikat Standar <span class="badge badge-transparent">{{ $sertifikat_standar }}</span>
          </button>
            <button type="button" class="btn btn-primary mr-2">
                Persyaratan Dasar <span class="badge badge-transparent">{{ $persayaratan_dasar }}</span>
            </button>
            <button type="button" class="btn btn-primary">
                UMKU <span class="badge badge-transparent">{{ $umku }}</span>
            </button>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="#">Tampilkan Berdasarkan Jenis Izin</label>
                <select class="form-control" name="jenis_perizinan" id="jenisPerizinan">
                  <option value="">--pilih--</option>
                  <option value="Sertifikat Standar">Sertifikat Standar</option>
                  <option value="Persyarat Dasar">Persyaratan Dasar</option>
                  <option value="UMKU">UMKU</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="#">Tampilkan Berdasarkan Nama Dokumen</label>
                <select class="form-control" name="nama_dokumen" id="namaDokumen">
                  <option value="">--pilih--</option>
                  <option value="SPPL">SPPL</option>
                  <option value="Sertifikat Standar">Sertifikat Standar</option>
                  <option value="Persetujuan PKPLH">Persetujuan PKPLH</option>
                </select>
              </div>
              <div class="form-group col-md-4">
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
            <div class="table-responsive" id="data-table">
                
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('js')
    <script type="text/javascript">
    var page = 1;
    var paginate = 10;
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

        $('#formAjax').submit(async function store(e) {
            e.preventDefault();
            var form = $(this)[0];
            var data = new FormData(form);

            var param = {
                method: 'POST',
                url: '/admin/perizinan/store',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

            await transAjax(param).then((res) => {
                console.log('ok');
            });
        });
    </script>
@endpush