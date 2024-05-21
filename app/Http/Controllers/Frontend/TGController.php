<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Booking;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TGController extends Controller
{
    public function index()
    {
        $tourGuides = TourGuide::with('user')->get();
        return view('frontend.showTourGuides', compact('tourGuides'))->with('isAllGuides', true);
        //zehetu same showTourGuides.blade.php file dui khane use kora hoise(also in tourGuideForAPlace function dekho) , 
        //tai view te isALLGuides variable ta pass kora hoise and view te zaiya check kortechi je isALLGuides true kina
    }

    public function tourGuideProfile(String $id) //id is the userId of the tourGuide
    {   //find the tourGuide by userId in the TourGuide model
        $tourGuide = TourGuide::where('userId', $id)->first();
        //find the user by id in the User model as we are passing the userId from the showTourGuides.blade.php file
        $user = User::find($id);
        return view('frontend.tourGuideSingle', compact('tourGuide', 'user'));
    }

    public function tourGuidesForAPlace(String $id)
    {

        //find the tourGuides by places_id in the TourGuide model
        $tourGuides = TourGuide::where('places_id', $id)->with('user')->get();
        session(['places_id' => $id]) ; //storing the places_id in the session to use it in the bookTourGuide function
        return view('frontend.showTourGuides', compact('tourGuides'))->with('isAllGuides', false);
    }
    public function bookTourGuide(String $id){

        //Retrive places_id from the session
        $places_id = session('places_id');
        if(is_null($places_id)){
            return redirect()->back()->with('error', 'Please select a place first for proceeding to booking.You can search and find all types of places in home page');
        }
        
        // return view('frontend.booking' , compact('id')); //sending the tourGuide_id to the booking.blade.php file so that it can be used in the form action
        return view('frontend.booking')->with('id', $id); // alternatively, use with() instead of compact()
    }
    
    public function submitBookingForm(Request $request) 
{
    $places_id = session('places_id');
    if (is_null($places_id)) {
        return redirect()->back()->with('error', 'Please select a place first for proceeding to booking. You can search and find all types of places on the home page.');
    }

    // Validate the incoming request data
    $request->validate([
        'f_name' => 'required|string|max:255',
        'l_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'gender' => 'required|string|max:10',
        'dob' => 'required|date',
        'country' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'address_line1' => 'required|string|max:255',
        'address_line2' => 'nullable|string|max:255',
    ]);
    
    // Create new booking
    $booking = Booking::create([
        'user_id' => auth()->id(), //logged in user id  
        'places_id' => $places_id,   //places_id from the session 
        'tourGuide_id' => $request->tourGuide_id, //tourGuide_id from the hidden input in the form  
        'f_name' => $request->f_name,
        'l_name' => $request->l_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'dob' => $request->dob,
        'country' => $request->country,
        'city' => $request->city,
        'address_line1' => $request->address_line1,
        'address_line2' => $request->address_line2,
        'booking_status' => 'pending',
        'payment_status' => 'not_paid',
    ]);
    // dd($request->all());

    return view('frontend.booking', compact('booking'))->with('success', 'Booking has been submitted successfully. Please wait for approval from the tour guide.');
}

}
