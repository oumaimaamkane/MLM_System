<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->is_admin == 1)
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('pack') }}'><i class='nav-icon la la-archive'></i> Packs</a></li>
<li class='nav-item nav-dropdown'><a class='nav-link nav-dropdown-toggle' href='#'><i class='nav-icon la la-money'></i>Upgrades</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('upgrade') }}'><i class='nav-icon la la-list'></i>List des Upgrades</a></li>  
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('upgrade-participants') }}'><i class='nav-icon la la-users'></i>List des participants </a></li>
    </ul>
</li>
@endif
<li class='nav-item nav-dropdown'><a class='nav-link nav-dropdown-toggle' href='#'><i class='nav-icon la la-users'></i>Participants</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href='{{ backpack_url('user') }}'><i class='nav-icon la la-check-circle-o'></i>Participants Activées </a></li>
        @if (backpack_user()->is_admin == 1)
        <li class="nav-item"><a class="nav-link" href='{{ backpack_url('inactivate-user') }}'><i class='nav-icon la la-times-circle-o'></i>Participants Désactivées </a></li>
        @endif
    </ul>
</li>

{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-users'></i> Participant</a></li> --}}
@if (backpack_user()->is_admin == 1)
<li class='nav-item nav-dropdown'><a class='nav-link nav-dropdown-toggle' href='#'><i class='nav-icon la la-tree'></i>Réseau</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href='{{ backpack_url('network') }}'><i class='nav-icon la la-tree'></i> Réseau 200dh </a></li>
        <li class="nav-item"><a class="nav-link" href='{{ backpack_url('network/2') }}'><i class='nav-icon la la-tree'></i> Réseau 1000dh </a></li>
        <li class="nav-item"><a class="nav-link" href='{{ backpack_url('network/3') }}'><i class='nav-icon la la-tree'></i> Réseau 3000dh </a></li>
    </ul>
</li>
@else
<li class='nav-item'><a class='nav-link ' href='{{ backpack_url('network') }}'><i class='nav-icon la la-tree'></i>Réseau </a></li>
@endif
<li class='nav-item'><a class='nav-link ' href='{{ backpack_url('network') }}'><i class='nav-icon la la-wallet'></i>wallet</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('backpack.account.info') }}"><i class="la la-user"></i> {{ trans('backpack::base.my_account') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('logout') }}"><i class="la la-lock"></i> {{ trans('backpack::base.logout') }}</a></li>


