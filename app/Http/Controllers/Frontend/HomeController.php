<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Places;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        // Assuming you have a 'is_top_destination' column in your places table
        $topDestinations = Places::where('placeStatus', 1)->get();
        // Return a view or JSON response with the data
        return view('frontend.index', compact('topDestinations'));
    }



    // New function to fetch top destinations and show it on the index page 
    public function getTopDestinations(){
        
    }
}
