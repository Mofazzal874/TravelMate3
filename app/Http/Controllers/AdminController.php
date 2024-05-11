<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //

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
}
