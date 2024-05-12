@extends('frontend.layouts.main')

@section('main-container')
<div class="tet"></div>

<section class="banner pt-10 pb-0 overflow-hidden" style="background-image:url(frontend/images/testimonial.png);">
<div class="container">
<div class="banner-in">
<div class="row align-items-center">
<div class="col-lg-6 mb-4">
<div class="banner-content text-lg-start text-center">
<h4 class="theme mb-0">Explore The World</h4>
<h1>Start Planning Your Dream Trip Today!</h1>
<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
tempor incididunt ut labore</p>
<div class="book-form">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg-6 mb-2">
<div class="form-group">
<div class="input-box">
<select class="niceSelect">
<option value="1">Destination</option>
<option value="2">Argentina</option>
<option value="3">Belgium</option>
<option value="4">Canada</option>
<option value="5">Denmark</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 mb-2">
<div class="form-group">
<div class="input-box">
<input type="date" name="date">
</div>
</div>
</div>
<div class="col-lg-6 mb-2">
<div class="form-group">
<div class="input-box">
<select class="niceSelect">
<option value="1">Travel Type</option>
<option value="2">City Tour</option>
<option value="3">Family Tour</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 mb-2">
<div class="form-group">
<div class="input-box">
<select class="niceSelect">
<option value="1">Tour Duration</option>
<option value="2">5 days</option>
<option value="3">7 Days</option>
</select>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group mb-0 text-center">
<a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search
Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="banner-image">
<img src="{{url('frontend/images/travel.png')}}" alt>
</div>
</div>
</div>
<div class="category-main-inner border-t pt-1 ">
<div class="row side-slider">
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content">
<img src="{{url('frontend/images/icons/004-camping-tent.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Camping</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content text-center">
<img src="{{url('frontend/images/icons/003-hiking.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Hiking</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content">
<img src="{{url('frontend/images/icons/005-sunbed.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Beach Tours</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
    <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
    <div class="trending-topic-content">
    <img src="{{url('frontend/images/icons/008-cycling.png')}}" class="mb-1 d-inline-block" alt>
    <h4 class="mb-0"><a href="{{ url('/tour') }}">Biking</a></h4>
    </div>
    </div>
    </div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content">
<img src="{{url('frontend/images/icons/006-surf.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Surfing</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content">
<img src="{{url('frontend/images/icons/002-safari.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Safari</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<div class="trending-topic-content">
<img src="{{url('frontend/images/icons/008-cycling.png')}}" class="mb-1 d-inline-block" alt>
<h4 class="mb-0"><a href="{{ url('/tour') }}">Cycling</a></h4>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 my-4">
<div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
<img src="{{url('frontend/images/icons/007-hiking-1.png')}}" class="mb-1 d-inline-block" alt>
<div class="trending-topic-content">
<h4 class="mb-0"><a href="{{ url('/tour') }}">Trekings</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="about-us pb-6 pt-6" style="background-image:url(frontend/images/shape4.png); background-position:center;">
<div class="container">
<div class="section-title mb-6 w-50 mx-auto text-center">
<h4 class="mb-1 theme1">3 Step of The Perfect Tour</h4>
<h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>

<div class="why-us">
<div class="why-us-box">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-11 mx-auto ">
<div class="why-us-item text-center p-4 py-5 border rounded">
<div class="why-us-content">
<div class="why-us-icon">
<i class="icon-flag theme"></i>
</div>
<h4><a href="{{ url('/about') }}">Tell Us What You want To Do</a></h4>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-11 mx-auto">
<div class="why-us-item text-center p-4 py-5 border rounded">
<div class="why-us-content">
<div class="why-us-icon">
<i class="icon-location-pin theme"></i>
</div>
<h4><a href="{{ url('/about') }}">Share Your Travel Locations</a></h4>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-11 mx-auto">
<div class="why-us-item text-center p-4 py-5 border rounded ">
<div class="why-us-content">
<div class="why-us-icon">
<i class="icon-directions theme"></i>
</div>
<h4><a href="{{ url('/about') }}">Share Your Travel Preference</a></h4>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-4 col-11 mx-auto">
<div class="why-us-item text-center p-4 py-5 border rounded">
<div class="why-us-content">
<div class="why-us-icon">
<i class="icon-compass theme"></i>
</div>
<h4><a href="{{ url('/about') }}">We are 100% Trusted Tour Agency</a></h4>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="white-overlay"></div>
</section>


