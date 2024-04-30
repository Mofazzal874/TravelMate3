@extends('frontend.layouts.main')

@section('main-container')

<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Destination List</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Destination Lists</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="trending pb-0 pt-6">
    <div class="container">
    <div class="section-title mb-6 w-50 mx-auto text-center">
    <h4 class="mb-1 theme1">Top Destinations</h4>
    <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination17.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Italy</a></h5>
    <h3 class="mb-0 white">Caspian Valley</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">18 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination14.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Tokyo</a></h5>
    <h3 class="mb-0 white">Japan</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">21 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination15.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Moscow</a></h5>
    <h3 class="mb-0 white">Russia</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">15 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination5.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Bangkok</a></h5>
    <h3 class="mb-0 white">Thailand</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">24 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination16.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Florida</a></h5>
    <h3 class="mb-0 white">America</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">32 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination4.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Bali</a></h5>
    <h3 class="mb-0 white">Indonesia</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">14 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination10.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Italy</a></h5>
    <h3 class="mb-0 white">Caspian Valley</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">18 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination11.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Tokyo</a></h5>
    <h3 class="mb-0 white">Japan</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">21 Tours</span>
    </div>
    <div class="color-overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
    <div class="trend-item1">
    <div class="trend-image position-relative rounded">
    <img src="{{url('frontend/images/destination/destination7.jpg')}}" alt="image">
    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
    <div class="trend-content-title">
    <h5 class="mb-0"><a href="{{url('/destination-detail')}}" class="theme1">Moscow</a></h5>
    <h3 class="mb-0 white">Russia</h3>
    </div>
    <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">15 Tours</span>
    </div>
    <div class="color-overlay"></div>
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
