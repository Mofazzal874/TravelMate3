@extends('frontend.layouts.main')

@section('main-container')

<div class="banner trending overflow-hidden">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="banner-slide">
    <div class="row shop-slider">
    <div class="col-lg-4 p-0">
    <div class="trend-item1 box-shadow bg-white text-center">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/new-deal/deal1.jpg')}}" alt="image" class>
    <div class="overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 p-0">
    <div class="trend-item1 box-shadow bg-white text-center">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/new-deal/deal2.jpg')}}" alt="image" class>
    <div class="overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 p-0">
    <div class="trend-item1 box-shadow bg-white text-center">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/new-deal/deal3.jpg')}}" alt="image" class>
    <div class="overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 p-0">
    <div class="trend-item1 box-shadow bg-white text-center">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/new-deal/deal4.jpg')}}" alt="image" class>
    <div class="overlay"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 p-0">
    <div class="trend-item1 box-shadow bg-white text-center">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/new-deal/deal5.jpg')}}" alt="image" class>
    <div class="overlay"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="banner-breadcrum position-absolute top-50 mx-auto w-50 start-50 text-center translate-middle">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-0 white">Tour Single</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tour Single One</li>
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
    <h2 class="mb-1">Adriatic Adventure–Zagreb to Athens</h2>
    <div class="rating-main d-md-flex align-items-center">
    <p class="mb-0 me-2"><i class="icon-location-pin"></i> Greater London, United Kingdom</p>
    <div class="rating me-2">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </div>
    <span>(1,186 Reviews)</span>
    </div>
    </div>
    </div>
    <div class="description-images mb-4">
    <img src="{{url('frontend/images/trending/trending-large.jpg')}}" alt class="w-100 rounded">
    </div>
    <div class="description mb-2">
    <h4>Description</h4>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
    <p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    </div>
    <div class="tour-includes mb-4">
    <table>
    <tbody>
    <tr>
    <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> 5 Days</td>
    <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : 26</td>
    <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Jan 18 - Dec 21</td>
    </tr>
    <tr>
    <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+</td>
    <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : Airport</td>
    <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge - English, Thai</td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class="description mb-2">
    <div class="row">
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Departure & Return Location</h5>
    <p class="mb-0">John F.K. International Airport(Google Map)</p>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Bedroom</h5>
    <p class="mb-0">4 Bedrooms</p>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Departure Time</h5>
    <p class="mb-0">3 Hours Before Flight Time</p>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Departure Time</h5>
    <p class="mb-0">3 Hours Before Flight Time</p>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Price Includes</h5>
    <ul>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Air Fares</li>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> 3 Nights Hotel Accomodation</li>
    <li class="d-block pb-1"><i class="fa fa-check pink mr-1"></i> Tour Guide</li>
    <li class="d-block"><i class="fa fa-check pink mr-1"></i> Entrance Fees</li>
    </ul>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-2">
    <div class="desc-box bg-grey p-4 rounded">
    <h5 class="mb-2">Departure & Return Location</h5>
    <ul>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Guide Service Fee</li>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Driver Service Fee</li>
    <li class="d-block pb-1"><i class="fa fa-close pink mr-1"></i> Any Private Expenses</li>
    <li class="d-block"><i class="fa fa-close pink mr-1"></i> Room Service Fees</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="description mb-4">
    <h4>What to Expect</h4>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
    <p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    </div>
    </div>

    <div id="iternary" class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
        <h4>Itinerary</h4>
    <div class=" active">
    <div class="accrodion-title rounded">

    <h5 class="mb-0"><span>Day 1</span> - Kathmandu - Barceloma</h5>
    </div>
    <div class="accrodion-content py-2" style="display: block;">
    <div class="inner">
        <ul>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Fly from Kathmandu to Barcelona </li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Arrive in Barcelona and check into your hotel</li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Take some time to relax and adjust to the new time zone</li>
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
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Start your day with a visit to the famous Sagrada Familia, a breathtaking basilica designed by Antoni Gaudí</li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Visit La Rambla, Barcelona's most famous street, known for its lively atmosphere, street performers, and shops </li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Enjoy a delicious dinner at a traditional Catalan restaurant </li>
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
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Explore the Montserrat Monastery, home to the Black Madonna, a revered statue</li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Visit the Museum of Montserrat to learn about the history and art of the area </li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Return to Barcelona in the evening and relax at your hotel </li>
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
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Start the day with a visit to Casa Batlló, another architectural gem by Gaudí, known for its colorful façade</li>
            <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> In the evening, experience the vibrant nightlife of Barcelona in the trendy district of El Born or the beachfront area of Barceloneta</li>
            </ul>      </div>
    </div>
    </div>
    <div class=" ">
        <div class="accrodion-title rounded">
        <h5 class="mb-0"><span>Day 5</span> Beaches and Shopping </h5>
        </div>
        <div class="accrodion-content  py-2" style="display: block;">
        <div class="inner">
            <ul>
                <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Spend the morning relaxing at one of Barcelona's beautiful beaches</li>
                <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> Enjoy some water activities  </li>
                <li class="d-block pb-1"><i class="fa fa-fighter-jet pink mr-1"></i> End your trip with a delicious Catalan dinner and reflect on your wonderful time in Barcelona </li>
                </ul>      </div>
        </div>
        </div>

        <div class="d-flex">
            <h4 class="my-auto">Itinery Sample</h4> 
            <div class="form-btn mx-3">
                <a href="{{url('frontend/images/itinery.png')}}" class="nir-btn" download>Download</a>
                </div>
        </div>
           
    </div>


    <div id="single-map" class="single-map mb-4">
    <h4>Map</h4>
    <div class="map rounded overflow-hidden">
    <div style="width: 100%">
    <iframe class=" rounded overflow-hidden" height="400" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    </div>
    </div>
    <div id="single-review" class="single-review mb-4">
    <h4>Average Reviews</h4>
    <div class="row d-flex align-items-center">
    <div class="col-lg-4 col-md-4">
    <div class="review-box bg-title text-center py-4 p-2 rounded">
    <h2 class="mb-1 white"><span>2.2</span>/5</h2>
    <h4 class="white mb-1">"Feel so much worst than thinking"</h4>
    <p class="mb-0 white font-italic">From 40 Reviews</p>
    </div>
    </div>
    <div class="col-lg-8 col-md-8">
    <div class="review-progress">
    <div class="progress-item mb-1">
    <p class="mb-0">Cleanliness</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    <span class="sr-only">40% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Facilities</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
    <span class="sr-only">30% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Value for money</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
    <span class="sr-only">60% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item mb-1">
    <p class="mb-0">Service</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
    <span class="sr-only">20% Complete</span>
    </div>
    </div>
    </div>
    <div class="progress-item">
    <p class="mb-0">Location</p>
    <div class="progress rounded">
    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
    <span class="sr-only">45% Complete</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div id="single-comments" class="single-comments single-box mb-4">
    <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
    <div class="comment-box">
    <div class="comment-image">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt="image">
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
    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
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
    <img src="{{url('frontend/images/reviewer/2.jpg')}}" alt="image">
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
    <span class="comment-title">Was too noisy and not suitable for business meetings"</span>
    </div>
    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
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
    </div>
    
    <div id="single-add-review" class="single-add-review">
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
    </div>
    </div>
    </div>
    <div class="col-lg-4 ps-lg-4">
    <div class="sidebar-sticky sticky1">
    <div class="tabs-navbar bg-lgrey mb-4 bordernone rounded overflow-hidden">
    <div class="row">
    <div class="col-md-12">
    <ul id="tabs" class="nav nav-tabs bordernone mb-0">
    <li class="active">
    <a data-toggle="tab" href="#highlight" class="rounded box-shadow mb-2 border-all">Highlight</a>
    </li>
    <li>
    <a data-toggle="tab" href="#iternary" class="rounded box-shadow mb-2 border-all">Itinerary</a>
    </li>
    <li>
    <a data-toggle="tab" href="#single-map" class="rounded box-shadow mb-2 border-all">Map</a>
    </li>
    <li>
    <a data-toggle="tab" href="#single-review" class="rounded box-shadow mb-2 border-all">Reviews</a>
    </li>
    <li>
    <a data-toggle="tab" href="#single-comments" class="rounded box-shadow mb-2 border-all">Comments</a>
    </li>
    <li>
    <a data-toggle="tab" href="#single-add-review" class="rounded box-shadow mb-2 border-all">Add Reviews</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
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
