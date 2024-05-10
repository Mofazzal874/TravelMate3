@extends('layouts.adminLayout')
 
@section('title', 'Places List Page')
@section('pageTitle')
<h1 class="font-bold text-2xl ml-3">All Places List</h1>
@endsection
 
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dataTables.min.css')}}">  
<link rel="stylesheet" href="{{asset('assets/css/dataTables.css')}}"> 
<style>
    /* CSS for DataTables buttons */
    .dataTables_buttons {
        display: flex;
        gap: 10px;
        justify-content: flex-start;
        padding: 10px;
        background-color: #f0f0f0;
        border-radius: 10px;
    }
    
    /* Style for DataTables buttons on hover */
    .dataTables_buttons button:hover {
        background-color: #dcdcdc;
        transition: background-color 0.3s ease;
    }
    
    /* Style for DataTables buttons when clicked */
    .dataTables_buttons button:active {
        background-color: #c0c0c0;
        transition: background-color 0.3s ease;
    }
    
    /* CSS for cell borders */
    table.dataTable.cell-border tbody th, 
    table.dataTable.cell-border tbody td {
        border: 2px solid #ccc; /* Adjust border color and thickness as needed */
    }
    


</style> 
@endsection
@section('contents')
<div style="margin:.5vw">
    <hr >
    <a href="{{ route('admin.places.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="margin-top: 10px">Add A New Place</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div> 
    @endif
    <table id="places-table" class="display cell-border" style="width:100%" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Place Name</th>
                <th>City/Area</th>
                <th>Phone</th>
                <th>Minimum Duration</th>
                <th>Price</th>
                <th>Rating</th>
                <th>PlaceStatus</th>
                <th>BestFor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- $place object has come from the PlacesController index method --}}
            @if($places->count() > 0)
                @foreach($places as $rs)
                <tr >
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->name }}</td>
                    <td>{{ $rs->city }}</td>
                    <td>{{ $rs->phone ?? 'N/A' }}</td>
                    <td>{{ $rs->minDuration }}</td>
                    <td>{{ $rs->price }}</td>
                    <td>{{ $rs->rating }}</td>
                    <td>
                        @if($rs->placeStatus == 0)
                            General
                        @elseif($rs->placeStatus == 1)
                            Top destination
                        @elseif($rs->placeStatus == 2)
                            Best Deal Destination
                        @endif
                    </td>
                    <td >{{ $rs->placeType ?? 'N/A' }}</td>
                    <td>
                        <div class="h-14 pt-5">
                            <a href="{{ route('admin.places.show', $rs->id) }}" class="text-blue-800"><ion-icon name="eye-outline"></ion-icon></a>
                            <a href="{{ route('admin.places.edit', $rs->id)}}" class="text-green-800 pl-2"><ion-icon name="create-outline"></ion-icon></a>
                            <form action="{{ route('admin.places.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                @csrf
                                @method('DELETE')
                                <button><ion-icon name="trash-outline"></ion-icon></button>
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
@push('scripts')
    <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.js')}}"></script>
    <script>
        let table = new DataTable('#places-table' , {
            layout: {
                top1Start: {
                    buttons: [
                        {
                            extend: 'copy',
                            text: 'Copy',
                            
                        },
                        {
                            extend: 'excel',
                            text: 'Excel'
                        },
                        {
                            extend: 'csv',
                            text: 'CSV'
                        },
                        {
                            extend: 'print',
                            text: 'PDF'
                        },
                        {
                            extend: 'colvis',
                            collectionLayout: 'fixed columns',
                            popoverTitle: 'Select the columns to display'
                            
                        }
                        
                        
                    ]
                }
            },
            select: true
        });
        new $.fn.dataTable.FixedHeader( table, {
            // options
        });
        document.querySelector('.dataTables_buttons').classList.add('flex', 'space-x-2');
    </script>
    
    
@endpush