<section class="trending pb-5 pt-0">
<div class="container">
<div class="section-title mb-6 w-50 mx-auto text-center">
<h4 class="mb-1 theme1">Top Destinations</h4>
<h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="row align-items-center">
<div class="col-lg-5 mb-4 d-none d-md-block">
<div class="trend-item1">
<div class="trend-image position-relative rounded">
<img src="{{url('frontend/images/destination/destination1.jpg')}}" alt="image">
<div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
<div class="trend-content-title">
<h5 class="mb-0"><a href="{{url('/tour')}}" class="theme1">England</a></h5>
<h3 class="mb-0 white">London</h3>
</div>
<span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
<div class="col-lg-7 col-12">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
<div class="trend-item1">
<div class="trend-image position-relative rounded">
<img src="{{url('frontend/images/destination/destination17.jpg')}}" alt="image">
<div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
<div class="trend-content-title">
<h5 class="mb-0"><a href="{{url('/tour')}}" class="theme1">Italy</a>
</h5>
<h3 class="mb-0 white">Caspian Valley</h3>
</div>
<span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">18 Tours</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
<div class="trend-item1">
<div class="trend-image position-relative rounded">
<img src="{{url('frontend/images/destination/destination14.jpg')}}" alt="image">
<div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
<div class="trend-content-title">
<h5 class="mb-0"><a href="{{url('/tour')}}" class="theme1">Tokyo</a>
</h5>
<h3 class="mb-0 white">Japan</h3>
</div>
<span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">21 Tours</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
<div class="trend-item1">
<div class="trend-image position-relative rounded">
<img src="{{url('frontend/images/destination/destination15.jpg')}}" alt="image">
<div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
<div class="trend-content-title">
<h5 class="mb-0"><a href="{{url('/tour')}}" class="theme1">Moscow</a>
</h5>
<h3 class="mb-0 white">Russia</h3>
</div>
<span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">15 Tours</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
<div class="trend-item1">
<div class="trend-image position-relative rounded">
<img src="{{url('frontend/images/destination/destination16.jpg')}}" alt="image">
<div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
<div class="trend-content-title">
<h5 class="mb-0"><a href="{{url('/tour')}}" class="theme1">Florida</a>
</h5>
<h3 class="mb-0 white">America</h3>
</div>
<span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">32 Tours</span>
</div>
<div class="color-overlay"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="about-us pt-0" style="background-image:url(frontend/images/bg/bg-trans.png);">
<div class="container">
<div class="about-image-box">
<div class="row d-flex align-items-center justify-content-between">
<div class="col-lg-6 mb-4 pe-4">
<div class="about-image overflow-hidden">
<img src="{{url('frontend/images/travel1.png')}}" alt>
</div>
</div>
<div class="col-lg-6 mb-4 ps-4">
<div class="about-content text-center text-lg-start mb-4">
<h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
<h2 class="border-b mb-2 pb-1">Explore All Tour of the world with us.</h2>
<p class="border-b mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.<br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
officia deserunt mollit anim id est laborum.</p>
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

<div class="counter-main w-75 float-end d-none d-md-block">
<div class="counter p-4 pb-0 box-shadow bg-white rounded">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 mb-4">
<div class="counter-item border-end pe-4">
<div class="counter-content">
<h2 class="value mb-0 theme">20</h2>
<span class="m-0">Years Experiences</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-4">
<div class="counter-item border-end pe-4">
<div class="counter-content">
<h2 class="value mb-0 theme">530</h2>
<span class="m-0">Tour Packages</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6  mb-4">
<div class="counter-item border-end pe-4">
<div class="counter-content">
<h2 class="value mb-0 theme">850</h2>
<span class="m-0">Happy Customers</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 mb-4">
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


