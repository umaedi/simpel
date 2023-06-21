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
            <button type="button" class="btn btn-primary">
                Persyarat Dasar <span class="badge badge-transparent">{{ $persayaratan_dasar }}</span>
            </button>
            <button type="button" class="btn btn-primary ml-2">
                Sertifikat Standar <span class="badge badge-transparent">{{ $sertifikat_standar }}</span>
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            loadData();
        });

        async function loadData()
        {
            var param = {
                method: 'GET',
                url: '{{ url()->current() }}',
                data: {
                    load: 'table',
                }
            }
            await transAjax(param).then((res) => {
                console.log(ress);
            });
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