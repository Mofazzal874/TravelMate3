@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3"></h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    <section class="contact-main pt-6 pb-60">
        <div class="container">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <div class="col-lg-10 col-offset-lg-1 mx-auto">
                        <div class="contact-info bg-white">
                            <div class="contact-info-title text-center mb-4 px-5">
                                <h3 class="mb-1">Send Message</h3>
                                <p class="mb-0">Send a message about booking or other inquiries..</p>
                            </div>
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @endif
                                        <form method="POST" action="{{ route('universalMessageSending') }}" name="contactform2" id="contactform2">
                                            @csrf
                                            <input type="hidden" name="sender_id" value="{{ $sender_id }}">
                                            <input type="hidden" name="recipient_id" value="{{ $recipient_id }}">
                                            
                                            <div class="form-group mb-2">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" value="{{ auth()->check() ? auth()->user()->name : ''}}" >
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="form-group mb-2">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ auth()->check() ? auth()->user()->email : ''}}" >
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone" value="{{ auth()->check() ? auth()->user()->phone : ''}}" >
                                            </div>
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="textarea mb-2">
                                                <textarea name="message" id="message" placeholder="Enter a message">{{ old('message') }}</textarea>
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="comment-btn text-center">
                                                <button type="submit" class="nir-btn" id="submit2">Send Message</button>
                                            </div>
                                        </form>
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