<section class="trending pb-0">
<div class="container">
<div class="row align-items-center justify-content-between mb-6 ">
<div class="col-lg-7">
<div class="section-title text-center text-lg-start">
<h4 class="mb-1 theme1">Top Pick</h4>
<h2 class="mb-1">Best <span class="theme">Tour Packages</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore.</p>
</div>
</div>
<div class="col-lg-5">
</div>
</div>
<div class="trend-box">
<div class="row item-slider">
<div class="col-lg-4 col-md-6 col-sm-6 mx-auto mb-4 col-6">
<div class="trend-item rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending2.jpg')}}" alt="image" class>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
<h3 class="mb-1"><a href="{{ url('/tour') }}">Piazza Castello</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(12)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6  mx-auto mb-4 col-6">
<div class="trend-item box-shadow rounded">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending3.jpg')}}" alt="image">
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
<h3 class="mb-1"><a href="{{ url('/tour') }}">Santorini, Oia</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(38)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mx-auto mb-4 col-6">
<div class="trend-item box-shadow rounded">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending4.jpg')}}" alt="image">
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Maldives</h5>
<h3 class="mb-1"><a href="{{ url('/tour') }}">Hurawalhi Island</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(18)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mx-auto mb-4 col-6">
<div class="trend-item box-shadow rounded">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending1.jpg')}}" alt="image">
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 5 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Santorini, Oia</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(38)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="trending pb-0 pt-6 d-block d-sm-none d-lg-block" style="background-image: url(frontend/images/shape2.png);">
<div class="container">
<div class="section-title mb-6 w-75 mx-auto text-center">
<h4 class="mb-1 theme1">Top Deals</h4>
<h2 class="mb-1">The Last <span class="theme">Minute Deals</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="trend-box">
<div class="row">
<div class="col-lg-5 mb-4">
<div class="trend-item1 rounded box-shadow mb-4">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trendingb-2.jpg')}}" alt="image" class>
<div class="trend-content1 p-4">
<h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Norway</h5>
<h3 class="mb-1 white"><a href="{{url('/tour')}}" class="white">Norway Lake</a>
</h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">(16)</span>
</div>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author d-flex align-items-center">
<p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |
Per person</p>
</div>
<div class="entry-author">
<i class="icon-calendar white"></i>
<span class="fw-bold white"> 6 Days Tours</span>
</div>
</div>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="trend-item1 rounded box-shadow mb-4">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending-large.jpg')}}" alt="image" class>
<div class="trend-content1 p-4">
<h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Egpyt</h5>
<h3 class="mb-1 white"><a href="{{url('/tour')}}" class="white">Pyramid Land</a>
</h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">(16)</span>
</div>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author d-flex align-items-center">
<p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |
Per person</p>
</div>
<div class="entry-author">
<i class="icon-calendar white"></i>
<span class="fw-bold white"> 6 Days Tours</span>
</div>
</div>
</div>
<div class="overlay"></div>
</div>
</div>
<div class="trend-item1 rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trendingb-1.jpg')}}" alt="image" class>
<div class="trend-content1 p-4">
<h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Usa</h5>
<h3 class="mb-1 white"><a href="{{url('/tour')}}" class="white">New York
City</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2 white">(12)</span>
</div>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author d-flex align-items-center">
<p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $140.00</span> |
Per person</p>
</div>
<div class="entry-author">
<i class="icon-calendar white"></i>
<span class="fw-bold white"> 3 Days Tours</span>
</div>
</div>
</div>
<div class="overlay"></div>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-lg-6 col-md-6 mb-4 col-6">
<div class="trend-item rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending1.jpg')}}" alt="image" class>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative bg-white">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 4 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Spain</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Barcelona city beach</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(21)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
voluptate velit esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $220.00</span> | Per
person</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 mb-4 col-6">
<div class="trend-item rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending2.jpg')}}" alt="image" class>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative bg-white">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 7 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Indonesia</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Bali Province</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(11)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
voluptate velit esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $210.00</span> | Per
person</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 mb-4 col-6">
<div class="trend-item rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending3.jpg')}}" alt="image" class>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative bg-white">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 3 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Russia</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Red City Land</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(25)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
voluptate velit esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $120.00</span> | Per
person</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 mb-4 col-6">
<div class="trend-item rounded box-shadow">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending4.jpg')}}" alt="image" class>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative bg-white">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 5 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Bangladesh</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Cox's bazar Beach</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(32)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
voluptate velit esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $100.00</span> | Per
person</p>
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
</section>


<section class="discount-action pt-2" style="background-image:url(frontend/images/section-bg1.png); background-position:center;">
<div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
<div class="container">
<div class="call-banner rounded pt-10 pb-14">
<div class="call-banner-inner w-75 mx-auto text-center px-5">
<div class="trend-content-main">
<div class="trend-content mb-5 pb-2 px-5">
<h5 class="mb-1 theme">Love Where Your're Going</h5>
<h2><a href="{{ url('/tour') }}">Explore Your Life, <span class="theme1"> Travel Where
You Want!</span></a></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua.</p>
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
</section>


