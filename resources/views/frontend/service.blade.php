@extends('frontend.layouts.main')

@section('main-container')

<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Our Services</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="about-us pb-6 pt-6" style="background-image:url(frontend/images/shape4.png); background-position:center;">
    <div class="container">
    <div class="section-title mb-6 w-50 mx-auto text-center">
    <h4 class="mb-1 theme1">Core of The Perfect Tour</h4>
    <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    
    <div class="why-us">
    <div class="why-us-box">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon">
    <i class="icon-flag theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Tell Us What You want To Do</a></h4>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon">
    <i class="icon-location-pin theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Share Your Travel Locations</a></h4>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon">
    <i class="icon-directions theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Share Your Travel Preference</a></h4>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon">
    <i class="icon-compass theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">We are 100% Trusted Tour Agency</a></h4>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    </div>
    </div>
    </div>

 


    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-compass theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Here 100% Trusted Tour Agency</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-location-pin theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Share Your Travel Locations</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-directions theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Share Your Travel Preference</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
    <div class="why-us-content">
    <div class="why-us-icon mb-1">
    <i class="icon-flag theme"></i>
    </div>
    <h4><a href="{{url('/service-list')}}">Tell Us What You want To Do</a></h4>
    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
    <p class="mb-0 theme">100+ Reviews</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    <div class="white-overlay"></div>
    </section>
    
    
    <section class="about-us pt-0" style="background-image:url(frontend/images/bg/bg-trans.png);">
    <div class="container">
    <div class="about-image-box">
    <div class="row d-flex align-items-center justify-content-between">
    <div class="col-lg-6 mb-4 pe-lg-4">
    <div class="about-image overflow-hidden">
    <img src="{{url('frontend/images/travel1.png')}}" alt>
    </div>
    </div>
    <div class="col-lg-6 mb-4 ps-ls-4">
    <div class="about-content text-center text-lg-start mb-4">
    <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
    <h2 class="border-b mb-2 pb-1">Explore All Tour of the world with us.</h2>
    <p class="border-b mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="about-listing">
    <ul class="d-flex justify-content-between">
    <li><i class="icon-location-pin theme"></i> Tour Guide</li>
    <li><i class="icon-briefcase theme"></i> Friendly Price</li>
    <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    
    <div class="counter-main w-75 float-end">
    <div class="counter p-4 pb-0 box-shadow bg-white rounded">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">20</h2>
    <span class="m-0">Years Experiences</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">530</h2>
    <span class="m-0">Tour Packages</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
    <div class="counter-item border-end pe-4">
    <div class="counter-content">
    <h2 class="value mb-0 theme">850</h2>
    <span class="m-0">Happy Customers</span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
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
    
    
    <section class="discount-action pt-0" style="background-image:url(frontend/images/section-bg1.png); background-position:center;">
    <div class="container">
    <div class="call-banner rounded pt-10 pb-14">
    <div class="call-banner-inner w-75 mx-auto text-center px-5">
    <div class="trend-content-main">
    <div class="trend-content mb-5 pb-2 px-5">
    <h5 class="mb-1 theme">Love Where Your're Going</h5>
    <h2><a href="detail-fullwidth.html/index.html">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="video-button text-center position-relative">
    <div class="call-button text-center">
    <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
    <a href="{{ url('/tour') }}">Explore</a>
    </button>
    </div>
    <div class="video-figure"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="white-overlay"></div>
    <div class="white-overlay"></div>
    <div class="section-shape  top-inherit bottom-0" style="background-image: url(frontend/images/shape6.png);"></div>
    </section>
    

@endsection
