@extends(backpack_view('blank'))
@php
  $breadcrumbs = [
      'Tableau de bord' => backpack_url('dashboard'),
      'Reseau' => false,
  ];
@endphp
@section('content')
    <h2 class="mt-2">Votre réseau</h2>
    <div class="card">
        @include('vendor.backpack.base.inc.tree', ['parent' => $parent])

    </div>

@endsection