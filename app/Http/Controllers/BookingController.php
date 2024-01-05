<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        $request->validate([
            'vehicle_type' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        // Store the booking in the database
        $booking = Booking::create([
            'vehicle_type' => $request->input('vehicle_type'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        // Send confirmation email
        $this->sendBookingConfirmationEmail($booking);

        // Redirect to the success page with the success message
        return redirect()->route('success')->with('message', 'Booking successfully submitted. You will receive a response soon.');
    }

    // Add this method to handle the success page
    public function success()
    {
        // Get the success message from the session
        $message = session('message');

        // Return the success view with the message
        return view('success', compact('message'));
    }

    // Helper method to send booking confirmation email
    private function sendBookingConfirmationEmail($booking)
    {
        // You may customize the recipient email and name as needed
        $recipientEmail = 'info@hacksolutionsusa.com';
        $recipientName = 'Hack Solutions';

        // Send email
        Mail::to($recipientEmail, $recipientName)
            ->send(new BookingConfirmation($booking->toArray()));
    }
}
