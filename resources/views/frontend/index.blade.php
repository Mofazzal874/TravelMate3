@extends('frontend.layouts.main')
@section('title')
    TravelMate - Home
@endsection
@section('styles')
    <style>
        .btn-light-green {
            background-color: lightgreen;
            color: white;
        }

        .btn-light-green:hover {
            background-color: green;
            color: white;
        }
    </style>
@endsection
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
                            <img src="{{ url('frontend/images/travel.png') }}" alt>
                        </div>
                    </div>
                </div>
                <div class="category-main-inner border-t pt-1 ">
                    <div class="row side-slider">
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/004-camping-tent.png') }}"
                                        class="mb-1 d-inline-block" alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Camping</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content text-center">
                                    <img src="{{ url('frontend/images/icons/003-hiking.png') }}" class="mb-1 d-inline-block"
                                        alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Hiking</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/005-sunbed.png') }}" class="mb-1 d-inline-block"
                                        alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Beach Tours</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/008-cycling.png') }}"
                                        class="mb-1 d-inline-block" alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Biking</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/006-surf.png') }}" class="mb-1 d-inline-block"
                                        alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Surfing</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/002-safari.png') }}"
                                        class="mb-1 d-inline-block" alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Safari</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="{{ url('frontend/images/icons/008-cycling.png') }}"
                                        class="mb-1 d-inline-block" alt>
                                    <h4 class="mb-0"><a href="{{ url('/tour') }}">Cycling</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                <img src="{{ url('frontend/images/icons/007-hiking-1.png') }}"
                                    class="mb-1 d-inline-block" alt>
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

    <section class="about-us pb-6 pt-6"
        style="background-image:url(frontend/images/shape4.png); background-position:center;">
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

    {{-- // Top Destinations --}}
    <section class="trending pb-5 pt-0">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Top Destinations</h4>
                <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- Slider integration starts here -->
                    <div class="slider-container">
                        <div class="slide">
                            @foreach ($topDestinations as $destination)
                                <div class="item"
                                    style="background-image: url({{ $destination->imageURL ? asset('storage/' . $destination->imageURL) : '' }});">
                                    <div class="content">
                                        <div class=" bg-theme white px-3 py-1 rounded d-none d-sm-block"
                                            style="width: 10rem">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"> {{ $destination->minDuration }} Days Tours</span>
                                            </div>
                                        </div>
                                        <div class="name theme1 mb-1">{{ $destination->name }}</div>
                                        <h3 style="color: white">{{ $destination->country }} </h3>
                                        <div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
                                            <div class="rating">
                                                @php
                                                    $rating = (float) $destination->rating;
                                                @endphp
                                                @for ($i = 0; $i < (int) $rating; $i++)
                                                    <span class="fa fa-star checked"></span>
                                                @endfor
                                            </div>
                                            <span class="ms-2">({{ $rating }} Rated Yet)</span>
                                        </div>
                                        <div class="des" style="font-weight: bold;color:beige">
                                            {{ $destination->description }}</div>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center"
                                                style="margin-bottom: 3rem">
                                                <p class="mb-0"><span
                                                        class="theme fw-bold fs-5">{{ $destination->price }} </span> | Per
                                                    person
                                                </p>
                                            </div>
                                        </div>
                                        <a href="{{ route('tourSingle', ['id' => $destination->id]) }}"><button>See
                                                More</button></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-button">
                            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <!-- Slider integration ends here -->
                </div>
            </div>
        </div>
    </section>



    {{-- //Get to know us --}}
    <section class="about-us pt-0" style="background-image:url(frontend/images/bg/bg-trans.png);">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image overflow-hidden">
                            <img src="{{ url('frontend/images/travel1.png') }}" alt>
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



    {{-- // Best Deal Destinations --}}
    <section class="trending pb-0 pt-6 d-block d-sm-none d-lg-block"
        style="background-image: url(frontend/images/shape2.png);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="section-title mb-6 w-75 mx-auto text-center">
                    <h4 class="mb-1 theme1">Top Deals</h4>
                    <h2 class="mb-1">The Last <span class="theme">Minute Deals</span></h2>
                    <p>These destination are one of the best But you can get them a lowest price possible...choose your
                        destination and book it..</p>
                </div>
                <a href="{{ route('bestDestination.tour') }}" class="btn btn-light-green rounded-pill text-white" style="color: #029e9d;">See
                    All</a>
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        @for ($i = 0; $i <3; $i++)
                            @if (isset($topOffers[$i]))
                                <div class="trend-item1 rounded box-shadow mb-4">
                                    <div class="trend-image position-relative">
                                        <img src="{{ $topOffers[$i]->imageURL ? asset('storage/' . $topOffers[$i]->imageURL) : '' }}"
                                            alt="image" class>
                                        <div class="trend-content1 p-4">
                                            <h5 class="theme1 mb-1"><i
                                                    class="flaticon-location-pin"></i>{{ $topOffers[$i]->country }}</h5>
                                            <h3 class="mb-1 white"><a
                                                    href="{{ route('tourSingle', ['id' => $topOffers[$i]->id]) }}"
                                                    class="white">{{ $topOffers[$i]->name }}</a></h3>
                                            <div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
                                                <div class="rating">
                                                    @php
                                                        $rating = (float) $topOffers[$i]->rating;
                                                    @endphp
                                                    @for ($j = 0; $j < (int) $rating; $j++)
                                                        <span class="fa fa-star checked"></span>
                                                    @endfor
                                                </div>
                                                <span class="ms-2">({{ $rating }} Rated Yet)</span>
                                            </div>
                                            <div class="entry-meta d-flex align-items-center justify-content-between">
                                                <div class="entry-author d-flex align-items-center">
                                                    <p class="mb-0 white"><span
                                                            class="theme1 fw-bold fs-5">${{ $topOffers[$i]->price }}</span>
                                                        | Per person</p>
                                                </div>
                                                <div class="entry-author">
                                                    <i class="icon-calendar white"></i>
                                                    <span class="fw-bold white">{{ $topOffers[$i]->minDuration }} Days
                                                        Tours</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            @for ($i = 3; $i < 7; $i++)
                                @if (isset($topOffers[$i]))
                                    <div class="col-lg-6 col-md-6 mb-4 col-6">
                                        <div class="trend-item rounded box-shadow">
                                            <div class="trend-image position-relative">
                                                <img src="{{ $topOffers[$i]->imageURL ? asset('storage/' . $topOffers[$i]->imageURL) : '' }}"
                                                    alt="image" class>
                                                <div class="color-overlay"></div>
                                            </div>
                                            <div class="trend-content p-4 pt-5 position-relative bg-white">
                                                <div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
                                                    <div class="entry-author">
                                                        <i class="icon-calendar"></i>
                                                        <span class="fw-bold">{{ $topOffers[$i]->minDuration }} Days
                                                            Tours</span>
                                                    </div>
                                                </div>
                                                <h5 class="theme mb-1"><i
                                                        class="flaticon-location-pin"></i>{{ $topOffers[$i]->country }}
                                                </h5>
                                                <h3 class="mb-1"><a
                                                        href="{{ route('tourSingle', ['id' => $topOffers[$i]->id]) }}">{{ $topOffers[$i]->name }}</a>
                                                </h3>
                                                <div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
                                                    <div class="rating">
                                                        @php
                                                            $rating = (float) $topOffers[$i]->rating;
                                                        @endphp
                                                        @for ($j = 0; $j < (int) $rating; $j++)
                                                            <span class="fa fa-star checked"></span>
                                                        @endfor
                                                    </div>
                                                    <span class="ms-2">({{ $rating }} Rated Yet)</span>
                                                </div>
                                                <p class="border-b pb-2 mb-2">{{ $topOffers[$i]->description }}</p>
                                                <div class="entry-meta">
                                                    <div class="entry-author d-flex align-items-center">
                                                        <p class="mb-0"><span
                                                                class="theme fw-bold fs-5">{{ $topOffers[$i]->price }}tk</span>
                                                            | Per person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Love Where You're Going --}}
    <section class="discount-action pt-2"
        style="background-image:url(frontend/images/section-bg1.png); background-position:center;">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(frontend/images/shape8.png);"></div>
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
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
                                    <a href="{{route('generalDestination.tour')}}">Explore</a>
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

    {{-- General Destinations --}}
    <section class="trending pb-0 pt-4">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">All Types of Places</h4>
                <h2 class="mb-1">These<span class="theme">Are Generally Visited</span> Places</h2>
                <p>Get Details , Book , connect and Go....</p>
                </p>
                <a href="{{ route('generalDestination.tour') }}" class="btn btn-light-green rounded-pill text-white" style="color: #029e9d;">See
                    All</a>
            </div>
            
            <div class="trend-box">
                <div class="row">
                    @for ($i = 0; $i <3; $i++)
                            @if (isset($generalDestinations[$i]))
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 col-6 ">
                                    <div class="trend-item rounded box-shadow bg-white">
                                        <div class="trend-image position-relative">
                                            <img src="{{ $topOffers[$i]->imageURL ? asset('storage/' . $topOffers[$i]->imageURL) : '' }}" alt="trvelMateImage" class>
                                            <div class="ribbon ribbon-top-left"><span class="fw-bold">{{ rand(10, 70) }}% OFF</span></div>
                                            <div class="color-overlay"></div>
                                        </div>
                                        <div class="trend-content p-4 pt-5 position-relative">
                                            <div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-sm-block">
                                                <div class="entry-author">
                                                    <i class="icon-calendar"></i>
                                                    <span class="fw-bold"> {{$generalDestinations[$i]->minDuration}} Days Tours</span>
                                                </div>
                                            </div>
                                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i>{{$generalDestinations[$i]->country}}</h5>
                                            <h3 class="mb-1"><a href="{{ route('tourSingle', ['id' => $generalDestinations[$i]->id]) }}">{{$generalDestinations[$i]->name}}</a></h3>
                                            <div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
                                                <div class="rating">
                                                    @php
                                                        $rating = (float) $generalDestinations[$i]->rating;
                                                    @endphp
                                                    @for ($j = 0; $j < (int) $rating; $j++)
                                                        <span class="fa fa-star checked"></span>
                                                    @endfor
                                                </div>
                                                <span class="ms-2">({{ $rating }} Rated Yet)</span>
                                            </div>
                                            <p class=" border-b pb-2 mb-2">{{$generalDestinations[$i]->description}}</p>
                                            <div class="entry-meta">
                                                <div class="entry-author d-flex align-items-center">
                                                    <p class="mb-0"><span class="theme fw-bold fs-5"> {{$generalDestinations[$i]->price}}</span> | Per person
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endfor
                    
                </div>
            </div>
        </div>
    </section>

    {{-- Tour Guides --}}
   <section class="our-team pb-6 d-none d-lg-block">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Tour Guides</h4>
            <h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
            <p>They are actually world one of the best 100 100 TourGuides...they are very friendly and helpful to
                you...Only they can make your tour more than imaginably beautiful...and they are important for your survival 
            </p>
            <a href="{{ route('tourGuide') }}" class="btn btn-light-green rounded-pill text-white" style="color: #029e9d;">See
                All</a>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                @for ($i = 0; $i < 7; $i++)
                    @if (isset($tourGuides[$i]))
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="team-list rounded">
                                <div class="team-image">
                                    <img src="{{ $tourGuides[$i]->image ? asset('storage/' . $tourGuides[$i]->image) : '' }}" alt="trvelMateImage" >
                                </div>
                                <div class="team-content text-center p-3 bg-theme">
                                    <h4 class="mb-1 white"><a href="{{ route('tourGuideSingle', ['id' => $tourGuides[$i]->id]) }}">{{ $tourGuides[$i]->name }}</a></h4>
                                    <p class="mb-0 white">{{ $tourGuides[$i]->experience }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</section>



    {{-- Blogs --}}
@endsection
