@extends('frontend.layouts.main')

@section('main-container')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    </head>
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Profile of {{ $user->name }}</h2>
        @if (Session::has('error'))
            <div class="alert alert-success" style="color: green; font-size: 22px; border-radius: 8px;">
                {{ Session::get('error') }}
            </div>
        @endif
        <section class="trending pb-8">
            <!-- Profile Info -->
            <div class="bg-[rgb(37,150,190)] text-black rounded-lg shadow-md px-6 py-8 border-4 border-black">
                <!-- Profile Image and Bio -->
                <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5">
                    <!-- Profile Image -->
                    <div class="w-32 h-32 lg:w-40 lg:h-40 flex-none rounded-full overflow-hidden mr-5">
                        <img alt="Profile Image" class="w-full h-full object-cover"
                            src="{{ $user->image ? asset('storage/' . $user->image) : '' }}">
                    </div>
                    <!-- Profile Bio -->
                    <div class="flex flex-col">
                        <div class="font-bold text-xl mb-2">{{ $user->name }}</div>
                        <div class="text-black-300">{{ $user->bio }}</div>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="mt-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <label class="font-semibold">Email</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->email }}</span>
                            </div>
                        </div>
                        <!-- Facebook -->
                        <div>
                            <label class="font-semibold">Facebook</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="facebook" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->facebook }}</span>
                            </div>
                        </div>
                        <!-- Instagram -->
                        <div>
                            <label class="font-semibold">Instagram</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="instagram" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->instagram }}</span>
                            </div>
                        </div>
                        <!-- Twitter -->
                        <div>
                            <label class="font-semibold">Twitter</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="twitter" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->twitter }}</span>
                            </div>
                        </div>
                        <!-- Website -->
                        <div>
                            <label class="font-semibold">Website</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="globe" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->website }}</span>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div>
                            <label class="font-semibold">Phone</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="phone" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->phone }}</span>
                            </div>
                        </div>
                        <!-- Address -->
                        <div>
                            <label class="font-semibold">Address</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="git-pull-request" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->address }}</span>
                            </div>
                        </div>
                        <!-- Username -->
                        <div>
                            <label class="font-semibold">Username</label>
                            <div class="flex items-center mt-2">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i>
                                <span>{{ $user->username }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Personal Information -->
            <div class="bg-[rgb(37,150,190)] text-black rounded-lg shadow-md px-6 py-8 mt-8 border-4 border-black">
                <h2 class="font-bold text-3xl text-center mb-8">Personal Information</h2>
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label class="font-semibold">City</label>
                            <input type="text" class="input w-full border bg-gray-200 cursor-not-allowed mt-2"
                                value="{{ $user->city }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Postal Code</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $user->postal_code }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Country</label>
                            <p class="input w-full bg-gray-200 border mt-2">{{ $user->country }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">About</label>
                            <textarea class="input w-full bg-gray-200 border cursor-not-allowed mt-2" disabled>{{ $user->about }}</textarea>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Skills</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2" value="{{ $user->skills }}"
                                disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Operating Area</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $tourGuide->operating_area }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Tour Types</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $tourGuide->tour_type }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Tourist Type</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $tourGuide->tourist_type }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Tourist Capacity</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2 mb-7"
                                value="{{ $tourGuide->tourist_capacity }}" disabled>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label class="font-semibold">Status</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2" value="{{ $user->status }}"
                                disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Address</label>
                            <textarea class="input w-full bg-gray-200 border mt-2" disabled>{{ $user->address }}</textarea>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Gender</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $user->gender }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Date Of Birth</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $user->dob }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Experience</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2"
                                value="{{ $user->experience }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Education</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2 mb-7"
                                value="{{ $user->education }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Price</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2 mb-7"
                                value="{{ $tourGuide->price }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label class="font-semibold">Rating</label>
                            <input type="text" class="input w-full bg-gray-200 border mt-2 mb-7"
                                value="{{ $tourGuide->rating }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book a TourGuide Button Section -->
        <div class="text-center my-8">
            <h4 class="text-xl font-bold mb-3">Book me as your Guide</h4>
            <div class="form-btn mt-2">

                <a href="{{ route('bookTourGuide', ['id' => $tourGuide->id]) }}" class="nir-btn">Book Now</a>
            </div>
            <div class="form-btn mt-2">
                {{-- this is a universal button..registered /unregistered both can open and send messages --}}
                <a href="{{ route('sendMessagePage', ['id' => $tourGuide->userId]) }}" class="nir-btn">Send Message</a>
            </div>

        </div>
        <section class="discount-action pt-8 pb-8"
            style="background-image: url({{ asset('frontend/images/section-bg1.png') }}); background-position: center;">
            <div class="container mx-auto text-center">
                <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-black mb-3">Join Our <span
                        class="text-theme">Professional & Friendly</span> Team</h2>
                <a href="/contact" class="button button--active mt-2">Contact With Us</a>
            </div>
        </section>
    </div>
@endsection
