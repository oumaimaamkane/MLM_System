<div>
    <div class="row">
        <div class="tree">
            <ul>
                <li> <a href="#"><i class="fa fa-user"></i><span>{{ $parent->firstname}} {{$parent->lastname}}</span></a>
                    <ul>
                        @if (count($children)>0)
                            @foreach ($children as $kid)
                            @if (backpack_user()->is_admin == 1)
                                <li><a href="{{url('admin/network/'.$kid->pack_id.'/'.$kid->id.'')}}"><i class="fa fa-user"></i></i><span>{{$kid->firstname}} <br/> {{$kid->lastname}}</span></a>
                            @else
                                <li><a href="{{url('admin/network/'.$kid->id.'/show')}}"><i class="fa fa-user"></i></i><span>{{$kid->firstname}} <br/> {{$kid->lastname}}</span></a>
                            @endif
                                    {{-- <ul class="mt-2">
                                        @foreach($grand_children as $grand_child)
                                            @if ($grand_child->parent_id == $kid->id)
                                            <li><a href="#"><i class="fa fa-user"></i><span>{{$grand_child->firstname}} {{$grand_child->lastname}}</span></a>
                                            @endif
                                        @endforeach
                                    </ul> --}}
                                </li>
                            @endforeach
                        @else
                            <h1> Il n'ya pas de membre</h1>
                        @endif
                        
                        {{-- <li><a href="#"><img src="images/2.jpg"><span>Grand Child</span></a>
                            <ul>
                                <li> <a href="#"><img src="images/3.jpg"><span>Great Grand Child</span></a> </li>
                                <li> <a href="#"><img src="images/4.jpg"><span>Great Grand Child</span></a> </li>
                            </ul>
                        </li>
                        <li> <a href="#"><img src="images/5.jpg"><span>Grand Child</span></a>
                            <ul>
                                <li> <a href="#"><img src="images/6.jpg"><span>Great Grand Child</span></a> </li>
                                <li> <a href="#"><img src="images/7.jpg"><span>Great Grand Child</span></a> </li>
                                <li> <a href="#"><img src="images/8.jpg"><span>Great Grand Child</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="#"><img src="images/9.jpg"><span>Grand Child</span></a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>