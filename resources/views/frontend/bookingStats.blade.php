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
                            <li class="breadcrumb-item active" aria-current="page">Booking Informations</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    {{-- //Booking Information --}}
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-4">
                                <h3 class="border-b pb-2 mb-2">Traveller Information</h3>
                                @if (Session::has('success'))
                                    <div class="alert alert-success" style="text-green;">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('tourGuide.updateForm', ['id' => $booking->id])}}" method="POST" enctype="multipart/form-data" class="mb-2">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group mb-2">
                                                <label>First Name</label>
                                                <input type="text" name="f_name" id="f_name" value="{{ old('f_name', $booking->f_name) }}" required>
                                                @error('f_name')
                                                    <span id="f_nameError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group mb-2">
                                                <label>Last Name</label>
                                                <input type="text" name="l_name" value="{{ old('l_name', $booking->l_name) }}" required>
                                                @error('l_name')
                                                    <span id="l_nameError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Email</label>
                                                <input type="email" name="email" value="{{ old('email', $booking->email) }}" required>
                                                @error('email')
                                                    <span id="emailError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{ old('phone', $booking->phone) }}" required>
                                                @error('phone')
                                                    <span id="phoneError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <div class="input-box">
                                                    <select class="niceSelect" name="gender" required>
                                                        <option value="" {{ old('gender', $booking->gender) == '' ? 'selected' : '' }}>Select Gender</option>
                                                        <option value="Male" {{ old('gender', $booking->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ old('gender', $booking->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                                    </select>
                                                </div>
                                                @error('gender')
                                                    <span id="genderError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group mb-2">
                                                <label>DOB</label>
                                                <div class="input-box">
                                                    <input id="date-range" type="date" name="dob" value="{{ old('dob', $booking->dob) }}" required>
                                                </div>
                                                @error('dob')
                                                    <span id="dobError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Country</label>
                                                <input type="text" name="country" value="{{ old('country', $booking->country) }}" required>
                                                @error('country')
                                                    <span id="countryError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>City</label>
                                                <input type="text" name="city" value="{{ old('city', $booking->city) }}" required>
                                                @error('city')
                                                    <span id="cityError" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Address Line 1</label>
                                                <input type="text" name="address_line1" value="{{ old('address_line1', $booking->address_line1) }}" required>
                                                @error('address_line1')
                                                    <span id="address_line1Error" class="text-red-600">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Address Line 2</label>
                                                <input type="text" name="address_line2" value="{{ old('address_line2', $booking->address_line2) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Booking Status</label>
                                                <input type="text" name="address_line2" value="{{ $booking->booking_status }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label>Payment Status</label>
                                                <input type="text" name="address_line2" value="{{ $booking->payment_status }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-terms border-t pt-3 mt-3">
                                        <button type="submit" class="nir-btn float-lg-end w-25">Update</button>
                                        <br>
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
                            {{-- @if ($booking->booking_status == 'approved') --}}
                            <div class="customer-information card-information">
                                <h3 class="border-b pb-2 mb-2">How do you want to pay?</h3>
                                <div class="trending-topic-main">

                                    <ul class="nav nav-tabs nav-pills nav-fill w-50" id="postsTab1" role="tablist">
                                        <li class="nav-item m-0" role="presentation">
                                            <button aria-controls="paypal" aria-selected="true" class="nav-link active"
                                                data-bs-target="#paypal" data-bs-toggle="tab" id="paypal-tab"
                                                role="tab" type="button">Digital Payment</button>
                                        </li>
                                        {{-- <li class="nav-item me-2 ms-0" role="presentation">
                                            <button aria-controls="card" aria-selected="false" class="nav-link"
                                                data-bs-target="#card" data-bs-toggle="tab" id="card-tab"
                                                role="tab" type="button">Credit/Debit card</button>
                                        </li> --}}

                                    </ul>

                                    <div class="tab-content" id="postsTabContent1">
                                        
                                        {{-- //Debit/Credit card payment method is not implemented yet --}}

                                        {{-- <div aria-labelledby="card-tab" class="tab-pane fade" id="card"
                                            role="tabpanel">
                                            <form>
                                                <h5 class="mb-2 border-b pb-2"><i class="fa fa-credit-card"></i> Credit
                                                    Card</h5>
                                                <h5 class="mb-2 border-b pb-2"><i class="fa fa-credit-card"></i> Eita kori nai ekhono.Experimental ache ekhono.</h5>
                                                <div class="row align-items-center">
                                                    <div class="col-md-8">
                                                        <div class="card-detail">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label>Card Holder Number</label>
                                                                        <input type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label>Card Number</label>
                                                                        <input type="text"
                                                                            placeholder="**** **** **** ****">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group mb-2">
                                                                        <label>Expiry Date</label>
                                                                        <input type="text" placeholder=" Expiry Date">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>CVC/CVV</label>
                                                                        <input type="text" placeholder="CVC/CVV">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="{{ asset('frontend/images/cc.png') }}" alt
                                                            class="rounded">
                                                    </div>
                                                </div>
                                            </form>
                                        </div> --}}

                                        {{-- //Digital Payment Method--SSLCommerz --}}
                                        <div aria-labelledby="paypal-tab" class="tab-pane fade active show"
                                            id="paypal" role="tabpanel">
                                            <div class="paypal-card">
                                                <h5 class="mb-2 border-b pb-2"><i class="fab fa-paypal"></i> SSLCommerz</h5>
                                                <ul class>
                                                    <li class="d-block">To make the payment process secure and complete you
                                                        will be redirected to SSLCommerz.</li>
                                                    <li class="d-block">
                                                        <a href class="theme">Checkout via SSLCommerz. <i
                                                                class="fa fa-long-arrow-alt-right"></i></a>
                                                    </li>
                                                    <li class="d-block">The total Amount you will be charged is: <span
                                                            class="fw-bold theme">{{$tourGuide->price}} Tk.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-terms border-t pt-3 mt-3">
                                    <form class="d-lg-flex align-items-center">
                                        <div class="form-group mb-2 w-75">
                                            <input type="checkbox"> By continuing, you agree to the <a
                                                href="#">Terms and Conditions.</a>
                                        </div>
                                        <a href="#" class="nir-btn float-lg-end w-25">Proceed</a>
                                        
                                    </form>
                                </div>
                                <br>
                            </div>
                            {{-- @endif --}}
                            {{-- @if ($booking->payment_status == 'paid') --}}
                            <div class="customer-information card-information">
                                <div class="alert alert-success">
                                    Your booking is approved. Please contact your tour guide through phone, email, or the
                                    message section on our website.
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                {{-- //place and tourGuide details --}}
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
    {{-- //Love where you're going --}}
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
