@extends('frontend.layouts.main')

@section('main-container')

<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Gallery One</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery One</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <div class="gallery pt-6 pb-0">
    <div class="container">
    <div class="section-title mb-6 text-center w-75 mx-auto">
    <h4 class="mb-1 theme1">Our Gallery</h4>
    <h2 class="mb-1">Some Beautiful <span class="theme">Snapshoots</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/trending/trending1.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Barcelona - Spain</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending1.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/trending/trending2.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Beijing - China</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending2.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/trending/trending3.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Moscow - Russia</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending3.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/trending/trending4.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending4.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/trending/trending8.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">FLorida - USA</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending5.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/destination/destination14.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Tokyo - Japan</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending6.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/destination/destination7.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bali - Indonesia</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending7.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/destination/destination6.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending8.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
    <div class="gallery-item mb-4 rounded overflow-hidden">
    <div class="gallery-image">
    <img src="{{url('frontend/images/destination/destination4.jpg')}}" alt="image">
    </div>
    <div class="gallery-content">
    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
    <ul>
    <li><a href="{{url('frontend/images/trending/trending8.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
    <li><a href="#"><i class="fa fa-link"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
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
