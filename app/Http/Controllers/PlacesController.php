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
        //
        Places::create($request->all());
        return redirect()->route('admin.places')->with('success', 'Place created successfully.');
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