<section class="trending pb-0 pt-4">
<div class="container">
<div class="section-title mb-6 w-75 mx-auto text-center">
<h4 class="mb-1 theme1">Top Offers</h4>
<h2 class="mb-1">Special <span class="theme">Offers & Discount </span> Packages</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="trend-box">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6 mb-4 col-6 ">
<div class="trend-item rounded box-shadow bg-white">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending3.jpg')}}" alt="image" class>
<div class="ribbon ribbon-top-left"><span class="fw-bold">20% OFF</span></div>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Piazza Castello</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(12)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mb-4 col-6">
<div class="trend-item box-shadow rounded bg-white">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending1.jpg')}}" alt="image">
<div class="ribbon ribbon-top-left"><span class="fw-bold">30% OFF</span></div>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Santorini, Oia</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(38)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mb-4 col-6">
<div class="trend-item box-shadow rounded bg-white">
<div class="trend-image position-relative">
<img src="{{url('frontend/images/trending/trending2.jpg')}}" alt="image">
<div class="ribbon ribbon-top-left"><span class="fw-bold">15% OFF</span></div>
<div class="color-overlay"></div>
</div>
<div class="trend-content p-4 pt-5 position-relative">
<div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
<div class="entry-author">
<i class="icon-calendar"></i>
<span class="fw-bold"> 9 Days Tours</span>
</div>
</div>
<h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Maldives</h5>
<h3 class="mb-1"><a href="{{url('/tour')}}">Hurawalhi Island</a></h3>
<div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="ms-2">(18)</span>
</div>
<p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum</p>
<div class="entry-meta">
<div class="entry-author d-flex align-items-center">
<p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="our-team pb-6 d-none d-lg-block">
<div class="container">
<div class="section-title mb-6 w-75 mx-auto text-center">
<h4 class="mb-1 theme1">Tour Guides</h4>
<h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="team-main">
<div class="row shop-slider">
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
<div class="team-list rounded">
<div class="team-image">
<img src="{{url('frontend/images/team/img3.jpg')}}" alt="team">
</div>
<div class="team-content text-center p-3 bg-theme">
<h4 class="mb-0 white">Nelson Bam</h4>
<p class="mb-0 white">Quality Assurance</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
</div>
</div>
</div>
</section>


<section class="testimonial pt-9 d-none d-md-block" style="background-image:url(frontend/images/testimonial.png)">
<div class="container">
<div class="section-title mb-6 text-center w-75 mx-auto">
<h4 class="mb-1 theme1">Our Testimonails</h4>
<h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="row align-items-center">
<div class="col-lg-5 pe-4">
<div class="testimonial-image">
<img src="{{url('frontend/images/travel2.png')}}" alt>
</div>
</div>
<div class="col-lg-7 ps-4">
<div class="row review-slider">
<div class="col-sm-10 item">
<div class="testimonial-item1 rounded">
<div class="author-info d-flex align-items-center mb-4">
<img src="{{url('frontend/images/testimonial/img1.jpg')}}" alt>
<div class="author-title ms-3">
<h5 class="m-0 theme">Jared Erondu</h5>
<span>Supervisor</span>
</div>
</div>
<div class="details">
<p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy
text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
unde inventore quasi vero dolorem.</p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>



<section class="trending recent-articles pb-6">
<div class="container">
<div class="section-title mb-6 w-75 mx-auto text-center">
<h4 class="mb-1 theme1">Our Blogs Offers</h4>
<h2 class="mb-1">Recent <span class="theme">Articles & Posts</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
</p>
</div>
<div class="recent-articles-inner">
<div class="row">
<div class="col-lg-4 col-md-6 col-6">
<div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
<div class="trend-image">
<img src="{{url('frontend/images/trending/trending10.jpg')}}" alt="image">
</div>
<div class="trend-content-main p-4 pb-2">
<div class="trend-content">
<h5 class="theme mb-1">Technology</h5>
<h4><a href="{{ url('/blog-detail') }}">How a developer duo at Deutsche Bank keep remote
alive.</a></h4>
<p class="mb-3">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
</p>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author mb-2 d-none d-md-block">
<img src="{{url('frontend/images/reviewer/2.jpg')}}" alt class="rounded-circle me-1">
<span>Sollmond Nell</span>
</div>
<div class="entry-button d-flex align-items-centermb-2">
<a href="#" class="nir-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
<div class="trend-image">
<img src="{{url('frontend/images/trending/trending12.jpg')}}" alt="image">
</div>
<div class="trend-content-main p-4 pb-2">
<div class="trend-content">
<h5 class="theme mb-1">Inspiration</h5>
<h4><a href="{{ url('/blog-detail') }}">Inspire Runner with Autism Graces of Women's Running</a>
</h4>
<p class="mb-3">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
</p>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author mb-2 d-none d-md-block">
<img src="{{url('frontend/images/reviewer/1.jpg')}}" alt class="rounded-circle me-1">
<span>David Scott</span>
</div>
<div class="entry-button d-flex align-items-center mb-2">
<a href="#" class="nir-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
<div class="trend-image">
<img src="{{url('frontend/images/trending/trending13.jpg')}}" alt="image">
</div>
<div class="trend-content-main p-4 pb-2">
<div class="trend-content">
<h5 class="theme mb-1">Public</h5>
<h4><a href="{{ url('/blog-detail') }}">Services To Grow Your Business Sell Affiliate
Products</a></h4>
<p class="mb-3">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
</p>
<div class="entry-meta d-flex align-items-center justify-content-between">
<div class="entry-author mb-2 d-none d-md-block ">
<img src="{{url('frontend/images/reviewer/3.jpg')}}" alt class="rounded-circle me-1">
<span>John Bolden</span>
</div>
<div class="entry-button d-flex align-items-center mb-2">
<a href="#" class="nir-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection

