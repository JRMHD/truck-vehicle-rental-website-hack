<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Models\FormData; // Import the model
use App\Mail\FormSubmitted; // Import the Mailable class

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Create a new instance of the model and fill it with the form data
        $formData = new FormData();
        $formData->name = $request->name;
        $formData->email = $request->email;
        $formData->subject = $request->subject;
        $formData->message = $request->message;

        // Save the form data to the database
        $formData->save();

        // Send email to specified address
        Mail::to('cgreen@hacksolutionsusa.com')->send(new FormSubmitted($formData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
