<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="" target="_blank" class="simple-text logo-normal"><img src="{{ asset('images/Transparent_Background (1).png') }}" class="w-100" alt=""></a></a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset(Auth::user()->image) }}" />
            </div>
            <div class="user-info">
                <a class="text-uppercase">
                    <strong>{{Auth::user()->name}} </strong>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('user.dashboard') active @endrouteis">
                <a class="nav-link" href="{{route('user.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item @routeis('user.profile') active @endrouteis">
                <a class="nav-link" href="{{route('user.profile')}}">
                    <i class="material-icons">group</i>
                    <p> Profile </p>
                </a>
            </li>
            <li class="nav-item @routeis('user.order.*') active @endrouteis">
                <a class="nav-link" href="{{route('user.order.orderList')}}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> Order List </span>
                </a>
            </li>
        </ul>
    </div>
</div>
