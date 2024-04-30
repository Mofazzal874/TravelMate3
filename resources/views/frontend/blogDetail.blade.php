@extends('frontend.layouts.main')

@section('main-container')

<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(frontend/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
    <div class="container">
    <div class="breadcrumb-content text-center">
    <h1 class="mb-3">Blog Detail 3</h1>
    <nav aria-label="breadcrumb" class="d-block">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Detail 3</li>
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
    <div class="col-lg-9 mb-4">
    <div class="blog-single">
    <div class="blog-wrapper">
    <h2 class="lh-sm">Apple honors eight developers with annual Apple Design Awards.</h2>
    <div class="blog-content first-child-cap">
    <p class="mb-3">The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower, was asking about $40 million. Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. Lorem ipsum dolor sit amet, cons sit amet, consectetur adi ectetur adipis Vi.<br><br>
    <img src="{{url('frontend/images/bg/bg3.jpg')}}" alt="image" class="mb-3 rounded">
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    
    <div class="blog-quote mb-4 rounded">
    <p class="white">“To take a trivial example, which ever undertakes laborious physical work exercise, except obtain some advantage blinded” </p>
    <span class="white">By Michael Delwell</span>
    <i class="fas fa-quote-left"></i>
    </div>
    <div class="blog-imagelist mb-4">
    <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    <img src="{{url('frontend/images/trending/trending4.jpg')}}" alt="image" class="rounded">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <img src="{{url('frontend/images/trending/trending2.jpg')}}" alt="image" class="rounded">
    </div>
    </div>
    </div>
    <div class="bigyapan mb-4">
    <a href="#"><img src="{{url('frontend/images/bigyapan1.jpg')}}" alt class="rounded"></a>
    </div>
    <p class="mb-4">as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    
    <a href="#"><img src="{{url('frontend/images/bigyapan1.jpg')}}" alt class="rounded"></a>
    <div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border rounded">
    <div class="blog-share-tag">
    <ul class="inline">
    <li><strong>Posted In:</strong></li>
    <li><a href="#">Fashion,</a></li>
    <li><a href="#">Beauty,</a></li>
    <li><a href="#">Vacation,</a></li>
    <li><a href="#">Travel,</a></li>
    <li><a href="#">News</a></li>
    </ul>
    </div>
    <div class="header-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    
    <div class="blog-author mb-4 bg-grey border rounded">
    <div class="blog-author-item">
    <div class="row d-flex justify-content-between align-items-center">
    <div class="col-md-3 col-sm-3 col-xs-12">
    <div class="blog-thumb text-center position-relative">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt>
    </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
    <h3 class="title pink"><a href="#">About Author <span>Graphic Designer</span></a></h3>
    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
    </div>
    </div>
    </div>
    </div>
    
    <div class="blog-next mb-4 d-sm-flex align-items-center rounded">
    <a href="#" class="d-block bg-theme">
    <div class="prev ps-4">
    <i class="fa fa-arrow-left white"></i>
    <p class="m-0 white">Previous Post</p>
    <p class="m-0 white">The bedding was hardly able</p>
    </div>
    </a>
    <a href="#" class="d-block bg-grey">
    <div class="next pr-4 text-right">
    <i class="fa fa-arrow-right"></i>
    <p class="m-0">Previous Post</p>
    <p class="m-0">The bedding was hardly able</p>
    </div>
    </a>
    </div>
    
    <div class="single-comments single-box mb-4">
    <h4 class="mb-4">Showing 16 verified guest comments</h4>
    <div class="comment-box">
    <div class="comment-image mt-2">
    <img src="{{url('frontend/images/reviewer/1.jpg')}}" alt="image">
    </div>
    <div class="comment-content rounded">
    <h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
    <p class="comment-date">April 25, 2019 at 10:46 am</p>
    <div class="comment-rate">
    <div class="rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </div>
    <span class="comment-title">"The worst hotel ever"</span>
    </div>
    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
    <div class="comment-like">
    <div class="like-title float-left">
    <a href="#" class="nir-btn mr-2">Reply</a>
    </div>
    </div>
    </div>
    </div>
    <div class="comment-box">
    <div class="comment-image mt-2">
    <img src="{{url('frontend/images/reviewer/2.jpg')}}" alt="image">
    </div>
    <div class="comment-content rounded">
    <h4 class="mb-1">Burson Lesson</h4>
    <p class="comment-date">April 25, 2019 at 10:46 am</p>
    <div class="comment-rate">
    <div class="rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </div>
    <span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
    </div>
    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
    <div class="comment-like">
    <div class="like-title float-left">
    <a href="#" class="nir-btn">Reply</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="single-add-review">
    <h4 class>Write a Review</h4>
    <form>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group mb-2">
    <input type="text" placeholder="Name">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group mb-2">
    <input type="email" placeholder="Email">
    </div>
    </div>
    <div class="col-lg-12 mb-1">
    <div class="form-group">
    <textarea>Comment</textarea>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-btn">
    <a href="#" class="nir-btn">Submit Review</a>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    <div class="col-lg-3 mb-4">
    <div class="sidebar-sticky">
    <div class="detail-sidebar">
    <div class="mag-image mb-2 position-relative">
    <img src="{{url('frontend/images/destination/destination10.jpg')}}" alt="Image" class="rounded">
    <div class="video-button text-center position-absolute top-50 start-0 end-0 z-index1">
    <div class="call-button text-center">
    <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
    <a href="{{ url('/tour') }}">Explore</a>
    </button>
    </div>
    <div class="video-figure"></div>
    </div>
    </div>
    <div class="detail-sidebar-item border-b pb-2 mb-2">
    <h5><a href="{{url('/blog-detail')}}">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
    </div>
    <div class="detail-sidebar-item border-b pb-2 mb-2">
    <h5><a href="{{url('/blog-detail')}}">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
    </div>
    <div class="detail-sidebar-item border-b pb-2 mb-2">
    <h5><a href="{{url('/blog-detail')}}">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
    </div>
    <div id="sidebar1">
    <div class="sidebar-icons">
    <a href="#" class="me-1"><i class="fa fa-heart" aria-hidden="true"><span> 1.2K</span></i></a>
    <a href="#" class="me-1"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
    <a href="#" class="me-1"><i class="fab fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
