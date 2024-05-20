@extends('frontend.layouts.main')

@section('main-container')
    <div class="banner trending overflow-hidden">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(frontend/images/shape8.png);"></div>
        <div class="banner-slide">
            <div class="row shop-slider">
                <div class="col-lg-4 p-0">
                    <div class="trend-item1 box-shadow bg-white text-center">
                        <div class="trend-image position-relative">
                            <img src="{{ url('frontend/images/new-deal/deal1.jpg') }}" alt="image" class>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="trend-item1 box-shadow bg-white text-center">
                        <div class="trend-image position-relative">
                            <img src="{{ url('frontend/images/new-deal/deal2.jpg') }}" alt="image" class>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="trend-item1 box-shadow bg-white text-center">
                        <div class="trend-image position-relative">
                            <img src="{{ url('frontend/images/new-deal/deal3.jpg') }}" alt="image" class>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="trend-item1 box-shadow bg-white text-center">
                        <div class="trend-image position-relative">
                            <img src="{{ url('frontend/images/new-deal/deal4.jpg') }}" alt="image" class>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="trend-item1 box-shadow bg-white text-center">
                        <div class="trend-image position-relative">
                            <img src="{{ url('frontend/images/new-deal/deal5.jpg') }}" alt="image" class>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-breadcrum position-absolute top-50 mx-auto w-50 start-50 text-center translate-middle">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-0 white">{{ $destination->name }}</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $destination->country }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div id="highlight">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1">
                                        {{ $destination->placeType }}-{{ $destination->name }},{{ $destination->city }}
                                    </h2>
                                    <div class="rating-main d-md-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i> {{ $destination->address }}
                                        </p>
                                        <div class="rating me-2">
                                            @php
                                                $rating = (float) $destination->rating;
                                            @endphp
                                            @for ($i = 0; $i < (int) $rating; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                        </div>
                                        <span class="ms-2">({{ $rating }} Rated Yet)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-images mb-4">
                                <img src="{{ url($destination->imageURL ? asset('storage/' . $destination->imageURL) : '') }}"
                                    alt class="w-100 rounded">
                            </div>
                            <div class="description mb-2">
                                <h4>Description</h4>
                                <p>{{ $destination->description }}</p>
                            </div>
                            <div class="tour-includes mb-4">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i>Minimum Duration
                                                of Tour: {{ $destination->minDuration }} Days</td>
                                            <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i>Place submitted
                                                at: {{ $destination->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+</td>
                                            <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : Any
                                                Type Of vehicle</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="description mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">Full Address Location</h5>
                                            <p class="mb-0">{{ $destination->address }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">Pricing: </h5>
                                            <p class="mb-0">{{ $destination->price }} Per Person</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">latitude</h5>
                                            <p class="mb-0">{{ $destination->latitude }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">Longitude</h5>
                                            <p class="mb-0">{{ $destination->longitude }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">Other Informations: </h5>
                                            <ul>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i>This Place is
                                                    Best For: {{ $destination->bestfor }}</li>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i>Rating
                                                    Acquired: {{ $destination->rating }}</li>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i>Tour Guide
                                                </li>
                                                <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2">
                                        <div class="desc-box bg-grey p-4 rounded">
                                            <h5 class="mb-2">Reach in Other ways: </h5>
                                            <ul>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i><b>phone
                                                        :</b> {{ $destination->phone }}</li>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i><b>Email
                                                        :</b> {{ $destination->email }} </li>
                                                <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i><b>phone
                                                        :</b> {{ $destination->website }}</li>
                                                <li class="d-block"><i class="fa fa-check pink mr-1"></i><b>postal code
                                                        :</b> {{ $destination->postal_code }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="description mb-4">
                                <h4>What to Expect</h4>
                                <h5>
                                    @if($destination->placeStatus == 0)
                                        Experience the beauty of this General Destination, offering a serene escape from the hustle and bustle of everyday life.
                                    @elseif($destination->placeStatus == 1)
                                        Discover the allure of this Top Destination, renowned for its breathtaking landscapes and vibrant culture. A must-visit spot for travelers seeking unforgettable experiences.
                                    @elseif($destination->placeStatus == 2)
                                        Explore this Best Deal Destination, offering unbeatable value for budget-conscious travelers without compromising on quality experiences.
                                    @endif
                                </h5>
                                <p>
                                    @if($destination->placeStatus ==0)
                                        Enjoy scenic views, tranquil surroundings, and a chance to immerse yourself in the local culture and traditions.
                                        Embark on an unforgettable journey to a General Adventure Tourist Place, where breathtaking landscapes and thrilling experiences await. Explore pristine wilderness, majestic mountains, and serene lakes, immersing yourself in the wonders of nature. Whether hiking through rugged trails or camping under starlit skies, every moment promises adventure and discovery.
                                    @elseif($destination->placeStatus == 1)
                                        Indulge in a myriad of activities, from hiking picturesque trails to sampling delicious cuisine and engaging with friendly locals.
                                        Discover the allure of a Top Adventure Tourist Destination, where every vista captivates with its grandeur. From towering peaks to cascading waterfalls, this destination epitomizes nature's magnificence. Renowned for its iconic landmarks and exhilarating activities, it beckons adventurers to explore its hidden treasures. Amidst the awe-inspiring landscapes, experience the thrill of a lifetime and create memories that will last forever.
                                    @elseif($destination->placeStatus == 2)
                                    Embark on an unforgettable journey to the Best Deal Adventure Tourist Destination, where adventure meets affordability. Nestled amidst breathtaking landscapes and cultural wonders, this hidden gem offers travelers an unparalleled experience without breaking the bank. Dive into thrilling escapades, immerse yourself in local traditions, and savor the charm of this budget-friendly paradise. Unravel the secrets of nature's bounty and relish every moment of this enriching adventure at an unbeatable value.
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{-- <div id="iternary" class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                            <h4>Itinerary</h4>
                            <div class=" active">
                                <div class="accrodion-title rounded">

                                    <h5 class="mb-0"><span>Day 1</span> - Kathmandu - Barceloma</h5>
                                </div>
                                <div class="accrodion-content py-2" style="display: block;">
                                    <div class="inner">
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Fly from
                                                Kathmandu to Barcelona </li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Arrive in
                                                Barcelona and check into your hotel</li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Take some
                                                time to relax and adjust to the new time zone</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="accrodion-title rounded">
                                    <h5 class="mb-0"><span>Day 2</span> Exploring Barcelona</h5>
                                </div>
                                <div class="accrodion-content  py-2" style="display: block;">
                                    <div class="inner">
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Start
                                                your day with a visit to the famous Sagrada Familia, a breathtaking basilica
                                                designed by Antoni Gaudí</li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Visit La
                                                Rambla, Barcelona's most famous street, known for its lively atmosphere,
                                                street performers, and shops </li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Enjoy a
                                                delicious dinner at a traditional Catalan restaurant </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="accrodion-title rounded">
                                    <h5 class="mb-0"><span>Day 3</span> Day Trip to Montserrat </h5>
                                </div>
                                <div class="accrodion-content  py-2" style="display: block;">
                                    <div class="inner">
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Explore
                                                the Montserrat Monastery, home to the Black Madonna, a revered statue</li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Visit the
                                                Museum of Montserrat to learn about the history and art of the area </li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Return to
                                                Barcelona in the evening and relax at your hotel </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="accrodion-title rounded">
                                    <h5 class="mb-0"><span>Day 4</span> Barcelona City Tour </h5>
                                </div>
                                <div class="accrodion-content  py-2" style="display: block;">
                                    <div class="inner">
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Start the
                                                day with a visit to Casa Batlló, another architectural gem by Gaudí, known
                                                for its colorful façade</li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> In the
                                                evening, experience the vibrant nightlife of Barcelona in the trendy
                                                district of El Born or the beachfront area of Barceloneta</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="accrodion-title rounded">
                                    <h5 class="mb-0"><span>Day 5</span> Beaches and Shopping </h5>
                                </div>
                                <div class="accrodion-content  py-2" style="display: block;">
                                    <div class="inner">
                                        <ul>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Spend the
                                                morning relaxing at one of Barcelona's beautiful beaches</li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Enjoy
                                                some water activities </li>
                                            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> End your
                                                trip with a delicious Catalan dinner and reflect on your wonderful time in
                                                Barcelona </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <h4 class="my-auto">Itinery Sample</h4>
                                <div class="form-btn mx-3">
                                    <a href="{{ url('frontend/images/itinery.png') }}" class="nir-btn"
                                        download>Download</a>
                                </div>
                            </div>

                        </div> --}}

                        {{-- <div id="single-map" class="single-map mb-4">
                            <h4>Map</h4>
                            <div class="map rounded overflow-hidden">
                                <div style="width: 100%">
                                    <iframe class=" rounded overflow-hidden" height="400"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div> --}}

                        {{-- //Booking section --}}
                        <div id="booking" class="single-booking mb-4">
                            <h4>Booking Section:</h4>
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <h4 class="my-auto">Book a TourGuide in this Area</h4>
                                    <div class="form-btn mt-2">
                                        <a href="{{route('tourGuideForAPlace' , $destination->id)}}" class="nir-btn">Tour Guides</a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="my-auto">Book a hotel/Restaurant/Resort/Rental home</h4>
                                    <div class="form-btn mt-2">
                                        <a href="{{ url('frontend/images/itinery.png') }}" class="nir-btn">Hotel/Resort/Rental Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        {{-- //Reviews --}}
                        <div id="single-review" class="single-review mb-4">
                            <h4>Average Reviews</h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="review-box bg-title text-center py-4 p-2 rounded">
                                        @if ($destination->rating)
                                            <h2 class="mb-1 white"><span>{{ $destination->rating }}/5</span></h2>
                                            <h4 class="white mb-1">{{ $destination->rating_description }}</h4>
                                            <p class="mb-0 white font-italic">From 40 Reviews</p>
                                        @else
                                            <h2 class="mb-1 white"><span>No rating acquired Yet</span></h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item mb-1">
                                            <p class="mb-0">Cleanliness</p>
                                            <div class="progress rounded">
                                                @php $cleanliness = rand(0, 100); @endphp
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="{{ $cleanliness }}"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $cleanliness }}%">
                                                    <span class="sr-only">{{ $cleanliness }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <p class="mb-0">Facilities</p>
                                            <div class="progress rounded">
                                                @php $facilities = rand(0, 100); @endphp
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="{{ $facilities }}"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $facilities }}%">
                                                    <span class="sr-only">{{ $facilities }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <p class="mb-0">Value for money</p>
                                            <div class="progress rounded">
                                                @php $valueForMoney = rand(0, 100); @endphp
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="{{ $valueForMoney }}"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $valueForMoney }}%">
                                                    <span class="sr-only">{{ $valueForMoney }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item mb-1">
                                            <p class="mb-0">Service</p>
                                            <div class="progress rounded">
                                                @php $service = rand(0, 100); @endphp
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="{{ $service }}"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $service }}%">
                                                    <span class="sr-only">{{ $service }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p class="mb-0">Location</p>
                                            <div class="progress rounded">
                                                @php $location = rand(0, 100); @endphp
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="{{ $location }}"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $location }}%">
                                                    <span class="sr-only">{{ $location }}% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        

                        {{-- <div id="single-comments" class="single-comments single-box mb-4">
                            <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="{{ url('frontend/images/reviewer/1.jpg') }}" alt="image">
                                </div>
                                <div class="comment-content rounded">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2022 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">The worst hotel ever"</span>
                                    </div>
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that
                                        you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.
                                    </p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="{{ url('frontend/images/reviewer/2.jpg') }}" alt="image">
                                </div>
                                <div class="comment-content rounded">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2022 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">Was too noisy and not suitable for business
                                            meetings"</span>
                                    </div>
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that
                                        you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.
                                    </p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div id="single-add-review" class="single-add-review">
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
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-4">
                    <div class="sidebar-sticky sticky1">
                        <div class="tabs-navbar bg-lgrey mb-4 bordernone rounded overflow-hidden">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul id="tabs" class="nav nav-tabs bordernone mb-0">
                                        <li class="active">
                                            <a data-toggle="tab" href="#highlight"
                                                class="rounded box-shadow mb-2 border-all">Highlight</a>
                                        </li>
                                        {{-- <li>
                                            <a data-toggle="tab" href="#iternary"
                                                class="rounded box-shadow mb-2 border-all">Itinerary</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-map"
                                                class="rounded box-shadow mb-2 border-all">Map</a>
                                        </li> --}}
                                        <li>
                                            <a data-toggle="tab" href="{{route('tourGuideForAPlace' , $destination->id)}}"
                                                class="rounded box-shadow mb-2 border-all">TourGuides</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#hotels"
                                                class="rounded box-shadow mb-2 border-all">Hotels/Rental Home/Resort</a>
                                        <li>
                                            <a data-toggle="tab" href="#booking"
                                                class="rounded box-shadow mb-2 border-all">Booking</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-review"
                                                class="rounded box-shadow mb-2 border-all">Reviews</a>
                                        </li>
                                        {{-- <li>
                                            <a data-toggle="tab" href="#single-comments"
                                                class="rounded box-shadow mb-2 border-all">Comments</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#single-add-review"
                                                class="rounded box-shadow mb-2 border-all">Add Reviews</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(frontend/images/shape6.png);"></div>
    </section>
@endsection
