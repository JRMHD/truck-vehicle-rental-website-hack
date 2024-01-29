<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JourneyPlan;
use App\Mail\JourneyPlanNotification;
use Illuminate\Support\Facades\Mail;

class JourneyPlanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pickup_dropoff_location' => 'required|string',
            'pick_up_date' => 'required|date',
            'pick_up_time' => 'required|date_format:H:i',
            // Add validation for other fields as needed
        ]);

        $journeyPlan = JourneyPlan::create($request->all());

        $this->sendNotificationEmail($journeyPlan);

        return view('success')->with('message', 'We are finding you a vehicle. Expect to hear from us soon!');
    }

    private function sendNotificationEmail(JourneyPlan $journeyPlan)
    {
        $details = [
            'name' => $journeyPlan->name, // Replace with the actual field name from your form
            'email' => $journeyPlan->email, // Replace with the actual field name from your form
            'pickup_dropoff_location' => $journeyPlan->pickup_dropoff_location,
            'pick_up_date' => $journeyPlan->pick_up_date,
            'pick_up_time' => $journeyPlan->pick_up_time,
            // Add other details as needed
        ];
        // Get the authenticated user's name and email

        // Replace with the email address where you want to send notifications
        $recipientEmail = 'cgreen@hacksolutionsusa.com';

        Mail::to($recipientEmail)->send(new JourneyPlanNotification($details));
    }
}
