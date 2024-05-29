@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{asset('frontend/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Contact Us</h1>
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
                                <h3 class="mb-1">INFORMATION ABOUT US</h3>
                                <p class="mb-0">You can send us message about our company , to be a Hotel Manager , to be a TourGuide ...Just fill the contact form.</p>
                            </div>
                            <div class="contact-info-content row mb-1">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-4 mx-auto">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-map-marker-alt theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Office Location</h3>
                                            <p class="m-0">Fulbarigate , KUET , Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-10 mb-4 mx-auto">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-phone theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Phone Number</h3>
                                            <p class="m-0">+8801735059979</p>
                                            <p class="m-0">+8801894550903</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-6 col-10 mb-4 mx-auto">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-envelope theme"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <h3>Email Address</h3>
                                            <p class="m-0"><a href="mailto:Admin@TravelMate.com">Admin@TravelMate.com</a></p>
                                            <p class="m-0"><a href="mailto:mofazzalhossen874@gmail.com">mofazzalhossen874@gmail.com</a></p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div  class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                            <div style="width: 100%">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.416346427277!2d89.49945687476654!3d22.898009320966224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bda0d06e2db%3A0x48756df2b6f303d8!2sBangabandhu%20Sheikh%20Mujibur%20Rahman%20Hall!5e0!3m2!1sen!2sbd!4v1715527128722!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        {{-- <form method="POST" action="/send-message" name="contactform2"  id="contactform2">
                                            @csrf
                                            <input type="hidden" name="recipient_id" value="1"> <!-- Default recipient role is  Mofazzal874 , as i am the administrator -->
                                            <div class="form-group mb-2">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="form-group mb-2">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="form-group mb-2">
                                                <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone">
                                            </div>
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            
                                            <div class="textarea mb-2">
                                                <textarea name="message" id="message" placeholder="Enter a message"></textarea>
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="comment-btn text-center">
                                                <button type="submit" class="nir-btn" id="submit2">Send Message</button>
                                            </div>
                                        </form> --}}
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>

                                        @endif
                                        <form method="POST" action="{{ route('send.message') }}" name="contactform2" id="contactform2">
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

