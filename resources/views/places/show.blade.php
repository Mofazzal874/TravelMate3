@extends('layouts.adminLayout') 
@section('title', 'Show All Places')
@section('contents')
<head>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center justify-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-3xl text-center">
                            {{$places->name}} Information
                        </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border border-gray-200 rounded-md p-5">
                                <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="TravelMate Image" src="{{$places->imageURL ? asset('storage/' . $places->imageURL) : ''}}">
                                </div>
                                <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="button w-full bg-theme-1 text-white">{{$places->name}} Photo  </button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label>Name of the place </label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->name}} " disabled>
                            </div>
                            <div>
                                <label>In City/Area</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->city}}" disabled>
                            </div>
                            <div>
                                <label>Country</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->country}}" disabled>
                            </div>
                            <div>
                                <label>Minimum Duration(DAY) to fully cover the place</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->minDuration}}" disabled>
                            </div>
                            <div>
                                <label>Opening-Closing Hours(__AM - __PM)</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->opening_hours}}-{{$places->closing_hours}}" disabled>
                            </div>
                            <div>
                                <label>Mimimum Cost(Per Person)</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->price}}" disabled>
                            </div>
                            <div>
                                <label>Earned Rating</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->rating}}" disabled>
                            </div>
                            <div>
                                <label>What Type of Destination is this?</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{ $places->placeStatus == 0 ? 'General' : ($places->placeStatus == 1 ? 'Top Destination' : 'Best Destination') }}" disabled>
                            </div>
                            <div>
                                <label>This place is best for </label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{ $places->placeType ?? 'N/A' }}" disabled>
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
                        Other contact  Information /How to go ?
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Email</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$places->email}}" disabled>
                            </div>
                            
                            <div class="mt-3">
                                <label>Postal Code</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2"  value="{{$places->postal_code}}" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Website</label>
                                <p type="text" class="input w-full bg-gray-100 border mt-2">{{$places->website}}</p>
                            </div>  
                            <div class="mt-3">
                                <label>Description</label>
                                <textarea class="input w-full bg-gray-100 border cursor-not-allowed mt-2" placeholder="Enter your Description" disabled>{{$places->description}}</textarea>
                            </div>                                      
                            
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Phone Number</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->phone}}" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Address</label>
                                <textarea class="input w-full bg-gray-100 border mt-2" placeholder="Adress" disabled>{{$places->address}}</textarea>
                            </div>
                            <div>
                                <label>latitude</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->latitude}}" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Longitude</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->longitude}}" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Place Submission Time</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->created_at}}" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Last Update time of this place</label>
                                <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$places->updated_at}}" disabled>
                            </div>
                            <a href="{{ route('admin.places.edit', $places->id) }}" class="button  w-50 bg-theme-1 text-white mt-3">Update Information</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
</div>
    <!-- BEGIN: JS Assets-->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- END: JS Assets-->

@endsection