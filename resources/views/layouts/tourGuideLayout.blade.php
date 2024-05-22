<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css')}}">
    <link href="{{asset('https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css')}}" rel="stylesheet" />
    @yield('css')
    <style>
        /* Custom Styles */
        .main {
            margin-left: 10px; /* Adjust the left margin to move the table slightly right from the navigation bar */
        }

        .rounded-button {
            border-radius: 999px; /* Make the buttons rounded */
            padding: 8px 16px; /* Adjust padding as needed */
            background-color: #4CAF50; /* Set the background color */
            color: white; /* Set text color to white */
        }

        .rounded-button:hover {
            background-color: #45a049; /* Change the background color on hover */
        }
    </style>

    
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
                    <a href="{{route('tourGuide.dashboard')}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tourGuide.messages')}}">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tourGuide.bookingAndPricing')}}">
                        <span class="icon">
                            <ion-icon name="planet-outline"></ion-icon>
                        </span>
                        <span class="title">Booking & Pricing Info</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tourGuide.pendingBookings')}}">
                        <span class="icon">
                            <ion-icon name="planet-outline"></ion-icon>
                        </span>
                        <span class="title">Pending Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tourGuide.confirmedBookings')}}">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Confirmed Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tourGuide.profile.update' , auth()->user()->id)}}">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <br>
                <br>
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

                <div>
                    @yield('pageTitle')
                </div>

                <div class="flex items-center">
                    <button class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md">
                        <a href="{{route('home')}}">Home</a>
                    </button>

                    <button data-dropdown class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" type="button" x-data="{ open: false }" @click="open = true" :class="{ 'bg-gray-200 rounded-md': open }">
                        <img src="{{ auth()->user()->image? asset('storage/' . auth()->user()->image) : '' }}" alt="travelMateImage" class="h-8 w-8 rounded-full">
                        <span class="ml-4 text-sm hidden md:inline-block">{{auth()->user()->name}}</span>
                        <ion-icon name="chevron-down-outline" class="w-5 ml-2"></ion-icon>
                    
                        <div data-dropdown-items class="text-sm text-left absolute top-0 right-0 mt-16 mr-4 bg-white rounded border border-gray-400 shadow" x-show="open" @click.away="open = false">
                            <ul>
                                <li class="px-4 py-3 border-b hover:bg-gray-200"><a href="{{route('tourGuide.dashboard')}}">My Profile</a></li>
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
     @stack('scripts')
</body>

</html>