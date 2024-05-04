@extends('layouts.adminLayout') 
@section('title', 'Update {{$places->name}} Information')
@section('contents')
<head>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <!-- END: Profile Menu-->
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
            <form action="{{ route('admin.places.update', $places->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                                        <img class="rounded-md" alt="TravelMate Image" src="data:image/jpeg;base64,{{ base64_encode($places->imageURL) }}">
                                        <div title="Want to Update this photo?(FileSize <2MB.150KB is recommended))" 
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> 
                                        <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                        <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                                        <input name="imageURL" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-8">
                                <div>
                                    <label>Name of the place </label>
                                    <input name="name" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->name}} ">
                                </div>
                                <div>
                                    <label>In City/Area</label>
                                    <input name="city" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->city}}">
                                </div>
                                <div>
                                    <label>Country</label>
                                    <input name="country" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->country}}">
                                </div>
                                <div>
                                    <label>Minimum Duration(DAY) to fully cover the place</label>
                                    <input name ="minDuration" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->minDuration}}">
                                </div>
                                <div>
                                    <label>Opening Hours(__AM)</label>
                                    <input name="opening_hours" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->opening_hours}}">
                                </div>
                                <div>
                                    <label>Closing Hours(__PM)</label>
                                    <input name="closing_hours" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->closing_hours}}">
                                </div>
                                <div>
                                    <label>Mimimum Cost(Per Person)</label>
                                    <input name="price" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->price}}" >
                                </div>
                                <div>
                                    <label>Earned Rating</label>
                                    <input name="rating" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->rating}}">
                                </div>
                                <div>
                                    <label>What Type of Destination is this?</label>
                                    <input name="placeStatus" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->placeStatus}}">
                                </div>
                                <div>
                                    <label>This place is best for </label>
                                    <input name="placeType" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->placeType}}">
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
                            Update contact  Information
                        </h2>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Email</label>
                                    <input name="email" type="text" class="input w-full border bg-gray-100   mt-2" placeholder="Input text" value="{{$places->email}}">
                                </div>
                                
                                <div class="mt-3">
                                    <label>Postal Code</label>
                                    <input name="postal_code" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter Postal Code" value="{{$places->postal_code}}">
                                </div>
                                <div class="mt-3">
                                    <label>Website</label>
                                    <input name="website" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter Website URL(with https://)" value="{{$places->website}}"></p>
                                </div> 
                                <div class="mt-3">
                                    <label>Description</label>
                                    <textarea name="description" class="input w-full bg-gray-100 border mt-2" placeholder="Enter your Description" >{{$places->description}}</textarea>
                                </div>                                       
                                
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Enter Phone Number" value="{{$places->phone}}">
                                </div>
                                <div class="mt-3">
                                    <label>Address</label>
                                    <textarea name="address" class="input w-full bg-gray-100 border mt-2" placeholder="Enter your Address" >{{$places->address}}</textarea>
                                </div>
                                <div>
                                    <label>latitude</label>
                                    <input name="latitude" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->latitude}}">
                                </div>
                                <div class="mt-3">
                                    <label>Longitude</label>
                                    <input name="longitude" type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->longitude}}" >
                                </div>
                                <div class="mt-3">
                                    <label>Place Submission Time</label>
                                    <input  type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$places->created_at}}" disabled>
                                </div>
                                <div class="mt-3">
                                    <label>Last Update time of this place</label>
                                    <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$places->updated_at}}" disabled>
                                </div>
                                <button type="submit" class="button w-24 bg-theme-1 text-white mt-5">Update</button>
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