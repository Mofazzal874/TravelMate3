<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Places;
use App\Models\Booking;
use App\Models\Message;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourGuideController extends Controller
{
    //

    //backend tourGuide functions 

    public function editProfile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view('tourGuide.profile.edit', compact('profile'));
    }
    public function updateProfile(Request $request, string $id)
    {
        $profile = User::find($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'bio' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'skills' => 'nullable|string|max:255',
            'languages' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'experience' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if profile photo file is present in the request
        if ($request->hasFile('image')) {
            // Delete the old profile photo if it exists
            if ($profile->image) {
                Storage::delete($profile->image);
            }
            // Store the new profile photo
            $validatedData['image'] = $request->file('image')->store('profile_photos', 'public');
        }

        // Update the profile
        $profile->update($validatedData);

        return redirect()->route('tourGuide.dashboard')->with('success', 'Profile updated successfully.');
    }


    public function messages()
    {
        // Retrieve messages where the recipient role is admin
        $messages = Message::where('recipient_role', 'tourGuide')->get();

        // Pass the messages data to the view
        return view('tourGuide.messages.index', compact('messages'));
    }
    public function deleteMessage(string $id)
    {

        // Find the message by ID
        $message = Message::findOrFail($id);
        // Delete the message
        $message->delete();
        return redirect()->route('tourGuide.messages')->with('success', 'Message deleted successfully.');
    }
    public function bookingAndPricing()
    {
        $tourGuide = TourGuide::where('userId', auth()->user()->id)->first();
        $places = Places::all();
        return view('tourGuide.bookingAndPricing.index', compact('tourGuide', 'places'));
    }

    public function updateBookingAndPricing(Request $request, string $id)
    {
        $tourGuide = TourGuide::findOrFail($id); // Use findOrFail for better error handling
        $validatedData = $request->validate([
            'operating_area' => 'nullable|string|max:255',
            'places_id' => 'nullable|exists:places,id', // Validate existence in places table
            'tour_type' => 'nullable|string|max:255',
            'tourist_type' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'rating' => 'nullable|string|max:255',
            'tourist_capacity' => 'nullable|string|max:255',
        ]);

        $tourGuide->update($validatedData);

        return redirect()->route('tourGuide.bookingAndPricing')->with('success', 'Booking and Pricing updated successfully.');
    }

    public function showPendingBookings()
    {
        $bookings = Booking::where('tourGuide_id', auth()->user()->tourGuide->id)
            ->where('booking_status', 'pending')
            ->get();
        return view('tourGuide.pendingBookings.index', compact('bookings'));
    }
    public function showConfirmedBookings()
    {
        $bookings = Booking::where('tourGuide_id', auth()->user()->tourGuide->id)
            ->where('booking_status', 'approved')
            ->get();
        return view('tourGuide.confirmedBookings.index', compact('bookings'));
    }
    public function updateBookingStatus(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);
        $validatedData = $request->validate([
            'booking_status' => 'required|string|in:pending,approved',
        ]);

        $booking->update([
            'booking_status' => $validatedData['booking_status'],
        ]);

        return redirect()->route('tourGuide.confirmedBookings')->with('success', 'Booking status updated successfully.');
    }

    public function updatePaymentstatus(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);
        $validatedData = $request->validate([
            'payment_status' => 'required|string|in:paid,not_paid',
        ]);
        $booking->update([
            'payment_status' => $validatedData['payment_status'],
        ]);
        return redirect()->route('tourGuide.confirmedBookings')->with('success', 'Payment status updated successfully.');
    }

    public function bookingDetails(string $id)
    {
        $booking = Booking::findOrFail($id);
        $place = Places::find($booking->places_id);
        $tourGuide = TourGuide::find($booking->tourGuide_id);
        return view('frontend.bookingStats', compact('booking', 'place', 'tourGuide'));
    }
    public function deleteBooking(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('tourGuide.pendingBookings')->with('success', 'Booking deleted successfully.');
    }
}
