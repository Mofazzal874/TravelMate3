@extends('frontend.layouts.main')

@section('main-container')


<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Blog Grid</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Grid Rightsidebar</li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    <div class="dot-overlay"></div>
    </section>
    
    
    <section class="blog">
    <div class="container">
    <div class="row flex-row-reverse">
    <div class="col-lg-8 ps-lg-4">
    <div class="listing-inner">
    <div class="row">
    <div class="col-lg-12">
    <div class="list-results d-flex align-items-center justify-content-between">
    <div class="list-results-sort">
    <p class="m-0">Showing 1-5 of 80 results</p>
    </div>
    <div class="click-menu d-flex align-items-center justify-content-between">
    <div class="change-list me-2 rounded overflow-hidden"><a href="{{url('/blog-detail')}}"><i class="fa fa-bars bg-grey"></i></a></div>
    <div class="change-grid f-active me-2 rounded overflow-hidden"><a href="{{url('/blog-detail')}}"><i class="fa fa-th"></i></a></div>
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
    </div>
    <div class="col-lg-6 col-md-12 col-10 mx-auto">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending10.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Technology</h5>
    <h4><a href="{{url('/blog-detail')}}">How a developer duo at Deutsche Bank keep remote alive.</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author d-none d-sm-block mb-2">
    <img src="{{url('frontend/images/reviewer/2.jpg')}}" alt class="rounded-circle me-1">
    <span>Sollmond Nell</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending12.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Inspiration</h5>
    <h4><a href="{{url('/blog-detail')}}">Inspire Runner with Autism Graces of Women's Running</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt class="rounded-circle me-1">
    <span>David Scott</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending13.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Public</h5>
    <h4><a href="{{url('/blog-detail')}}">Services To Grow Your Business Sell Affiliate Products</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/3.jpg')}}" alt class="rounded-circle me-1">
    <span>John Bolden</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending10.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Technology</h5>
    <h4><a href="{{url('/blog-detail')}}">How a developer duo at Deutsche Bank keep remote alive.</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/2.jpg')}}" alt class="rounded-circle me-1">
    <span>Sollmond Nell</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending12.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Inspiration</h5>
    <h4><a href="{{url('/blog-detail')}}">Inspire Runner with Autism Graces of Women's Running</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt class="rounded-circle me-1">
    <span>David Scott</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending13.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Public</h5>
    <h4><a href="{{url('/blog-detail')}}">Services To Grow Your Business Sell Affiliate Products</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/3.jpg')}}" alt class="rounded-circle me-1">
    <span>John Bolden</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending10.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Technology</h5>
    <h4><a href="{{url('/blog-detail')}}">How a developer duo at Deutsche Bank keep remote alive.</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/2.jpg')}}" alt class="rounded-circle me-1">
    <span>Sollmond Nell</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6">
    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending12.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1">Inspiration</h5>
    <h4><a href="{{url('/blog-detail')}}">Inspire Runner with Autism Graces of Women's Running</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt class="rounded-circle me-1">
    <span>David Scott</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="pagination-main text-center">
    <ul class="pagination">
    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    
    <div class="col-lg-4 pe-lg-4">
    <div class="sidebar-sticky">
    <div class="list-sidebar">
    <div class="sidebar-item">
    <h4 class>Search Here</h4>
    <div class="newsletter-form rounded overflow-hidden position-relative">
    <form>
    <input type="text" placeholder="Search your keyword here..">
    <input type="submit" class="nir-btn bordernone rounded-0 position-absolute end-0" value="Search">
    </form>
    </div>
    </div>
    <div class="author-news mb-4 box-shadow p-5 text-center rounded overflow-hidden border-all">
    <div class="author-news-content">
    <div class="author-thumb mb-1">
    <img src="{{url('frontend/images/team/img2.jpg')}}" alt="author">
    </div>
    <div class="author-content">
    <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
    <p class="mb-2">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
    <div class="header-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f rounded"></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus-g rounded"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter rounded"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="sidebar-item mb-4">
    <h4 class>All Categories</h4>
    <ul class="sidebar-category">
    <li><a href="#">All</a></li>
    <li><a href="#">Featured</a></li>
    <li><a href="#">Sliders</a></li>
    <li class="active"><a href="#">Manage Listings</a></li>
    <li><a href="#">Address and Map</a></li>
    <li><a href="#">Reservation Requests</a></li>
    <li><a href="#">Your Reservation</a></li>
    <li><a href="#">Search Results</a></li>
    </ul>
    </div>
    <div class="popular-post sidebar-item mb-4">
    <div class="sidebar-tabs">
    <div class="post-tabs">
    
    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab1" role="tablist">
    <li class="nav-item d-inline-block" role="presentation">
    <button aria-selected="false" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button>
    </li>
    <li class="nav-item d-inline-block" role="presentation">
    <button aria-selected="true" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button>
    </li>
    </ul>
    
    <div class="tab-content" id="postsTabContent1">
    
    <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">
    <article class="post mb-2 border-b pb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending1.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">An Incredibly Easy Method That Works For All</a></h5>
    <div class="date">10 Apr 2021</div>
    </div>
    </div>
    </article>
    <article class="post border-b pb-2 mb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending2.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">15 Unheard Ways To Achieve Greater Walker</a></h5>
    <div class="date">29 Mar 2021</div>
    </div>
    </div>
    </article>
    <article class="post mb-2 border-b pb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending1.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">An Incredibly Easy Method That Works For All</a></h5>
    <div class="date">10 Apr 2021</div>
    </div>
    </div>
    </article>
    <article class="post">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending4.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">15 Unheard Ways To Achieve Greater Walker</a></h5>
    <div class="date">21 Feb 2021</div>
    </div>
    </div>
    </article>
    </div>
    
    <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
    <article class="post mb-2 border-b pb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending5.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">10 Ways To Immediately Start Selling Furniture</a></h5>
    <div class="date">08 Mar 2021</div>
    </div>
    </div>
    </article>
    <article class="post border-b pb-2 mb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending6.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">Photography Photo modify and Beautiful Walker</a></h5>
    <div class="date">18 Jan 2021</div>
    </div>
    </div>
    </article>
    <article class="post mb-2 border-b pb-2">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending1.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">An Incredibly Easy Method That Works For All</a></h5>
    <div class="date">10 Apr 2021</div>
    </div>
    </div>
    </article>
    <article class="post">
    <div class="s-content d-flex align-items-center justify-space-between">
    <div class="sidebar-image w-25 me-3 rounded">
    <a href="{{url('/blog-detail')}}"><img src="{{url('frontend/images/trending/trending3.jpg')}}" alt></a>
    </div>
    <div class="content-list w-75">
    <h5 class="mb-1"><a href="{{url('/blog-detail')}}">1Certified Graphic Design with Free Project Course</a></h5>
    <div class="date">12 Feb 2021</div>
    </div>
    </div>
    </article>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="sidebar-item mb-4">
    <h4 class>Tags</h4>
    <ul class="sidebar-tags">
    <li><a href="#">Tour</a></li>
    <li><a href="#">Rental</a></li>
    <li><a href="#">City</a></li>
    <li><a href="#">Yatch</a></li>
    <li><a href="#">Activity</a></li>
    <li><a href="#">Museum</a></li>
    <li><a href="#">Beauty</a></li>
    <li><a href="#">Classic</a></li>
    <li><a href="#">Creative</a></li>
    <li><a href="#">Designs</a></li>
    <li><a href="#">Featured</a></li>
    <li><a href="#">Free Style</a></li>
    <li><a href="#">Programs</a></li>
    <li><a href="#">Travel</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="featured-video pb-4 pt-0">
    <div class="container">
    <div class="section-title mb-6 text-center w-75 mx-auto">
    <h4 class="mb-1 theme1">Our Articles & Blogs</h4>
    <h2 class="mb-1">SOme Related <span class="theme">Posts</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="featured-video-main">
    <div class="row">
    <div class="col-lg-6 mb-4 d-none d-sm-block">
    <div class="trend-item box-shadow bg-white rounded overflow-hidden">
    <div class="trend-image position-relative">
    <img src="{{url('frontend/images/trending/trending14.jpg')}}" alt="image" class="w-100">
    <div class="video-button text-center position-absolute top-50 w-100 mx-auto z-index3 start-50 translate-middle">
    <div class="call-button text-center">
    <button type="button" class="play-btn js-video-button d-none d-sm-block" data-video-id="152879427" data-channel="vimeo">
    <a href="{{ url('/tour') }}">Explore</a>
    </button>
    </div>
    <div class="video-figure"></div>
    </div>
    </div>
    <div class="trend-content-main">
    <div class="trend-content-main p-4 pb-2">
    <div class="trend-content">
    <h5 class="theme mb-1 d-inline-block">Inspiration</h5>
    <h4><a href="{{url('/blog-detail')}}">Our Main Inspire Runner with Autism Graces of Women's Running</a></h4>
    <p class="mb-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div class="entry-meta d-flex align-items-center justify-content-between">
    <div class="entry-author mb-2 d-none d-sm-block">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt class="rounded-circle me-1">
    <span>David Scott</span>
    </div>
    <div class="entry-button d-flex align-items-center mb-2">
    <a href="{{url('/blog-detail')}}" class="nir-btn">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-6 mb-4">
    <div class="trend-item box-shadow bg-white rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending10.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main">
    <div class="trend-content p-4">
    <h5 class="theme mb-1">Design</h5>
    <h4 class="mb-0"><a href="{{url('/blog-detail')}}">Get Ready To Up Your Creative Game</a></h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6 mb-4">
    <div class="trend-item box-shadow bg-white rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending11.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main">
    <div class="trend-content p-4">
    <h5 class="theme mb-1">Health</h5>
    <h4 class="mb-0"><a href="{{url('/blog-detail')}}">Tradition design won’t save us in the COVID</a></h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6 mb-4">
    <div class="trend-item box-shadow bg-white rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending13.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main">
    <div class="trend-content p-4">
    <h5 class="theme mb-1">Foods</h5>
    <h4 class="mb-0"><a href="{{url('/blog-detail')}}">The 1 Food that helps remote teams</a></h4>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-6 mb-4">
    <div class="trend-item box-shadow bg-white rounded overflow-hidden">
    <div class="trend-image">
    <img src="{{url('frontend/images/trending/trending12.jpg')}}" alt="image">
    </div>
    <div class="trend-content-main">
    <div class="trend-content p-4">
    <h5 class="theme mb-1">Products</h5>
    <h4 class="mb-0"><a href="{{url('/blog-detail')}}">New: Freehand Templates, built for all</a></h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
