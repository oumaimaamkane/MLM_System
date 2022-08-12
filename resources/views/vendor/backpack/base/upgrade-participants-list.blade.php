@extends(backpack_view('blank'))
@php
  $breadcrumbs = [
      'Tableau de bord' => backpack_url('dashboard'),
      'List des partcipants' => false,
  ];
@endphp
@section('content')
<div class="container-fluid">
    <h3>Les participants qui doivent réclamer leurs Upgrades</h3>
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12 mb-12">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#upgrade1" role="tab" aria-controls="upgrade1">Upgrade 1</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade2" role="tab" aria-controls="upgrade2">Upgrade 2</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade3" role="tab" aria-controls="upgrade3">Upgrade 3</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade4" role="tab" aria-controls="upgrade4">Upgrade 4</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="upgrade1" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Test</td>
                          <td>Pack 1</td>
                           
                          <td>
                              {{-- <span class="badge badge-success">Active</span></td> --}}
                              <a href="/admin/upgrade-participants/21/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                        </tr>
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade2" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Test</td>
                          <td>Pack 1</td>
                           
                          <td>
                              {{-- <span class="badge badge-success">Active</span></td> --}}
                              <a href="/admin/upgrade-participants/21/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                        </tr>
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade3" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Test</td>
                          <td>Pack 1</td>
                           
                          <td>
                              {{-- <span class="badge badge-success">Active</span></td> --}}
                              <a href="/admin/upgrade-participants/21/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                        </tr>
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade4" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                      <tr>
                        <th>Reference</th>
                        <th>Pack</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Test</td>
                        <td>Pack 1</td>
                        <td>
                            {{-- <span class="badge badge-success">Active</span></td> --}}
                            <a href="/admin/upgrade-participants/21/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        
      </div>
@endsection