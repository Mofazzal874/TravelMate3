<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Places;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
   public function bestDestination()
    {
        // Filter places based on the placeStatus
        $places = Places::where('placeStatus', 2 )->get();
        return view('frontend.bestDestination', compact('places'));
    }
    public function generalDestination()
    {
        // Filter places based on the placeStatus
        $places = Places::where('placeStatus', 0 )->get();
        return view('frontend.generalDestination', compact('places'));
    }
    
}
