@extends('frontend.layouts.main')

@section('main-container')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Bangkok - Thailand</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Destination Detail</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="trending pt-6 pb-0 bg-lgrey">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="single-content">
    <div id="highlight" class="mb-4">
    <div class="single-full-title border-b mb-2 pb-2">
    <div class="single-title">
    <h2 class="mb-1">Bangkok Thailand</h2>
    <div class="rating-main d-flex align-items-center">
    <p class="mb-0 me-2"><i class="icon-location-pin"></i> Greater London, United Kingdom</p>
    <div class="rating me-2">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </div>
    <span>(1,186 Reviews)</span>
    </div>
    </div>
    </div>
    <div class="description-images mb-4">
    <img src="{{url('frontend/images/trending/trending-large.jpg')}}" alt class="w-100 rounded">
    </div>
    <div class="description mb-2">
    <h4>Description</h4>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
    <p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    </div>
    <div class="description d-md-flex">
    <div class="desc-box bg-grey p-4 rounded me-md-2 mb-2">
    <h5 class="mb-2">Price Includes</h5>
    <ul>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Air Fares</li>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> 3 Nights Hotel Accomodation</li>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Tour Guide</li>
    <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees</li>
    </ul>
    </div>
    <div class="desc-box bg-grey p-4 rounded ms-md-2 mb-2">
    <h4 class="mb-2">Departure & Return Location</h4>
    <ul>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Guide Service Fee</li>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Driver Service Fee</li>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Any Private Expenses</li>
    <li class="d-block"><i class="fa fa-close pink mr-1"></i> Room Service Fees</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="description mb-2">
    <h4 class="mb-2">Gallery</h4>
    <div class="services-image d-md-flex">
    <div class="me-md-2 rounded overflow-hidden mb-2"><img src="{{url('frontend/images/trending/trending5.jpg')}}" alt class="w-100"></div>
    <div class="ms-md-2 rounded overflow-hidden mb-2"><img src="{{url('frontend/images/trending/trending6.jpg')}}" alt class="w-100"></div>
    </div>
    </div>
    <div id="single-map" class="single-map mb-4">
    <h4>Map</h4>
    <div class="map rounded overflow-hidden">
    <div style="width: 100%">
    <iframe class=" rounded overflow-hidden" height="400" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    </div>
    </div>
    <div id="single-review" class="single-review mb-4">
    <h4>Average Reviews</h4>
    <div class="row d-flex align-items-center">
    <div class="col-lg-4 col-md-4">
    <div class="review-box bg-title text-center py-4 p-2 rounded">
    <h2 class="mb-1 white"><span>2.2</span>/5</h2>
    <h4 class="white mb-1">"Feel so much worst than thinking"</h4>
    <p class="mb-0 white font-italic">From 40 Reviews</p>
    </div>
    </div>
    <div class="col-lg-8 col-md-8">
    <div class="review-progress">
    <div class="progress-item mb-1">
    <p class="mb-0">Cleanliness</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    <span class="sr-only">40% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Facilities</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
    <span class="sr-only">30% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Value for money</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
    <span class="sr-only">60% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Service</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
    <span class="sr-only">20% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item">
    <p class="mb-0">Location</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
    <span class="sr-only">45% Complete</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div id="single-add-review" class="single-add-review">
    <h4>Write a Review</h4>
    <form>
    <div class="row">
    <div class="col-md-6">
    <div class="form-group mb-2">
    <input type="text" placeholder="Name">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group mb-2">
    <input type="email" placeholder="Email">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group mb-2">
    <textarea>Comment</textarea>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-btn">
    <a href="#" class="nir-btn">Submit Review</a>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    <div class="col-lg-4">
    <div class="sidebar-sticky">
    <div class="list-sidebar">
    <div class="author-news mb-4 border-all box-shadow p-5 text-center rounded">
    <div class="author-news-content">
    <div class="author-thumb mb-1">
    <img src="{{url('frontend/images/team/img2.jpg')}}" alt="author">
    </div>
    <div class="author-content">
    <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
    <p class="mb-2">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
    <div class="header-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f rounded"></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus-g rounded"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter rounded"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="sidebar-item mb-4">
    <h4 class>All Categories</h4>
    <ul class="sidebar-category">
    <li><a href="#">Travelling</a></li>
    <li><a href="#">Tour Position</a></li>
    <li><a href="#">Trip Landmark</a></li>
    <li class="active"><a href="#">Adventurous</a></li>
    <li><a href="#">Address and Map</a></li>
    <li><a href="#">Booking Requests</a></li>
    <li><a href="#">Wildlife Reservation</a></li>
    <li><a href="#">Top Destination</a></li>
    </ul>
    </div>
    <div class="sidebar-item mb-4">
    <h4 class>Tags</h4>
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
    <div class="sidebar-item mb-4">
    <div class="sidebar-image rounded overflow-hidden">
    <img src="{{url('frontend/images/destination/destination4.jpg')}}" alt>
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
