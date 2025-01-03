@extends('layouts.adminLayout') 
@section('title', 'Add a new Place')
@section('pageTitle')
<h1 class="font-bold text-2xl ml-3">Add a new Place</h1>
@endsection
@section('contents')
<head>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <!-- END: Profile Menu-->
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
            <div>
                @if (Session::has('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <form action="{{ route('admin.places.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <!-- BEGIN: Display Information -->
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center justify-center p-5 border-b border-gray-200">
                            <h2 class="font-medium text-3xl text-center">
                                Add Place Information
                            </h2>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-12 gap-5">
                               
                            <div class="col-span-12 xl:col-span-4">
                                <div class="border border-gray-200 rounded-md p-5">
                                    <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img class="rounded-md" alt="TravelMate Image" src="">
                                    </div>
                                    <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                        <button type="button" class="button w-full bg-theme-1 text-white">Upload Photo  </button>
                                        <input name="imageURL" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-8">
                                <div>
                                    <label>Name of the place </label>
                                    <input name="name" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter the name of the place">
                                    @error('name')
                                    <span id="nameError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>In City/Area</label>
                                    <input name="city" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter the city/area">
                                    @error('city')
                                    <span id="cityError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Country</label>
                                    <input name="country" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter the country">
                                    @error('country')
                                    <span id="countryError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Minimum Duration(DAY) to fully cover the place</label>
                                    <input name="minDuration" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter minimum duration in days">
                                    @error('minDuration')
                                    <span id="minDurationError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Opening Hours(__AM)</label>
                                    <input name="opening_hours" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter opening hours">
                                    @error('opening_hours')
                                    <span id="openingHoursError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Closing Hours(__PM)</label>
                                    <input name="closing_hours" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter closing hours">
                                    @error('closing_hours')
                                    <span id="closingHoursError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Minimum Cost(Per Person)</label>
                                    <input name="price" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter minimum cost per person">
                                    @error('price')
                                    <span id="priceError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>Initial Rating</label>
                                    <input name="rating" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter initial rating">
                                    @error('rating')
                                    <span id="ratingError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="placeStatus">What Type of Destination is this?</label>
                                    <div class="mt-2">
                                        <select id="placeStatus" name="placeStatus" class="select2 w-full">
                                            <option value="0" selected>General Destination</option>
                                            <option value="1">Top Destination</option>
                                            <option value="2">Best Deal Destination</option>
                                        </select>
                                        @error('placeStatus')
                                        <span id="placeStatusError" class="text-red-600">{{ $message }}</span>
                                        @enderror 
                                    </div>
                                </div>
                                <div>
                                    <label for="placeType">This place is best for</label>
                                    <div class="mt-2">
                                        <select name="placeType" id="placeType" class="select2 w-full">
                                            <option value="Hiking">Hiking</option>
                                            <option value="bicycling">Bicycling</option>
                                            <option value="Trekking">Trekking</option>
                                            <option value="Camping">Camping</option>
                                            <option value="Wildlife">Wildlife</option>
                                            <option value="Adventure">Adventure</option>
                                        </select>
                                        @error('placeType')
                                        <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Display Information -->
                <!-- BEGIN: Contact Information -->
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center justify-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-3xl text-center">
                            Add contact Information
                        </h2>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Email</label>
                                    <input name="email" type="text" class="input w-full border bg-gray-100 mt-2" placeholder="Enter email">
                                    @error('email')
                                    <span id="emailError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label>Postal Code</label>
                                    <input name="postal_code" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter postal code">
                                    @error('postal_code')
                                    <span id="postalCodeError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label>Website</label>
                                    <input name="website" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter website URL (with https://)">
                                    @error('website')
                                    <span id="websiteError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div> 
                                <div class="mt-3">
                                    <label>Description</label>
                                    <textarea name="description" class="input w-full bg-gray-100 border mt-2" placeholder="Enter description"></textarea>
                                    @error('description')
                                    <span id="descriptionError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>                                       
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter phone number">
                                    @error('phone')
                                    <span id="phoneError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label>Address</label>
                                    <textarea name="address" class="input w-full bg-gray-100 border mt-2" placeholder="Enter address"></textarea>
                                    @error('address')
                                    <span id="addressError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label>latitude</label>
                                    <input name="latitude" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter latitude">
                                    @error('latitude')
                                    <span id="latitudeError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label>Longitude</label>
                                    <input name="longitude" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter longitude">
                                    @error('longitude')
                                    <span id="longitudeError" class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="button w-24 bg-theme-1 text-white mt-5">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Personal Information -->
            </form>
        </div>
    </div>
</div>
    <!-- BEGIN: JS Assets-->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- END: JS Assets-->
@endsection
