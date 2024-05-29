@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">
                        @if($isAllGuides)
                            TourGuides List
                        @else
                            TourGuides for the  Area
                        @endif
                    </h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                @if($isAllGuides)
                                    Find Desired Tour Guide
                                @else
                                    Tour Guides for the Selected Area
                                @endif
                            </li>
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
                <h4 class="mb-1 theme1">Tour Guides</h4>
                <h2 class="mb-1">Find <span class="theme">Your Desired TourGuide</span></h2>
                <p>To make the journey more enjoyable, calculative, decisive and safe.</p>
            </div>
            <div class="row align-items-center">
                @foreach($tourGuides as $tg)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ $tg->user->image ? asset('storage/' . $tg->user->image) : '' }}" alt="travelMateImage">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-1 white">
                                    <a href="{{ route('tourGuideSingle', ['id' => $tg->user->id]) }}">
                                        {{ $tg->user->name }}
                                    </a>
                                </h4>
                                <p class="mb-0 white">{{ $tg->experience }}</p>
                                <p class="mb-0 white">{{ $tg->user->bio }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="discount-action pt-0" style="background-image:url({{asset('frontend/images/section-bg1.png')}}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where You're Going</h5>
                            <h2><a href="{{route('home')}}">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                    <a href="{{ route('allDestination') }}">Explore</a>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="section-shape top-inherit bottom-0" style="background-image: url({{asset('frontend/images/shape6.png')}});"></div>
    </section>
@endsection
