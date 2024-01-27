<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\RentSubmission;

class RentSubmissionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'vehicle_type' => 'required|string',
        ]);

        // Store the submission in the database
        RentSubmission::create($request->all());

        // Send an email
        Mail::to('cgreen@hacksolutionsusa.com')->send(new \App\Mail\BookingMade($request->all()));

        // Redirect to the success page with a success message
        return view('success')->with('message', 'Booking successful! Expect to hear from us soon!');
    }
}
