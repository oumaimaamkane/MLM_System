@extends(backpack_view('blank'))

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    trans('backpack::crud.list') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
  <div class="container-fluid">
    <h2>
      <span class="text-capitalize">Participants</span>
      <small id="datatable_info_stack">Participants activées</small>
    </h2>
  </div>
@endsection

@section('content')
  <!-- Default box -->
  <div class="row">

    <!-- THE ACTUAL CONTENT -->
    <div class="col-lg-12 col">

        <div class="row mb-0">
          <div class="col-sm-6">
            {{-- @if ( $crud->buttons()->where('stack', 'top')->count() ||  $crud->exportButtons())
              <div class="d-print-none {{ $crud->hasAccess('create')?'with-border':'' }}">

                @include('crud::inc.button_stack', ['stack' => 'top'])

              </div>
            @endif --}}
          </div>
          <div class="col-sm-6">
            <div id="datatable_search_stack" class="mt-sm-0 mt-2 d-print-none"></div>
          </div>
        </div>
{{-- User List --}}
        <table
          id="crudTable"
          class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs mt-2"
          data-responsive-table="responsive"
          cellspacing="0">
            <thead>
              <tr>
                <th>Reference</th>
                  <th>Prénom</th>
                  <th>Nom</th>
                  <th>Password</th>
                  <th>Pack</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->reference}}</td>
                  <td>{{$user->firstname}}</td>
                  <td>{{$user->lastname}}</td>
                  <td>{{$user->pass}}</td>
                  <td>{{$user->pack_id}}</td>
                  <td>
                    <a href="admin/user/".{{$user->id}}."/show">
                      <i class="la la-eye"></i>
                    </a>  
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>



          {{-- @if ( $crud->buttons()->where('stack', 'bottom')->count() )
          <div id="bottom_buttons" class="d-print-none text-center text-sm-left">
            @include('crud::inc.button_stack', ['stack' => 'bottom'])

            <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
          </div>
          @endif --}}

    </div>

  </div>

@endsection

@section('after_styles')
  <!-- DATA TABLES -->
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  @stack('crud_list_styles')
@endsection


