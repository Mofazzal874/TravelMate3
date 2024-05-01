<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Places::orderBy('created_at', 'desc')->get();
        return view('places.index' , compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('places.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|string|email|max:255',
        'website' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:20',
        'longitude' => 'nullable|string|max:20',
        'description' => 'nullable|string',
        'minDuration' => 'required|string',
        'price' => 'required|string',
        'rating' => 'required|string',
        'placeStatus' => 'required|boolean',
        'imageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for image upload
    ]);

    // Check if image file is present in the request
    if ($request->hasFile('imageURL')) {
        // Retrieve the image from the request and convert it to a binary string
        $image = $request->file('imageURL')->openFile()->fread($request->file('imageURL')->getSize());
    } else {
        $image = null; // Set image to null if no file is uploaded
    }

    // Create a new place with the validated data and image
    Places::create([
        'name' => $validatedData['name'],
        'address' => $validatedData['address'],
        'city' => $validatedData['city'],
        'country' => $validatedData['country'],
        'phone' => $validatedData['phone'],
        'email' => $validatedData['email'],
        'website' => $validatedData['website'],
        'latitude' => $validatedData['latitude'],
        'longitude' => $validatedData['longitude'],
        'description' => $validatedData['description'],
        'minDuration' => $validatedData['minDuration'],
        'price' => $validatedData['price'],
        'rating' => $validatedData['rating'],
        'placeStatus' => $validatedData['placeStatus'],
        'imageURL' => $image, // Save the binary image data into 'imageURL' column

    ]);

    // Redirect or return a response
    return redirect()->route('admin.places')->with('success', 'Place created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $places = Places::findOrFail($id);
        return view('places.show' , compact('places'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $places = Places::findOrFail($id);
        return view('places.edit' , compact('places'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $places = Places::findOrFail($id); //find the place in the database
        $places->update($request->all());  //update the place
        return redirect()->route('admin.places')->with('success', 'Place updated successfully.'); //redirect to the places page
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $places = Places::findOrFail($id); //find the place in the database
        $places->delete(); //delete the place
        return redirect()->route('admin.places')->with('success', 'Place deleted successfully.'); //redirect to the places page
    }
}
