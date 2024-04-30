@extends('frontend.layouts.main')

@section('main-container')


<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">About Us</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="about-us pt-6" style="background-image:url(frontend/images/background_pattern.png); background-position:bottom right;">
    <div class="container">
    <div class="about-image-box">
    <div class="row d-flex align-items-center justify-content-between">
    <div class="col-lg-6 ps-4">
    <div class="about-content text-center text-lg-start">
    <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
    <h2 class="border-b mb-2 pb-1">Explore All Tour of the world with us.</h2>
    <p class="border-b mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="about-listing">
    <ul class="d-flex justify-content-between">
    <li><i class="icon-location-pin theme"></i> Tour Guide</li>
    <li><i class="icon-briefcase theme"></i> Friendly Price</li>
    <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mb-4 pe-4">
    <div class="about-image" style="animation:none; background:transparent;">
    <img src="{{url('frontend/images/travel.png')}}" alt>
    </div>
    </div>
    <div class="col-lg-12">
    
    <div class="counter-main w-75 float-start z-index3 position-relative">
    <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">20</h2>
    <span class="m-0">Years Experiences</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">530</h2>
    <span class="m-0">Tour Packages</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">850</h2>
    <span class="m-0">Happy Customers</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
    <div class="counter-item">
    <div class="counter-content">
    <h2 class="value mb-0 theme">320</h2>
    <span class="m-0">Award Winning</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    <div class="white-overlay"></div>
    </section>
    
    
    <section class="about-us pb-0">
    <div class="section-shape section-shape1" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="container">
    <div class="section-title mb-6 w-50 mx-auto text-center">
    <h4 class="mb-1 theme1">Core Features</h4>
    <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    
    <div class="why-us">
    <div class="why-us-box">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto mb-4">
    <div class="why-us-item p-5 pt-6 pb-6 border rounded">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-flag theme"></i>
    </div>
    <h4><a href="{{url('/about')}}">Tell Us What You want To Do</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto  mb-4">
    <div class="why-us-item p-5 pt-6 pb-6 border rounded">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-location-pin theme"></i>
    </div>
    <h4><a href="{{url('/about')}}">Share Your Travel Locations</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto  mb-4">
    <div class="why-us-item p-5 pt-6 pb-6 border rounded ">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-directions theme"></i>
    </div>
    <h4><a href="{{url('/about')}}">Share Your Travel Preference</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-10 mx-auto  mb-4">
    <div class="why-us-item p-5 pt-6 pb-6 border rounded">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-compass theme"></i>
    </div>
    <h4><a href="{{url('/about')}}">Here 100% Trusted Tour Agency</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </section>
    
    
    <section class="our-team pb-0 pt-6">
    <div class="container">
    <div class="section-title mb-6 w-75 mx-auto text-center">
    <h4 class="mb-1 theme1">Tour Guides</h4>
    <h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="team-main">
    <div class="row shop-slider">
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
    <div class="team-list rounded">
    <div class="team-image">
    <img src="{{url('frontend/images/team/img1.jpg')}}" alt="team">
    </div>
    <div class="team-content text-center p-3 bg-theme">
    <h4 class="mb-0 white">Salmon Thuir</h4>
    <p class="mb-0 white">Senior Agent</p>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
    <div class="team-list rounded">
    <div class="team-image">
    <img src="{{url('frontend/images/team/img2.jpg')}}" alt="team">
    </div>
    <div class="team-content text-center p-3 bg-theme">
    <h4 class="mb-0 white">Horke Pels</h4>
    <p class="mb-0 white">Head Officer</p>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
    <div class="team-list rounded">
    <div class="team-image">
    <img src="{{url('frontend/images/team/img4.jpg')}}" alt="team">
    </div>
    <div class="team-content text-center p-3 bg-theme">
    <h4 class="mb-0 white">Solden kalos</h4>
    <p class="mb-0 white">Supervisor</p>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
    <div class="team-list rounded">
    <div class="team-image">
    <img src="{{url('frontend/images/team/img3.jpg')}}" alt="team">
    </div>
    <div class="team-content text-center p-3 bg-theme">
    <h4 class="mb-0 white">Nelson Bam</h4>
    <p class="mb-0 white">Quality</p>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
    <div class="team-list rounded">
    <div class="team-image">
    <img src="{{url('frontend/images/team/img4.jpg')}}" alt="team">
    </div>
    <div class="team-content text-center bg-theme p-3">
    <h4 class="mb-0 white">Cacics Coold</h4>
    <p class="mb-0 white">Asst. Manager</p>
    </div>
    </div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
        <div class="team-list rounded">
        <div class="team-image">
        <img src="{{url('frontend/images/team/img2.jpg')}}" alt="team">
        </div>
        <div class="team-content text-center p-3 bg-theme">
        <h4 class="mb-0 white">Horke Pels</h4>
        <p class="mb-0 white">Head Officer</p>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </section>



@endsection
