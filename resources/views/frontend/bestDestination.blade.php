@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(frontend/images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Best Destinations</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Explore All The Best places </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="list-results d-flex align-items-center justify-content-between">
                <div class="list-results-sort">
                    <p class="m-0">Showing 1-5 of 80 results</p>
                </div>
                <div class="click-menu d-flex align-items-center justify-content-between">
                    <div class="change-list me-2"><a href="tour-list.html"><i class="fa fa-bars rounded"></i></a></div>
                    <div class="change-grid f-active me-2"><a href="tour-grid.html"><i class="fa fa-th rounded"></i></a>
                    </div>
                    <div class="sortby d-flex align-items-center justify-content-between ml-2">
                        <select class="niceSelect">
                            <option value="1">Sort By</option>
                            <option value="2">Average rating</option>
                            <option value="3">Price: low to high</option>
                            <option value="4">Price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($places as $place)
                <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <div class="trend-item rounded box-shadow">
                        <div class="trend-image position-relative">
                            <img src="{{ $place->imageURL ? asset('storage/' . $place->imageURL) : '' }}" alt="travelMateImage" class>
                            <div class="color-overlay"></div>
                        </div>
                        <div class="trend-content p-4 pt-5 position-relative">
                            <div class="trend-meta bg-theme white px-3 py-2 rounded d-none d-md-block">
                                <div class="entry-author">
                                    <i class="icon-calendar"></i>
                                    <span class="fw-bold"> {{ $place->minDuration }} Days Tours</span>
                                </div>
                            </div>
                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i>{{ $place->country }}</h5>
                            <h3 class="mb-1"><a href="{{ route('tourSingle', ['id' => $place->id]) }}"">{{ $place->name }}</a></h3>
                            <div class="rating-main d-flex align-items-center pb-2 d-none d-sm-block ">
                                <div class="rating">
                                    @php
                                        $rating = (float) $place->rating;
                                    @endphp
                                    @for ($j = 0; $j < (int) $rating; $j++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                </div>
                                <span class="ms-2">({{ $rating }} Rated Yet)</span>
                            </div>
                            <p class=" border-b pb-2 mb-2">{{ $place->description }}</p>
                            <div class="entry-meta">
                                <div class="entry-author d-flex align-items-center">
                                    <p class="mb-0"><span class="theme fw-bold fs-5"> {{ $place->price }}</span> | Per person</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="discount-action pt-0"
        style="background-image:url(frontend/images/section-bg1.png); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where You're Going</h5>
                            <h2><a href="detail-fullwidth.html/index.html">Explore Your Life, <span class="theme1">Travel Where You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
                                    <a href="{{ url('home') }}">Explore</a>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(frontend/images/shape6.png);"></div>
    </section>
@endsection
