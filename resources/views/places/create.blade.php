@extends('layouts.adminLayout')
 
@section('title', 'Create New Place')
@section('contents')
<h1 class="font-bold text-2xl ml-3">Add New Place</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin.places.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                <div class="mt-2">
                    <input type="text" name="address" id="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            
 
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <div class="mt-2">
                    <input id="city" name="city" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                    <input id="country" name="country" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Postal Code</label>
                <div class="mt-2">
                    <input id="postalCode" name="postalCode" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                <div class="mt-2">
                    <input id="phone" name="phone" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                <div class="mt-2">
                    <input id="website" name="website" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Latitude</label>
                <div class="mt-2">
                    <input id="latitude" name="latitude" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Longitude</label>
                <div class="mt-2">
                    <input id="longitude" name="longitude" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input id="imageURL" name="imageURL" type="file" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea name="description" placeholder="Descriptoin" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Minimum Duration of Tour</label>
                <div class="mt-2">
                    <input id="minDuration" name="minDuration" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Opening Hours </label>
                <div class="mt-2">
                    <input id="openingHours" name="openingHours" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Closing Hours</label>
                <div class="mt-2">
                    <input id="closingHours" name="closingHours" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                <div class="mt-2">
                    <input id="price" name="price" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900"> Initial Rating</label>
                <div class="mt-2">
                    <input id="rating" name="rating" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label for="placeStatus" class="block text-sm font-medium leading-6 text-gray-900">Place Status</label>
                <div class="mt-2 relative">
                    <select id="placeStatus" name="placeStatus" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0" selected>General Destination</option>
                        <option value="1">Top Destination</option>
                        <option value="2">Best Deal Destination</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label for="placeStatus" class="block text-sm font-medium leading-6 text-gray-900">Best Place For</label>
                <div class="mt-2 relative">
                    <select id="placeType" name="PlaceType" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="hiking">Hiking</option>
                        <option value="Bicycling">Bicycling</option>
                        <option value="Treking">Treking</option>
                        <option value="Camping">Camping</option>
                        <option value="Sightseeing">Sightseeing</option>
                        <option value="Photography">Photography</option>
                        <option value="Bird Watching">Bird Watching</option>
                        <option value="Wildlife">Wildlife</option>
                        <option value="Cultural">Cultural</option>
                        <option value="Historical">Historical</option>
                        <option value="Religious">Religious</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Family">Family</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Solo">Solo</option>
                        <option value="Group">Group</option>
                        <option value="Couple">Couple</option>
                        <option value="Friends">Friends</option>
                        <option value="Business">Rope Climbing</option>
                    </select>
                </div>
            </div>
            
            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </form>
    </div>
</div>

@endsection