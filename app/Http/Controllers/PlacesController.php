<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        'address' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'country' => 'nullable|string|max:255',
        'postalCode' => 'nullable|string|max:255', // Add postalCode to the validation rules
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|string|email|max:255',
        'website' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:20',
        'longitude' => 'nullable|string|max:20',
        'description' => 'required|string',
        'minDuration' => 'required|string',
        'openingHours' => 'nullable|string|max:20',
        'closingHours' => 'nullable|string|max:20',
        'price' => 'required|string',
        'rating' => 'required|string',
        'placeStatus' => 'required|boolean',
        'placeType' => 'nullable|string|max:255',
        
    ]);

    // Check if image file is present in the request
    if ($request->hasFile('imageURL')) {
        $validatedData['imageURL'] = $request->file('imageURL')->store('images', 'public') ; // Store the image in the 'images' folder inside the 'public' disk
    } 

    // Create a new place with the validated data and image
    //  dd($validatedData) ;
    Places::create($validatedData);
    
    // Redirect or return a response
    // dd($validatedData) ;
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
    $places = Places::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'country' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|string|email|max:255',
        'website' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:20',
        'longitude' => 'nullable|string|max:20',
        'description' => 'nullable|string',
        'minDuration' => 'required|string',
        'opening_hours' => 'nullable|string|max:20',
        'closing_hours' => 'nullable|string|max:20',
        'price' => 'required|string',
        'rating' => 'required|string',
        'placeStatus' => 'required|boolean',
        'placeType' => 'nullable|string|max:255',
    ]);

    // Check if image file is present in the request
    if ($request->hasFile('imageURL')) {
        // Delete the old image if it exists
        if ($places->imageURL) {
            Storage::disk('public')->delete($places->imageURL);
        }
        // Store the new image
        $validatedData['imageURL'] = $request->file('imageURL')->store('images', 'public');
    }
     
    $places->update($validatedData);
    return redirect()->route('admin.places')->with('success', 'Place updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Find the place in the database
    $place = Places::findOrFail($id);

    // Check if the place has an associated image
    if ($place->imageURL) {
        // Delete the image from storage
        Storage::disk('public')->delete($place->imageURL);
    }

    // Delete the place
    $place->delete();

    // Redirect to the places page with a success message
    return redirect()->route('admin.places')->with('success', 'Place deleted successfully.');
}
}
