@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome') ."&nbsp;" . backpack_user()->firstname ."&nbsp;" . backpack_user()->lastname,
    ];
@endphp

@section('content')
      <div class="card-group">
          <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="la la-users"></i></div>
                <div class="text-value">{{ $total_users }}</div><small class="text-muted text-uppercase font-weight-bold">Total des membres dans votre réseau </small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="la la-level-up"></i></div>
                <div class="text-value">{{$niveau}}</div><small class="text-muted text-uppercase font-weight-bold">Votre niveau</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4"><i class="la la-money"></i></div>
                <div class="text-value">{{$balance}}</div><small class="text-muted text-uppercase font-weight-bold">Balance</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
      </div>

      @if (backpack_user()->is_admin == 1)
      <section class="mt-3">
        <div class="row">
          <div class="col-lg-6 mb-4">
              <div class="card ">
                  <div class="card-header">
                      <h6>Performance</h6>
                      <h4 class="mt-0">Statistiques des utilisateurs (Activées)</h4>
                  </div>
                  <div class="card-body">
                      <canvas id="usersMonthly" ></canvas>
                  </div>
              </div>    
          </div>
        </div>
      </section>
          
      @endif
      
        
        
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
  
    var labels_users_chart =  {{ Js::from($labels_users_chart) }};
    var users =  {{ Js::from($data_users_chart) }};

    const dataLine = {
      labels: labels_users_chart,
      datasets: [{
        label: 'Participants',
        backgroundColor: '#17784b',
        borderColor: '#17784b',
        borderCapStyle:'round',
        tension: 0.1,
        data: users,
      }]
    };

    const config = {
      type: 'line',
      data: dataLine,
      options: {}
    };



    const usersChart = new Chart(
      document.getElementById('usersMonthly'),
      config
    );

    
    

</script>   
@endsection