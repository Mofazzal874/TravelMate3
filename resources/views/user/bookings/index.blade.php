@extends('layouts.userLayout')

@section('title', 'Confirmed Bookings')
@section('pageTitle')
    <h1 class="font-bold text-2xl ml-3">All of your  Bookings List</h1>
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
        <table id="Bookings-table" class="display cell-border" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Booking Status</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- $place object has come from the PlacesController index method --}}
                @if ($bookings->count() > 0)
                    @foreach ($bookings as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->f_name.' '.$rs->l_name }}</td>
                            <td>{{ $rs->phone}}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{$rs->booking_status}}</td>
                            <td>{{$rs->payment_status}}</td>
                            <td>
                                <div class="h-14 pt-5">
                                    <a href="{{ route('user.bookings.show', $rs->id) }}" class="text-blue-800"><ion-icon
                                        name="eye-outline"></ion-icon></a>
                                        <form action="{{ route('user.bookings.destroy', $rs->id) }}" method="POST"
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
                        <td class="text-center border border-gray-300" colspan="5">No Bookings found</td>
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
        let table = new DataTable('#Bookings-table', {
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
