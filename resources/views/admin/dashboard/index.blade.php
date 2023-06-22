@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card card-statistic-2 pb-5">
            <div class="card-stats">
              <div class="card-stats-title">Order Statistics -
                <div class="dropdown d-inline">
                  <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                  <ul class="dropdown-menu dropdown-menu-sm">
                    <li class="dropdown-title">Select Month</li>
                    <li><a href="#" class="dropdown-item">January</a></li>
                    <li><a href="#" class="dropdown-item">February</a></li>
                    <li><a href="#" class="dropdown-item">March</a></li>
                    <li><a href="#" class="dropdown-item">April</a></li>
                    <li><a href="#" class="dropdown-item">May</a></li>
                    <li><a href="#" class="dropdown-item">June</a></li>
                    <li><a href="#" class="dropdown-item">July</a></li>
                    <li><a href="#" class="dropdown-item active">August</a></li>
                    <li><a href="#" class="dropdown-item">September</a></li>
                    <li><a href="#" class="dropdown-item">October</a></li>
                    <li><a href="#" class="dropdown-item">November</a></li>
                    <li><a href="#" class="dropdown-item">December</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-stats-items row">
                <div class="card-stats-item">
                  <a href="{{ route('perizinan.index') }}" style="text-decoration: none">
                    <div class="card-stats-item-count">24</div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#6777ef}</style><path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"/></svg>
                    <div class="card-stats-item-label">PERIZINAN</div>
                  </a>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">12</div>
                  <div class="card-stats-item-label">Shipping</div>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">23</div>
                  <div class="card-stats-item-label">Completed</div>
                </div>
              </div>
              <div class="card-stats-items row mt-5">
                <div class="card-stats-item">
                  <a href="{{ route('perizinan.index') }}" style="text-decoration: none">
                    <div class="card-stats-item-count">24</div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#6777ef}</style><path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"/></svg>
                    <div class="card-stats-item-label">PERIZINAN</div>
                  </a>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">12</div>
                  <div class="card-stats-item-label">Shipping</div>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">23</div>
                  <div class="card-stats-item-label">Completed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h4>Invoices</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th>Invoice ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Action</th>
                  </tr>
                  <tr>
                    <td><a href="#">INV-87239</a></td>
                    <td class="font-weight-600">Kusnadi</td>
                    <td><div class="badge badge-warning">Unpaid</div></td>
                    <td>July 19, 2018</td>
                    <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">INV-48574</a></td>
                    <td class="font-weight-600">Hasan Basri</td>
                    <td><div class="badge badge-success">Paid</div></td>
                    <td>July 21, 2018</td>
                    <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">INV-76824</a></td>
                    <td class="font-weight-600">Muhamad Nuruzzaki</td>
                    <td><div class="badge badge-warning">Unpaid</div></td>
                    <td>July 22, 2018</td>
                    <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">INV-84990</a></td>
                    <td class="font-weight-600">Agung Ardiansyah</td>
                    <td><div class="badge badge-warning">Unpaid</div></td>
                    <td>July 22, 2018</td>
                    <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">INV-87320</a></td>
                    <td class="font-weight-600">Ardian Rahardiansyah</td>
                    <td><div class="badge badge-success">Paid</div></td>
                    <td>July 28, 2018</td>
                    <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hero">
            <div class="card-header">
              <div class="card-icon">
                <i class="far fa-question-circle"></i>
              </div>
              <h4>14</h4>
              <div class="card-description">Customers need help</div>
            </div>
            <div class="card-body p-0">
              <div class="tickets-list">
                <a href="#" class="ticket-item">
                  <div class="ticket-title">
                    <h4>My order hasn't arrived yet</h4>
                  </div>
                  <div class="ticket-info">
                    <div>Laila Tazkiah</div>
                    <div class="bullet"></div>
                    <div class="text-primary">1 min ago</div>
                  </div>
                </a>
                <a href="#" class="ticket-item">
                  <div class="ticket-title">
                    <h4>Please cancel my order</h4>
                  </div>
                  <div class="ticket-info">
                    <div>Rizal Fakhri</div>
                    <div class="bullet"></div>
                    <div>2 hours ago</div>
                  </div>
                </a>
                <a href="#" class="ticket-item">
                  <div class="ticket-title">
                    <h4>Do you see my mother?</h4>
                  </div>
                  <div class="ticket-info">
                    <div>Syahdan Ubaidillah</div>
                    <div class="bullet"></div>
                    <div>6 hours ago</div>
                  </div>
                </a>
                <a href="features-tickets.html" class="ticket-item ticket-more">
                  View All <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection