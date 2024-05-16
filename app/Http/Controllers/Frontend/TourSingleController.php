<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Places;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourSingleController extends Controller
{
    public function index(String $id){
        $destination = Places::findOrFail($id);
        return view('frontend.tourSingle' , compact('destination'));
    }
    
    
}
