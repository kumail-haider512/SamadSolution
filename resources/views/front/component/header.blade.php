<div id="wrapper-navbar">
    <nav id="top" class="navbar py-3 fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-sm-5" href="{{route('home')}}">
            <img src="{{ asset($setting['logo_light'])}}" alt="image"></a>
            <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button> 
        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link   mr-3 open my-lg-0 my-2 ml-lg-0 ml-3"  >
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3">
                            About us
                    </a>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown1">  
                        <a href="{{route('about')}}" class="dropdown-item" >
                        About us
                        </a>
                        @foreach(pages() as $item)
                            <a class="dropdown-item" href="{{route('pages',[$item->uid,$item->slug])}}">{{$item->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('courses')}}" class="nav-link dropdown-toggle  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3">
                            Courses
                    </a>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown1">  
                        @foreach(courses() as $item)
                            <a class="dropdown-item" href="{{route('subcourse',createSlug($item->name))}}">{{$item->name}}</a>
                        @endforeach
                    </div>
                </li>
                

                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link  mr-3 my-lg-0 my-2 ml-lg-0 ml-3" >
                        Contact us
                    </a>
                    
                </li>
                
                @if(!Auth::check())
                    <li class="nav-item ">
                        <a  href="#" class="nav-link ml-lg-0 ml-3 mr-3 my-lg-0 my-2 lastitem "  role="button"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#login">
                            Login
                        </a>
                    </li>
                @else
                    <li class="nav-item ">
                        <a onclick="document.getElementById('logout-form').submit()" href="javascript:;" class="nav-link ml-lg-0 ml-3 mr-3 my-lg-0 my-2 lastitem">
                            Logout
                        </a>
                        <form id="logout-form" class="d-none" method="post" action="{{ route('logout') }}">@csrf</form>
                            
                    </li>
                    <li>
                        <a href="{{route('user.dashboard')}}" class="nav-link  mr-3 my-lg-0 my-2 ml-lg-0 ml-3" >
                            Dashboard
                        </a>
                    </li>
                @endif

            </ul>               
  
            </div>
        </div>        
    </nav>
</div>

<!-- login Modal -->
<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="modal fade " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Login with your site account
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Email *</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email or username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password"> Password *</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('password.request') }}" >Forget password?</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success btn-register">Register</button>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary" target="_blank" >Login</button>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Login via social accounts </p>
                        
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="form-group">
                            <a href="{{ route('google.login')}}" class="btn btn-sm btn-google"> <i class="fab fa-google"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{ url('/login/facebook')}}" class="btn btn-sm btn-facebook"> <i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Register Modal -->
<form method="POST" action="{{ route('register')}}">
    @csrf
    <div class="modal fade " id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Login with your site account
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name"> Username *</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Email *</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password"> Password *</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password *</label>
                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Re-type password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>