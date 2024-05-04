@extends('layouts.adminLayout')
 
@section('title', 'Places List Page')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">All Places List</h1>
    <a href="{{ route('admin.places.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New Place</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <table id="places-table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-collapse rounded-lg overflow-hidden">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 border border-gray-300">ID</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Place Name</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">City/Area</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Phone</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Minimum Duration</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Price</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Rating</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">PlaceStatus</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">BestFor</th>
                <th scope="col" class="px-6 py-3 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- $place object has come from the PlacesController index method --}}
            @if($places->count() > 0)
                @foreach($places as $rs)
                <tr class="bg-white dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->id }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->name }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->city }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->phone ?? 'N/A' }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->minDuration }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->price }}</td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->rating }}</td>
                    <td class="px-6 py-4 border border-gray-300">
                        @if($rs->placeStatus == 0)
                            General
                        @elseif($rs->placeStatus == 1)
                            Top destination
                        @elseif($rs->placeStatus == 2)
                            Best Deal Destination
                        @endif
                    </td>
                    <td class="px-6 py-4 border border-gray-300">{{ $rs->placeType ?? 'N/A' }}</td>
                    <td class="px-6 py-4 border border-gray-300">
                        <div class="h-14 pt-5">
                            <a href="{{ route('admin.places.show', $rs->id) }}" class="text-blue-800">Detail</a> |
                            <a href="{{ route('admin.places.edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                            <form action="{{ route('admin.places.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center border border-gray-300" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
