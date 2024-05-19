<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourGuideController extends Controller
{
    //
    public function index(){
        $tourGuides = User::where('type', 3)->get(); 
        return view('frontend.ShowTourGuides', compact('tourGuides'));
    }

    public function tourGuideProfile(String $id){  //this is user id
        $tourGuide = TourGuide::where('userId', $id)->first();
        $user = User::find($id);
         // Pass the tour guide data to the view
         return view('frontend.tourGuideSingle', compact('tourGuide' , 'user'));
    }
    //backend tourGuide functions 

    public function editProfile(){
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
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
    public function bookingAndPricing(){
        $tourGuide = TourGuide::where('userId', auth()->user()->id)->first();
        return view('tourGuide.bookingAndPricing.index', compact('tourGuide'));
    }
    public function updateBookingAndPricing(Request $request, string $id){
        $tourGuide = TourGuide::find($id);
        $validatedData = $request->validate([
            'operating_area' => 'nullable|string|max:255',
            'tour_type' => 'nullable|string|max:255',
            'tourist_type' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'rating' => 'nullable|string|max:255',
            'tourist_capacity' => 'nullable|string|max:255',
        ]);
        $tourGuide->update($validatedData);
        return redirect()->route('tourGuide.bookingAndPricing')->with('success', 'Booking and Pricing updated successfully.');

    }
    
}
