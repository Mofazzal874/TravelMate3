@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('frontend/images/bg/bg1.jpg') }});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{ asset('frontend/images/shape8.png') }});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Booking</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
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
                <div class="col-lg-8 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-4">
                                <h3 class="border-b pb-2 mb-2">Traveller Information</h3>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" style="text-green;">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                {{-- passsing the tourGuide_id to the submitBookingForm method --}}
                                <form action="{{route('tourGuide.storeForm' , ['id'=>$id])}}" method="POST" class="mb-2">
                                    @csrf
                                    <h5>Let us know who you are</h5>
                                    {{-- hidden input field to store the tourGuide_id --}}
                                    {{-- <input type="hidden" name="tourGuide_id" value="{{ $id }}"> --}}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group mb-2">
                                                <label>First Name</label>
                                                <input type="text" name="f_name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group mb-2">
                                                <label>Last Name</label>
                                                <input type="text" name="l_name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Phone</label>
                                                <input type="text" name="phone" placeholder="Phone No." required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="input-box">
                                                    <select class="niceSelect" name="gender" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-2">
                                                <label>DOB</label>
                                                <div class="input-box">
                                                    <input id="date-range" type="date" name="dob" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Country</label>
                                                <input type="text" name="country" placeholder="Country" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>City</label>
                                                <input type="text" name="city" placeholder="City" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Address Line 1</label>
                                                <input type="text" name="address_line1" placeholder="Address line 1"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Address Line 2</label>
                                                <input type="text" name="address_line2" placeholder="Address line 2">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Submit button -->
                                    <div class="form-group">
                                        <button type="submit" class="nir-btn float-lg-end w-25">Book Now</button>
                                    </div>
                                </form>
                            </div>

                            <div class="customer-information mb-4 d-flex align-items-center bg-grey rounded p-4">
                                <i class="fa fa-grin-wink rounded fs-1 bg-theme white p-3 px-4"></i>
                                <div class="customer-info ps-4">
                                    <h6 class="mb-1">Good To Know:</h6>
                                    <small>Free Cancellation before 7 days of the booking being approved by the
                                        tourGuide</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- place and tourGuide details --}}
                <div class="col-lg-4 mb-4 ps-ld-4">
                    <div class="sidebar-sticky">
                        {{-- //place details --}}
                        <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                            <h4>Your Booking Details</h4>
                            <div class="trend-full border-b pb-2 mb-2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="trend-item2 rounded">
                                            <a href="destination-single1.html/index.html"
                                                style="background-image: url({{$place->imageURL ? asset('storage/' . $place->imageURL) : ''}});"></a>
                                            <div class="color-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 ps-0">
                                        <div class="trend-content position-relative">
                                            <div class="rating mb-1">
                                                @php
                                                $rating = (float) $place->rating;
                                            @endphp
                                            @for ($i = 0; $i < (int) $rating; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                                <small>({{ $rating }} Rated)</small>
                                            </div>
                                            <h5 class="mb-1"><a href="grid-leftfilter.html/index.html">{{ $place->placeType }}-{{ $place->name }}</a></h5>
                                            <h6 class="theme mb-0"><i class="icon-location-pin"></i> {{$place->city}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-check border-b pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                            <p class="mb-0">Last Update:</p>
                                            <h6 class="mb-0">{{$place->updated_at}}</h6>
                                            <small>{{$place->opening_hours}}AM - {{$place->closing_hours}}PM</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                            <p class="mb-0">Price Last update:</p>
                                            <h6 class="mb-0">{{$place->price}}</h6>
                                            <small>{{$place->updated_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-check border-b pb-2 mb-2">
                                <p class="mb-0">Minimum Time of cover:</p>
                                <h6 class="mb-0">{{ (int)$place->minDuration + 1 }} Days | {{$place->minDuration}} Nights  </h6>
                                <small><a href="{{$place->website}}" class="theme text-decoration-underline">Have a look to the places website</a></small>
                            </div>
                            <div class="trend-check">
                                <p class="mb-0">Contact:</p>
                                <h6 class="mb-0">Phone: <span class="float-end fw-normal">{{$place->phone}}</span> </h6>
                            </div>
                        </div>
                        {{-- //tourGuide details --}}
                        <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                            <h4>Your TourGuide Summary</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td> Guide Fee:</td>
                                        <td class="theme2">{{$tourGuide->price}}tk</td>
                                    </tr>
                                    <tr>
                                        <td>Tourist Capacity(In person)</td>
                                        <td class="theme2">{{$tourGuide->tourist_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tour Type</td>
                                        <td class="theme2">{{$tourGuide->tour_type}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tax & Misc.</td>
                                        <td class="theme2">Free</td>
                                    </tr>
                                    <tr>
                                        <td>Rating:</td>
                                        <td class="theme2">{{$tourGuide->rating}}</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-title">
                                    <tr>
                                        <th class="font-weight-bold white">Amount Payable:</th>
                                        <th class="font-weight-bold white">{{$tourGuide->price}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                            <h4>Your Payment Schedule</h4>
                            <p class="mb-0">Before you book me , you'll pay <span class="float-end">{{$tourGuide->price}} tk</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="discount-action pt-0"
        style="background-image:url({{ asset('frontend/images/section-bg1.png') }}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="detail-fullwidth.html/index.html">Explore Your Life, <span class="theme1"> Travel
                                        Where You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
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
        <div class="section-shape  top-inherit bottom-0"
            style="background-image: url({{ asset('frontend/images/shape6.png') }});"></div>
    </section>
@endsection
