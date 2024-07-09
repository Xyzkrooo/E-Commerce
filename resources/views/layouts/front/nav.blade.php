<header class="header_wrap">
    <div class="middle-header dark_skin">
    	<div class="container">
            <div class="nav_block">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{asset('user/assets/images/logo_light.png')}}" alt="logo">
                    <img class="logo_dark" src="{{asset('user/assets/images/logo_dark.png')}}" alt="logo">
                </a>
                <div class="product_search_form radius_input search_form_btn">
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    @guest
                        <li><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                        <li><a href="{{ url('register') }}" class="nav-link">Register</a></li>
                    @else
                    
                        <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                        <li><a href="#" class="nav-link"><i class="linearicons-heart"></i></a></li>
                        <li><a href="#" class="nav-link"><i class="linearicons-bag2"></i></a></li>
                        <li>
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="linearicons-exit"></i></a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top">
    	<div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                	<nav class="navbar navbar-expand-lg">
                    	<button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false"> 
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div> 
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li><a class="nav-link nav_item" href="{{url('/')}}">Home</a></li>
                                <li><a class="nav-link nav_item" href="{{url('/shop')}}">Shop</a></li> 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>