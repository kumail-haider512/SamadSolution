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
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.profile')}}">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item @routeis('admin.course.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#course">
                    <i class="material-icons">groups</i><p> Course<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.course.*') @endrouteis" id="course">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.course.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.course.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Course List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.course.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.course.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Course </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.subcourse.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#subcourses">
                    <i class="material-icons">groups</i><p> Sub Course<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.subcourse.*') active @endrouteis" id="subcourses">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.subcourse.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.subcourse.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Sub Course List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.subcourse.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.subcourse.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Sub Course </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.page.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#pages">
                    <i class="material-icons">groups</i><p> Page<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.page.*') active @endrouteis" id="pages">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.page.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.page.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Page List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.page.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.page.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Page </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.user.*') active @endrouteis">
                <a class="nav-link" href="{{route('admin.user.list')}}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> User List </span>
                </a>
            </li>
            <li class="nav-item @routeis('admin.order.*') active @endrouteis">
                <a class="nav-link" href="{{route('admin.order.orderList')}}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> Order List </span>
                </a>
            </li>
            <li class="nav-item @routeis('admin.contact.*') active @endrouteis">
                <a class="nav-link" href="{{route('admin.contact.list')}}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> Message List </span>
                </a>
            </li>
            <li class="nav-item @routeis('admin.newsletter.*') active @endrouteis">
                <a class="nav-link" href="{{route('admin.newsletter.list')}}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> Newsletter </span>
                </a>
            </li>
            <li class="nav-item @routeis('admin.cms.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#cms">
                    <i class="material-icons">groups</i><p> CMS<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.cms.*') active @endrouteis" id="cms">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.cms.general') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.cms.general')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> General </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.home') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.cms.home')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Home </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.aboutus') active @endrouteis">

                            <a class="nav-link" href="{{route('admin.cms.aboutus')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> About </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.contactus') active @endrouteis">

                            <a class="nav-link" href="{{route('admin.cms.contactus')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Contact Us </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.course') active @endrouteis">

                            <a class="nav-link" href="{{route('admin.cms.course')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Course</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.terms') active @endrouteis">

                            <a class="nav-link" href="{{route('admin.cms.terms')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Terms</span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.cms.email') active @endrouteis">

                            <a class="nav-link" href="{{route('admin.cms.email')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Email Template</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
