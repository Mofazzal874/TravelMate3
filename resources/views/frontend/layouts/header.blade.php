    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="icon-calendar white"></i> Tuesday, May 26,
                                2024</a>
                        </li>
                        <li><a href="#" class="white"><i class="icon-location-pin white"></i> Khulna, Bangladesh</a>
                        </li>
                        <li><a href="#" class="white"><i class="icon-clock white"></i> Sun-Fri: 10 AM – 5 PM</a>
                        </li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>
                        <li><a href="{{url('https://www.facebook.com/travelMate')}}" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{url('https://www.twitter.com/travelMate')}}" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{url('https://www.instagram.com/travelMate')}}" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{url('https://www.linkedin.com/in/travelMateOfficial')}}" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{route('home')}}">
                                {{-- <img src="{{ asset('frontend/images/icons/compass-icon-vector.png')}}" @style('width:46px; height:46px') alt="image"> --}}
                                <img src="{{ asset('frontend/images/icons/travel2.png')}}" @style('width:216px; height:46px') alt="image">

                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('bestDestination.tour') }}">Deals</a></li>
                                <li><a href="{{ route('allDestination') }}">Destinations</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Pages <i class="icon-arrow-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('tourGuide') }}">TourGuides</a></li>
                                        <li><a href="{{ route('gallery.tour')}}">Gallery</a></li>
                                        <li><a href="{{ route('sendMessageToAdmin' , 1) }}">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('topDestination.tour') }}">Top Picks</a></li>
                                <li><a href="{{ route('sendMessageToAdmin' , 1)}}">Contact</a></li>

                            </ul>
                        </div>
                        <div class="register-login d-flex align-items-center">
                            @guest
                            <a href="{{route('login')}}"  class="me-3">
                                <i class="icon-user"></i> Login/Register
                            </a>
                            @endguest
                            @auth
                            <div class="nav navbar-nav" id="responsive-menu">
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ auth()->user()->image? asset('storage/' . auth()->user()->image) : '' }}"  class="rounded-circle" width="30" height="30"> 
                                        {{ auth()->user()->name }} <i class="icon-arrow-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if(auth()->user()->type == 'user')
                                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                        @elseif(auth()->user()->type == 'admin')
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        @elseif(auth()->user()->type == 'manager')
                                            <li><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                                        @elseif(auth()->user()->type == 'tourGuide')
                                            <li><a href="{{ route('tourGuide.dashboard') }}">Dashboard</a></li>
                                        @endif
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            </div>
                            @endauth
                        </div>
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>

    </header>
