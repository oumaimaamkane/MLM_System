@extends(backpack_view('blank'))
@php
  $breadcrumbs = [
      'Tableau de bord' => backpack_url('dashboard'),
      'Wallet' => false,
  ];
@endphp
@section('content')
    <h2 class="mt-2">Votre wallet</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-success text-white text-center">
                <div class="card-body">
                    <h5 class="text-center">Votre Pack : </h5>
                    <span> {{$pack->pack}} ({{$pack->amount}})</span>
                </div>
                
            </div>
            <div class="card bg-success text-white text-center">
                <div class="card-body">
                    <h5 class="text-center">Votre Balance</h5>
                    @if (isset($balance))
                        <span>{{$balance}} DH</span>
                    @else
                        <span> 0 DH</span>
                    @endif
                </div>
                
            </div>

        </div>
        <div class="col-lg-6">
            <div class="card ">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>
                    <h5>La liste de vos upgrades :</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <div class="scrollspy-example1">
                            <div id="spy-example1" data-spy="scroll" data-target="#navbar-example1" data-offset="65" style="position: relative; height: 400px; overflow: auto; margin-top: .5rem; overflow-y: scroll;">
                                @foreach ($user_upgrades as $user_upgrade)
                                    <li class="list-group-item d-flex list-group-item-action justify-content-between align-items-center">
                                        {{$user_upgrade->name}} @if ($user_upgrade->name !== 'Direct')
                                        ({{$loop->index}})
                                        @endif : {{$user_upgrade->amount}}dh
                                        <span>{{$user_upgrade->members}}</span>
                                        <span class="badge badge-primary badge-pill">{{$user_upgrade->status}}</span>
                                    </li> 
                                @endforeach
                            </div>
                        </div>
                        
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    

@endsection