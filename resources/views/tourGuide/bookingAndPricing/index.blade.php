@extends('layouts.tourGuideLayout')

@section('title', 'Update Booking & Pricing Information')

@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>
<hr />
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Update Your Booking Information for better reach to the customers.
    </h2>
</div>
<div>
    @if (Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
<form action="{{ route('tourGuide.bookingAndPricing.update', $tourGuide->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- BEGIN:Booking & Pricing Info --}}
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center justify-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-3xl text-center">
                Booking Informations
            </h2>
        </div>
        <div class="p-5">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label>Operating Area/City</label>
                        <input type="text" name="operating_area" class="input w-full bg-gray-100 border mt-2 @error('operating_area') border-red-500 @enderror" value="{{ old('operating_area', $tourGuide->operating_area) }}">
                        @error('operating_area')
                            <span id="operating_areaError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="tour_type">What type of tourGuide are you?</label>
                        <div class="mt-2">
                            <select name="tour_type" id="tour_type" class="select2 w-full">
                                <option value="hiking">Hiking</option>
                                <option value="bicycling">Bicycling</option>
                                <option value="treking">Treking</option>
                                <option value="camping">Camping</option>
                                <option value="wildlife">Wildlife</option>
                                <option value="Historical">Historical</option>
                                <option value="Religious">Religious</option>
                                <option value="Adventure">Adventure</option>
                            </select>
                            @error('tour_type')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>What type of tourist do you generally go with?</label>
                        <div class="mt-2">
                            <select name="tourist_type" id="tourist_type" class="select2 w-full">
                                <option value="all_types">All Types</option>
                                <option value="foreign">Foreign</option>
                                <option value="bengali">Bengali Only</option>
                            </select>
                            @error('tourist_type')
                            <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>  
                    
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" class="input w-full bg-gray-100 border mt-2 @error('price') border-red-500 @enderror" value="{{ old('price', $tourGuide->price) }}">
                        @error('status')
                            <span id="statusError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>Rating</label>
                        <input type="text" name="rating" class="input w-full bg-gray-100 border mt-2 @error('rating') border-red-500 @enderror" value="{{ old('rating', $tourGuide->rating) }}">
                        @error('rating')
                            <span id="ratingError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Tourist Capacity(In no. of people)</label>
                        <input type="text" name="tourist_capacity" class="input w-full bg-gray-100 border mt-2 @error('tourist_capacity') border-red-500 @enderror" value="{{ old('tourist_capacity', $tourGuide->tourist_capacity) }}">
                        @error('tourist_capacity')
                            <span id="tourist_capacityError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end mt-4 mr-4">
        <button type="submit" class="button w-50 bg-theme-1 text-white mt-3">Update</button>
    </div>
</form>
<!-- BEGIN: JS Assets-->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- END: JS Assets-->
@endsection
