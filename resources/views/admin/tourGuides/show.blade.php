@extends('layouts.adminLayout')
 
@section('title', 'Profile of {{$user->name}}')
 
@section('contents')
<head>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<hr />
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Profile Of {{$user->name}}
    </h2>
</div>
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="TravelMateImage" class="rounded-full" src="{{$user->image ? asset('storage/' . $user->image) : ''}}">
                <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{$user->name}}</div>
                <div class="text-gray-600">{{$user->bio}}</div>
            </div>
        </div>
        <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{$user->email}}</div>
            <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="facebook" class="w-4 h-4 mr-2"></i>{{ $user->facebook}}</div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> {{$user->instagram}} </div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> {{$user->twitter}} </div>
            <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="globe" class="w-4 h-4 mr-2"></i> {{$user->website}}</div>
        </div>
        <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> {{$user->phone}}</div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="git-pull-request" class="w-4 h-4 mr-2"></i> {{$user->address}}</div>
            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="user" class="w-4 h-4 mr-2"></i>{{$user->username}}</div>
        </div>
    </div>
    {{-- <div class="nav-tabs flex flex-col sm:flex-row justify-center lg:justify-start"> <a data-toggle="tab" data-target="#dashboard" href="javascript:;" class="py-4 sm:mr-8 active">Dashboard</a> <a data-toggle="tab" data-target="#account-and-profile" href="javascript:;" class="py-4 sm:mr-8">Account & Profile</a> <a data-toggle="tab" data-target="#activities" href="javascript:;" class="py-4 sm:mr-8">Activities</a> <a data-toggle="tab" data-target="#tasks" href="javascript:;" class="py-4 sm:mr-8">Tasks</a> </div> --}}
</div>
<!-- END: Profile Info -->

<div class="intro-y box lg:mt-5">
    <div class="flex items-center justify-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-3xl text-center">
            Personal Informations
        </h2>
    </div>
    <div class="p-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 xl:col-span-6">
                <div>
                    <label>City</label>
                    <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$user->city}}" disabled>
                </div>
                
                <div class="mt-3">
                    <label>Postal Code</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" value="{{$user->postal_code}}"disabled>
                </div>
                <div class="mt-3">
                    <label>Country</label>
                    <p type="text" class="input w-full bg-gray-100 border mt-2">{{$user->country}}</p>
                </div>  
                <div class="mt-3">
                    <label>About</label>
                    <textarea class="input w-full bg-gray-100 border cursor-not-allowed mt-2" placeholder="Enter your Description" disabled>{{$user->about}}</textarea>
                </div>
                <div class="mt-3">
                    <label>Skills</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$user->skills}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Operating Area</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$tourGuide->operating_area}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Tour Types</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$tourGuide->tour_type}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Tourist Type</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$tourGuide->tourist_type}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Tourist Capacity</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$tourGuide->tourist_capacity}}"  disabled>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div>
                    <label>Status</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$user->status}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Address</label>
                    <textarea class="input w-full bg-gray-100 border mt-2" placeholder="Adress" disabled>{{$user->address}}</textarea>
                </div>
                <div>
                    <label>Gender</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$user->gender}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Date Of Birth</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$user->dob}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Experience</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2" placeholder="Input text" value="{{$user->experience}}" disabled>
                </div>
                <div class="mt-3">
                    <label>Education</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$user->education}}"  disabled>
                </div>
                <div class="mt-3">
                    <label>Price</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$tourGuide->price}}"  disabled>
                </div>
                <div class="mt-3">
                    <label>Rating</label>
                    <input type="text" class="input w-full bg-gray-100 border mt-2 mb-7 " placeholder="Input text" value="{{$tourGuide->rating}}"  disabled>
                </div>
                
                <a href="{{ route('admin.profile.edit', $user->id) }}" class="button  w-50 bg-theme-1 text-white mt-3">Update Information</a>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: JS Assets-->
<script src="{{asset('assets/js/app.js')}}"></script>
<!-- END: JS Assets-->
@endsection