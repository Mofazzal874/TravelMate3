<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Places;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TourGuide;

class HomeController extends Controller
{
    public function index(){
        // Assuming you have a 'is_top_destination' column in your places table
        $topDestinations = Places::where('placeStatus', 1)->get();    //Assuming 1 means top destination
        $generalDestinations = Places::where('placeStatus' , 0)->get();     // Assuming 0 means General destination
        $topOffers = Places::where('placeStatus', 2)->get();         // Assuming 2 means top offers
        $tourGuides = User::where('type', 3)->get();        // Assuming 3 means tour guides
        // Return a view or JSON response with the data
        return view('frontend.index', compact('topDestinations', 'generalDestinations' , 'topOffers' , 'tourGuides'));
    }

    
    
}
