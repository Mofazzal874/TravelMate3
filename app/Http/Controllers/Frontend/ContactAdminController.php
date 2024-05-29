<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactAdminController extends Controller
{
    //
    public function sendMessage(String $id)
    {
        //unregistered user hoile null sender_id choila zabe , oi khhetre tourGuide shudhu message dekhte parbe ,but reply korte parbe na 
        $sender_id = auth()->check() ? auth()->user()->id : null;
        $recipient_id = $id;
        return view('frontend.contactus', compact('sender_id', 'recipient_id'));
    }
    public function submitMessageBtn(Request $request)
    {
        $validatedData = $request->validate([
            'sender_id' => 'nullable|string|max:255',
            'recipient_id' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new message instance and save to the database
        $message = new Message();
        $message->sender_id = $validatedData['sender_id'] ?? null;
        $message->recipient_id = $validatedData['recipient_id'];

        // Conditionally set name, email, and phone number based on user authentication
        if (Auth::check()) {
            $message->name = Auth::user()->name;
            $message->email = Auth::user()->email;
            $message->phone = Auth::user()->phone;
        } else {
            $message->name = $request->input('name');
            $message->email = $request->input('email');
            $message->phone = $request->input('phone');
        }

        $message->message = $validatedData['message'];
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

}
