<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Places;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Controllers\Controller;

class TourController extends Controller
{

    public function allDestination(){
        $places = Places::all();
        return view('frontend.destination', compact('places'));
    }
    public function hiking(){
        $places = Places::where('placeType', 'Hiking')->get();
        return view('frontend.destination', compact('places'));
    }
    public function camping(){
        $places = Places::where('placeType', 'Camping')->get();
        return view('frontend.destination', compact('places'));
    }
    public function trekking(){
        $places = Places::where('placeType', 'Trekking')->get();
        return view('frontend.destination', compact('places'));
    }
    public function adventure(){
        $places = Places::where('placeType', 'Adventure')->get();
        return view('frontend.destination', compact('places'));
    }
    public function wildlife(){
        $places = Places::where('placeType', 'Wildlife')->get();
        return view('frontend.destination', compact('places'));
    }
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
    public function topDestination(){
        $places = Places::where('placeStatus', 1 )->get();
        return view('frontend.topDestination', compact('places'));
    }
    public function gallery()
{
    $places = Places::all();
    return view('frontend.gallery', compact('places'));
}

    
}
