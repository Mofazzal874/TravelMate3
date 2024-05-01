<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css')}}">
    <link href="{{asset('https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css')}}" rel="stylesheet" />

    
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <span class="icon">
                            <ion-icon name="compass-outline"></ion-icon>
                        </span>
                        <span class="title">TravelMate</span>
                    </a>
                </li>                

                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="planet-outline"></ion-icon>
                        </span>
                        <span class="title">Places</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="bed-outline"></ion-icon>
                        </span>
                        <span class="title">Hotels</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">TourGuides</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('logout')}}">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="flex items-center">
                    <button class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </button>

                    <button data-dropdown class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" type="button" x-data="{ open: false }" @click="open = true" :class="{ 'bg-gray-200 rounded-md': open }">
                        <img src="{{ asset('assets/imgs/customer01.jpg') }}" alt="Profile" class="h-8 w-8 rounded-full">
                        <span class="ml-4 text-sm hidden md:inline-block">Mofazzal Hosen</span>
                        <ion-icon name="chevron-down-outline" class="w-5 ml-2"></ion-icon>
                    
                        <div data-dropdown-items class="text-sm text-left absolute top-0 right-0 mt-16 mr-4 bg-white rounded border border-gray-400 shadow" x-show="open" @click.away="open = false">
                            <ul>
                                <li class="px-4 py-3 border-b hover:bg-gray-200"><a href="#">My Profile</a></li>
                                <li class="px-4 py-3 border-b hover:bg-gray-200"><a href="#">Settings</a></li>
                                <li class="px-4 py-3 hover:bg-gray-200"><a href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </div>
                    </button>
                    
                    
     
                </div>
            </div>
            @yield('contents')
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js')}}"></script>
</body>

</html>