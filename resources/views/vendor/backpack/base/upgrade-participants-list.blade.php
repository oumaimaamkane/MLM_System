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
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#direct" role="tab" aria-controls="direct">Direct</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade1" role="tab" aria-controls="upgrade1">Upgrade 1</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade2" role="tab" aria-controls="upgrade2">Upgrade 2</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#upgrade3" role="tab" aria-controls="upgrade3">Upgrade 3</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="direct" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Nom Complet</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          @foreach ($direct_users as $direct_user)
                          <tr>
                            <td>{{$direct_user->firstName}} {{$direct_user->lastName}} - {{$direct_user->amount}} DH</td>
                            <td>{{$pack->pack}}</td>
                           
                          <td>
                              <a href="/admin/upgrade-participants/{{$direct_user->upgrade_id}}/{{$direct_user->id}}/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                          </td>
                        </tr>
                          @endforeach
                        
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade1" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Nom Complet</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($up1_users as $up1_user)
                          <tr>
                          <td>{{$up1_user->firstName}} {{$up1_user->lastName}}  ({{$up1_user->members}}) - {{$up1_user->amount}} DH</td>
                          <td>{{$pack->pack}}</td>
                          <td>
                              <a href="/admin/upgrade-participants/{{$up1_user->upgrade_id}}/{{$up1_user->id}}/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                          </td>
                        </tr>
                          @endforeach
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade2" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                          <th>Nom Complet</th>
                          <th>Pack</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($up2_users as $up2_user)
                          <tr>
                            <td>{{$up2_user->firstName}} {{$up2_user->lastName}}  ({{$up2_user->members}}) - {{$up2_user->amount}} DH</td>
                            <td>{{$pack->pack}}</td>
                          <td>
                              <a href="/admin/upgrade-participants/{{$up2_user->upgrade_id}}/{{$up2_user->id}}/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                          </td>
                        </tr>
                          @endforeach
                      </tbody>
                  </table>
            </div>
            <div class="tab-pane" id="upgrade3" role="tabpanel">
                <table class="table table-responsive-sm">
                    <thead>
                      <tr>
                        <th>Nom Complet</th>
                        <th>Pack</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($up3_users as $up3_user)
                          <tr>
                            <td>{{$up3_user->firstName}} {{$up3_user->lastName}}  ({{$up3_user->members}}) - {{$up3_user->amount}} DH</td>
                            <td>{{$pack->pack}}</td>
                          <td>
                              <a href="/admin/upgrade-participants/{{$up3_user->upgrade_id}}/{{$up3_user->id}}/paye" class="btn btn-sm btn-link"><i class="la la-edit"></i>Payé</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        
      </div>
@endsection