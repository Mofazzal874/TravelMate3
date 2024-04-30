<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationDetailController extends Controller
{
    public function index(){
        return view('frontend.destinationDetail');
    }
}
