<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function index(){
        $team = User::where('type' , '1')->get();
        return view('frontend.aboutus' , compact('team'));
    }
    public function userDetails($id){
        $user = User::find($id);
        return view('frontend.userDetails', compact('user'));
    }
}
