@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(frontend/images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">About Us</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="about-us pt-6"
        style="background-image:url(frontend/images/background_pattern.png); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
                            <h2 class="border-b mb-2 pb-1">Explore All Tour of the world with us.</h2>
                            <p class="border-b mb-2 pb-2">Our team is composed of highly dedicated and hardworking
                                professionals committed to ensuring that every user has a seamless travel
                                experience.<br><br> Our commitment to excellence is evident through continuous improvement,
                                regularly updating the app with new features and enhancements based on user feedback and
                                industry trends. We prioritize a user-centric approach, ensuring the app is always
                                user-friendly and meets user expectations. Our team works to integrate various
                                travel-related services, such as booking systems, local guides, and travel tips, into a
                                single platform. Ensuring security and privacy is paramount, as we work to build trust and
                                reliability among users</p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="icon-location-pin theme"></i> Tour Guide</li>
                                    <li><i class="icon-briefcase theme"></i> Friendly Price</li>
                                    <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="{{ url('frontend/images/travel.png') }}" alt>
                        </div>
                    </div>
                    
                    {{-- <div class="col-lg-12">

                        <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">20</h2>
                                                <span class="m-0">Years Experiences</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">530</h2>
                                                <span class="m-0">Tour Packages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">850</h2>
                                                <span class="m-0">Happy Customers</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
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

                    </div> --}}
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>

    <section class="our-team pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Core Team</h4>
                <h2 class="mb-1">Meet Our <span class="theme">Excellent team members</span></h2>
                <p>Customer support is always ready to assist users with any issues or queries, ensuring a positive user experience.</p>
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    @foreach ($team as $team)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ $team->image ? asset('storage/' . $team->image) : '' }}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white"><a href="{{route('userDetails' , $team->id)}}"> {{$team->name}}</a></h4>
                                <p class="mb-0 white">System Admin</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
