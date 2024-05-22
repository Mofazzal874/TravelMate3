<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Places;
use App\Models\Booking;
use App\Models\Message;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    //dashboard function is in DashboardController
    public function editProfile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view('user.profile.edit', compact('profile'));
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

        return redirect()->route('user.dashboard')->with('success', 'Profile updated successfully.');
    }


    public function messages()
    {
        // Retrieve messages where the recipient role is admin
        $messages = Message::where('recipient_role', 'user')->get();

        // Pass the messages data to the view
        return view('user.messages.index', compact('messages'));
    }
    public function deleteMessage(string $id)
    {

        // Find the message by ID
        $message = Message::findOrFail($id);
        // Delete the message
        $message->delete();
        return redirect()->route('user.messages')->with('success', 'Message deleted successfully.');
    }
    public function bookings(){
        $bookings = Booking::where('user_id', auth()->user()->id)->get();
        return view('user.bookings.index', compact('bookings'));
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
        // Find the booking by ID
        $booking = Booking::findOrFail($id);
        // Delete the booking
        $booking->delete();
        return redirect()->route('user.bookings')->with('success', 'Booking deleted successfully.');
    }
}
