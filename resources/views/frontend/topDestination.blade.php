@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Top Destination List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
                <h2 class="mb-1">Explore<span class="theme">Top Destinations</span></h2>
                <p>Discover-Connect-Explore ..this is what we believe ..Find your favourite place. Gather information  , book Guides or Just go..</p>
            </div>
            <div class="row align-items-center">
                @foreach ($places as $place)
                <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="{{ $place->imageURL ? asset('storage/' . $place->imageURL) : '' }}" alt="travelMateImage">
                            <div
                                class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h3 class="mb-0 white"><a href="{{route('tourSingle' , $place->id)}}" class="theme1">{{$place->name}}</a>
                                    </h3>
                                    <h5 class="mb-0 text-white">{{$place->country}}</h5>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded d-none d-sm-block">{{$place->minDuration}} Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="discount-action pt-0"
        style="background-image:url({{asset('frontend/images/section-bg1.png')}}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="{{ route('home') }}">Explore Your Life, <span class="theme1"> Travel
                                        Where You Want!</span></a></h2>
                            <p>Discover-Connect-Explore ..this is what we believe ..Find your favourite place. Gather information  , book Guides or Just go...</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
                                    <a href="{{ route('home') }}">Explore</a>
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
        <div class="section-shape  top-inherit bottom-0" style="background-image: url({{asset('frontend/images/shape6.png')}});"></div>
    </section>
@endsection
