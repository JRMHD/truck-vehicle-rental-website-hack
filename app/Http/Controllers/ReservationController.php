<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        // Store the reservation in the database
        Reservation::create([
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        // Redirect or respond as needed
        return redirect()->route('success')->with('message', 'Booking successfully submitted. You will receive a response soon.');
    }

    public function success()
    {
        // Get the success message from the session or set a default message
        $message = session('message', 'Booking successful!');

        // Return the success view with the message
        return view('success', compact('message'));
    }
}
