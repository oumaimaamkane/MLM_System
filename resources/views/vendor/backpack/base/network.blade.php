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
        @if ($children == null)
            <h2 class="text-center p-2">vous n'avez pas d'enfant</h2>
        @else
            @include('vendor.backpack.base.inc.tree', ['parent' => $parent])
        @endif
        
    </div>

@endsection