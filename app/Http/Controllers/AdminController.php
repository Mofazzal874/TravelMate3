<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Profile;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    // dasboard function is in DashboardController
    public function editProfile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view('admin.profile.edit', compact('profile'));
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

        return redirect()->route('admin.dashboard')->with('success', 'Profile updated successfully.');
    }

    public function messages()
    {
        // Retrieve messages where the recipient role is admin
        $messages = Message::where('recipient_id', auth()->user()->id)->get();
        // Pass the messages data to the view
        return view('admin.messages.index', compact('messages'));
    }
    public function deleteMessage(string $id)
    {
        
        // Find the message by ID
        $message = Message::findOrFail($id);
        // Delete the message
        $message->delete();
        return redirect()->route('admin.messages')->with('success', 'Message deleted successfully.');
    }

    public function showTourGuides()
    {
        // Retrieve all tour guides
        
        $tourGuides = TourGuide::all() ; 
        // Pass the tour guides data to the view
        return view('admin.tourGuides.index', compact('tourGuides'));
    }
    public function TourGuideDetails(string $id)
    {
        // Find the tour guide by ID
        $tourGuide = TourGuide::findOrFail($id);
        $user = User::findOrFail($tourGuide->userId);
        // Pass the tour guide data to the view
        return view('admin.tourGuides.show', compact('tourGuide' , 'user'));
    }

    public function deleteTourGuides(string $id){
        // Find the tour guide by ID
        $tourGuide = TourGuide::findOrFail($id);
        // Delete the tour guide
        $tourGuide->delete();
        return redirect()->route('admin.tourGuides')->with('success', 'Tour guide deleted successfully.');
    }
    public function showUpdateRole()
    {
        // Retrieve all users
        $users = User::all();
        // Pass the users data to the view
        return view('admin.updateRole.index', compact('users'));
    }
    public function updateRole(Request $request, string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
    
        // Check if the current user type is "admin"
        if ($user->type === 'admin') {
            return redirect()->route('admin.updateRole')->with('error', 'Cannot update role for admin user.');
        }
    
        // Validate the incoming request data
        $validatedData = $request->validate([
            'type' => 'required|string|in:user,admin,manager,tourGuide',
        ]);
    
        // Map role string to its numerical representation
        $roleValue = array_search($validatedData['type'], ["user", "admin", "manager", "tourGuide"]);
    
        // Update the user role
        $user->update(['type' => $roleValue]);
    
        // If the new role is 'tourGuide', insert a record into the tour_guides table
        if ($roleValue === array_search('tourGuide', ["user", "admin", "manager", "tourGuide"])) {
            TourGuide::create([
                'userId' => $user->id,
                // Add any additional fields you need to populate
            ]);
        }
    
        return redirect()->route('admin.updateRole')->with('success', 'User role updated successfully.');
    }
    
    


    public function deleteUser(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
        // Check if the user type is "admin"
        if ($user->type === 'admin') {
            return redirect()->route('admin.updateRole')->with('error', 'Cannot update role for admin user.');
        }
        if ($user->type === 'tourGuide') {
            TourGuide::where('userId', $user->id)->delete();
        }
        $user->delete();
        return redirect()->route('admin.updateRole')->with('success', 'User deleted successfully.');
    }

}
