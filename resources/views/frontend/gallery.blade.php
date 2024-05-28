@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Gallery One</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
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
                <p>We collected some of the best picture in your Region...Explore and book them if you're satisfied...</p>
            </div>
            <div class="row">
                @for ($i = 0; $i < 2; $i++)
                    @if (isset($places[$i]))
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="gallery-item mb-4 rounded overflow-hidden">
                                <div class="gallery-image">
                                    <img src="{{$places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}" alt="travelMateImage">
                                </div>
                                <div class="gallery-content">
                                    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">
                                        {{$places[$i]->name}}-{{$places[$i]->city}}</h5>
                                    <ul>
                                        <li><a href="{{$places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}"
                                                data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="{{route('tourSingle' , $places[$i]->id)}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
                @for ($i = 2; $i <= 4; $i++)
                    @if (isset($places[$i]))
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="gallery-item mb-4 rounded overflow-hidden">
                                <div class="gallery-image">
                                    <img src="{{$places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}" alt="travelMateImage">
                                </div>
                                <div class="gallery-content">
                                    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">{{$places[$i]->name}}-{{$places[$i]->city}}
                                    </h5>
                                    <ul>
                                        <li><a href="{{$places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}"
                                                data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="{{route('tourSingle' , $places[$i]->id)}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
                @for ($i = 5; $i < count($places); $i++)
                    @if (isset($places[$i]))
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="gallery-item mb-4 rounded overflow-hidden">
                                <div class="gallery-image">
                                    <img src="{{ $places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}" alt="image">
                                </div>
                                <div class="gallery-content">
                                    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">{{ $places[$i]->name }}-{{ $places[$i]->city }}
                                    </h5>
                                    <ul>
                                        <li><a href="{{ $places[$i]->imageURL ? asset('storage/' . $places[$i]->imageURL) : '' }}"
                                                data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="{{ route('tourSingle', $places[$i]->id) }}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>

    {{-- Love Where Your're Going --}}
    <section class="discount-action pt-0"
        style="background-image:url({{ asset('frontend/images/section-bg1.png') }}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="{{ route('home') }}">Explore Your Life, <span class="theme1"> Travel
                                        Where You Want!</span></a></h2>
                            <p>Discover-Connect-Explore ..this is what we believe ..Find your favourite place. Gather
                                information , book Guides or Just go...</p>
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
        <div class="section-shape  top-inherit bottom-0"
            style="background-image: url({{ asset('frontend/images/shape6.png') }});"></div>
    </section>
@endsection
