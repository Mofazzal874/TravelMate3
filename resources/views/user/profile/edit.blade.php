@extends('layouts.userLayout')

@section('title', 'Update Profile of ' . $profile->name)

@section('contents')
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>
<hr />
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Update the Profile Of {{ $profile->name }}
    </h2>
</div>
<div>
    @if (Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
<form action="{{ route('user.profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="TravelMateImage" class="rounded-full" src="{{$profile->image ? asset('storage/' . $profile->image) : ''}}">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2">
                        <i class="w-4 h-4 text-white" data-feather="camera"></i>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                        <input type="text" name="name" class="input w-full bg-gray-100 border mt-2 @error('name') border-red-500 @enderror" value="{{ old('name', $profile->name) }}">
                        @error('name')
                            <span id="nameError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Bio</label>
                        <textarea name="bio" class="input w-full bg-gray-100 border mt-2 @error('bio') border-red-500 @enderror" placeholder="Enter your bio">{{ old('bio', $profile->bio) }}</textarea>
                        @error('bio')
                            <span id="bioError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                    <input type="email" name="email" class="input w-full bg-gray-100 border mt-2 @error('email') border-red-500 @enderror" value="{{ old('email', $profile->email) }}">
                    @error('email')
                        <span id="emailError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-feather="facebook" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="facebook" class="input w-full bg-gray-100 border mt-2 @error('facebook') border-red-500 @enderror" value="{{ old('facebook', $profile->facebook) }}">
                    @error('facebook')
                        <span id="facebookError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="instagram" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="instagram" class="input w-full bg-gray-100 border mt-2 @error('instagram') border-red-500 @enderror" value="{{ old('instagram', $profile->instagram) }}">
                    @error('instagram')
                        <span id="instagramError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="twitter" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="twitter" class="input w-full bg-gray-100 border mt-2 @error('twitter') border-red-500 @enderror" value="{{ old('twitter', $profile->twitter) }}">
                    @error('twitter')
                        <span id="twitterError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-feather="globe" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="website" class="input w-full bg-gray-100 border mt-2 @error('website') border-red-500 @enderror" value="{{ old('website', $profile->website) }}">
                    @error('website')
                        <span id="websiteError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <label class="cursor-pointer mt-5">
                        <span class="button w-24 bg-theme-1 text-white">Change Photo</span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-feather="phone" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="phone" class="input w-full bg-gray-100 border mt-2 @error('phone') border-red-500 @enderror" value="{{ old('phone', $profile->phone) }}">
                    @error('phone')
                        <span id="phoneError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="git-pull-request" class="w-4 h-4 mr-2"></i>
                    <div class="mt-3">
                        <textarea name="address" class="input w-full bg-gray-100 border mt-2 @error('address') border-red-500 @enderror" placeholder="Adress">{{ old('address', $profile->address) }}</textarea>
                        @error('address')
                            <span id="addressError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-feather="user" class="w-4 h-4 mr-2"></i>
                    <input type="text" name="username" class="input w-full bg-gray-100 border mt-2 @error('username') border-red-500 @enderror" value="{{ old('username', $profile->username) }}">
                    @error('username')
                        <span id="usernameError" class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
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
                        <input type="text" name="city" class="input w-full bg-gray-100 border mt-2 @error('city') border-red-500 @enderror" value="{{ old('city', $profile->city) }}">
                        @error('city')
                            <span id="cityError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mt-3">
                        <label>Postal Code</label>
                        <input type="text" name="postal_code" class="input w-full bg-gray-100 border mt-2 @error('postal_code') border-red-500 @enderror" value="{{ old('postal_code', $profile->postal_code) }}">
                        @error('postal_code')
                            <span id="postal_codeError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Country</label>
                        <input type="text" name="country" class="input w-full bg-gray-100 border mt-2 @error('country') border-red-500 @enderror" value="{{ old('country', $profile->country) }}">
                        @error('country')
                            <span id="countryError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>  
                    <div class="mt-3">
                        <label>About</label>
                        <textarea name="about" class="input w-full bg-gray-100 border mt-2 @error('about') border-red-500 @enderror" placeholder="Enter your Description">{{ old('about', $profile->about) }}</textarea>
                        @error('about')
                            <span id="aboutError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Skills</label>
                        <input type="text" name="skills" class="input w-full bg-gray-100 border mt-2 @error('skills') border-red-500 @enderror" value="{{ old('skills', $profile->skills) }}">
                        @error('skills')
                            <span id="skillsError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Languages</label>
                        <input type="text" name="languages" class="input w-full bg-gray-100 border mt-2 @error('languages') border-red-500 @enderror" value="{{ old('languages', $profile->languages) }}">
                        @error('languages')
                            <span id="languagesError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label>Status</label>
                        <input type="text" name="status" class="input w-full bg-gray-100 border mt-2 @error('status') border-red-500 @enderror" value="{{ old('status', $profile->status) }}">
                        @error('status')
                            <span id="statusError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Address</label>
                        <textarea name="address" class="input w-full bg-gray-100 border mt-2 @error('address') border-red-500 @enderror" placeholder="Adress">{{ old('address', $profile->address) }}</textarea>
                        @error('address')
                            <span id="addressError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>Gender</label>
                        <input type="text" name="gender" class="input w-full bg-gray-100 border mt-2 @error('gender') border-red-500 @enderror" value="{{ old('gender', $profile->gender) }}">
                        @error('gender')
                            <span id="genderError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Date Of Birth</label>
                        <input type="date" name="dob" class="input w-full bg-gray-100 border mt-2 @error('dob') border-red-500 @enderror" value="{{ old('dob', $profile->dob) }}">
                        @error('dob')
                            <span id="dobError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Experience</label>
                        <input type="text" name="experience" class="input w-full bg-gray-100 border mt-2 @error('experience') border-red-500 @enderror" value="{{ old('experience', $profile->experience) }}">
                        @error('experience')
                            <span id="experienceError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label>Education</label>
                        <input type="text" name="education" class="input w-full bg-gray-100 border mt-2 mb-7 @error('education') border-red-500 @enderror" value="{{ old('education', $profile->education) }}">
                        @error('education')
                            <span id="educationError" class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end mt-4 mr-4">
        <button type="submit" class="button bg-theme-1 text-white">Update</button>
    </div>
</form>
<!-- BEGIN: JS Assets-->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- END: JS Assets-->
@endsection
