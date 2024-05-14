@extends('layouts.adminLayout')

@section('title', 'TourGuides List Page')
@section('pageTitle')
    <h1 class="font-bold text-2xl ml-3">All TourGuides List</h1>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.css') }}">
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
            border: 2px solid #ccc;
            white-space: normal;
            /* Allow text to wrap within the cell */
            word-wrap: break-word;
            /* Break long words to prevent overflow */
            overflow-wrap: break-word;
            /* Additional property for better word wrapping */
            max-width: 7.5rem;
            /* Adjust the maximum width as needed */
        }
    </style>
@endsection
@section('contents')
    <div style="margin:.5vw">
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <table id="tourGuides-table" class="display cell-border" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>Operating Area</th>
                    <th>Tour Type</th>
                    <th>Tourist Type</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Tourist Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($tourGuides->count() > 0)
                    @foreach ($tourGuides as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->userId }}</td>
                            <td>{{ $rs->operating_area }}</td>
                            <td>{{ $rs->tour_type }}</td>
                            <td>{{ $rs->tourist_type }}</td>
                            <td>{{ $rs->price }}</td>
                            <td>{{ $rs->rating }}</td>
                            <td>{{ $rs->tourist_capacity }}</td>
                            <td>
                                <div class="h-14 pt-5">
                                    
                                    <a href="{{ route('admin.tourGuides.show', $rs->id) }}" class="text-green-800 pl-2"><ion-icon name="create-outline"></ion-icon></a>  
                                    <form action="{{ route('admin.tourGuides.destroy', $rs->id) }}" method="POST"
                                        onsubmit="return confirm('Delete?')" class="float-right text-red-800">
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
                        <td class="text-center border border-gray-300" colspan="5">Users not  found</td>
                    </tr>
                @endif
                

            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.js') }}"></script>
    <script>
        let table = new DataTable('#tourGuides-table', {
            layout: {
                top1Start: {
                    buttons: [{
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
        new $.fn.dataTable.FixedHeader(table, {
            // options
        });
        document.querySelector('.dataTables_buttons').classList.add('flex', 'space-x-2');
    </script>
@endpush
