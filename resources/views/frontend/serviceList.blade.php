@extends('frontend.layouts.main')

@section('main-container')

<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Service Detail</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="about-us pt-6 pb-0">
    <div class="container">
    <div class="about-image-box">
    <div class="row">
    <div class="col-lg-8 col-sm-12 pe-lg-4">
    <div class="about-content">
    <h2 class="mb-3">Share Your Travel Locations</h2>
    <div class="about-image rounded mb-3 overflow-hidden">
    <img src="{{url('frontend/images/trending/trending4.jpg')}}" alt class="w-100">
    </div>
    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="services-image d-flex mt-3 mb-3">
    <div class="me-2 rounded overflow-hidden"><img src="{{url('frontend/images/trending/trending5.jpg')}}" alt class="w-100"></div>
    <div class="ms-2 rounded overflow-hidden"><img src="{{url('frontend/images/trending/trending6.jpg')}}" alt class="w-100"></div>
    </div>
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    </div>
    </div>
    <div class="col-lg-4 col-sm-12 ps-lg-4">
    <div class="sidebar-sticky">
    <div class="list-sidebar">
    <div class="sidebar-item mb-4">
    <h3 class>All Categories</h3>
    <ul class="sidebar-category">
    <li><a href="#">Travel Management</a></li>
    <li><a href="#">Tour Services</a></li>
    <li><a href="#">Trip Consulting</a></li>
    <li class="active"><a href="#">Travel Preference</a></li>
    <li><a href="#">Tour Agency</a></li>
    <li><a href="#">Top Destination</a></li>
    <li><a href="#">Your Booking</a></li>
    <li><a href="#">TOp Pick</a></li>
    </ul>
    </div>
    <div class="popular-post sidebar-item mb-4">
    <h3 class>Related Services</h3>
    <div class="sidebar-tabs">
    <div class="post-tabs">
    
    <div class="tab-content" id="postsTabContent1">
    
    <div class="tab-pane fade active show" id="popular" role="tabpanel">
    <article class="post mb-3 border-b pb-3">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending1.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">An Incredibly Easy Method That Works For All</a></h5>
    <div class="date">10 Apr 2021</div>
    </div>
    </div>
    </article>
    <article class="post border-b pb-3 mb-3">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending2.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">15 Unheard Ways To Achieve Greater Walker</a></h5>
    <div class="date">29 Mar 2021</div>
    </div>
    </div>
    </article>
    <article class="post">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending4.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">15 Unheard Ways To Achieve Greater Walker</a></h5>
    <div class="date">21 Feb 2021</div>
    </div>
    </div>
    </article>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="sidebar-item mb-4">
    <h3 class>Tags</h3>
    <ul class="sidebar-tags">
    <li><a href="#">Tour</a></li>
    <li><a href="#">Rental</a></li>
    <li><a href="#">City</a></li>
    <li><a href="#">Yatch</a></li>
    <li><a href="#">Activity</a></li>
    <li><a href="#">Museum</a></li>
    <li><a href="#">Beauty</a></li>
    <li><a href="#">Classic</a></li>
    <li><a href="#">Creative</a></li>
    <li><a href="#">Designs</a></li>
    <li><a href="#">Featured</a></li>
    <li><a href="#">Free Style</a></li>
    <li><a href="#">Programs</a></li>
    <li><a href="#">Travel</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
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
