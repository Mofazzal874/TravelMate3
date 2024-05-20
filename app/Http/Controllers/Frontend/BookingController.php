<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index(){
        return view('frontend.booking');
    }
    public function create(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|string|max:10',
            'dob' => 'required|date',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address_line1' => 'required|string|max:255',
            'address_line2' => 'nullable|string|max:255',
        ]);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'places_id' => $request->input('places_id'),
            'tourGuide_id' => $request->input('tourGuide_id'),
            'hotels_id' => $request->input('hotels_id'),
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'address_line1' => $request->input('address_line1'),
            'address_line2' => $request->input('address_line2'),
            'booking_status' => 'pending',
            'payment_status' => 'not_paid',
        ]);
        return redirect()->route('bookings.show', $booking);
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }
}
