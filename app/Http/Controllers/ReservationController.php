<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Mail\ReservationNotification;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'vehicle_type' => 'required|string',
        ]);

        // Store the reservation in the database
        $reservation = Reservation::create([
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'vehicle_type' => $request->input('vehicle_type'),
        ]);

        // Send email notification to the owner
        Mail::to('cgreen@hacksolutionsusa.com')->send(new ReservationNotification($reservation));

        // Redirect or respond as needed
        return redirect()->route('success')->with('message', 'Booking successfully submitted. You will receive a response soon.');
    }
}
