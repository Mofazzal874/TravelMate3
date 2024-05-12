<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactAdminController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
            'recipient_role' => 'required|string',
        ]);

        // Determine the recipient role based on the form data or the page where the form is submitted from

        // Save the message to the database
        Message::create($validatedData);

        // Redirect back or to a thank you page
        return redirect()->route('home')->with('message_sent', true);
    }
}
