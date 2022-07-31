<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('pack') }}'><i class='nav-icon la la-archive'></i> Packs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-users'></i> Participant</a></li>
{{-- <li class='nav-item nav-dropdown'><a class='nav-link nav-dropdown-toggle' href='{{ backpack_url('network') }}'><i class='nav-icon la la-tree'></i>Reseau</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link"> Test </a></li>
    </ul>
</li> --}}
<li class='nav-item'><a class='nav-link ' href='{{ backpack_url('network') }}'><i class='nav-icon la la-tree'></i>Reseau</a></li>
