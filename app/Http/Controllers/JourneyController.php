<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journey;
use Illuminate\Support\Facades\Mail;
use App\Mail\JourneyPlanned;

class JourneyController extends Controller
{
    /**
     * Plan a journey and store it in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function plan(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'starting_point' => 'required',
            'destination' => 'required',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'preferred_time' => 'required',
        ]);

        // Create a new journey record
        $journey = Journey::create($data);

        // Get the authenticated user's name and email
        $user = $request->user();
        $name = $user->name;
        $email = $user->email;

        // Send an email with the journey data and user information
        Mail::to('hacksolutionsusa@bookerttransportllc.com')->send(new JourneyPlanned($data, $name, $email));

        // Redirect back to the welcome page with a success message
        return redirect()->route('journey.submitted')->with('success', 'Journey planned successfully.');
    }
}
