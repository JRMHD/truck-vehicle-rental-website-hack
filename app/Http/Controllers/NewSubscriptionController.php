<?php

namespace App\Http\Controllers;

use App\Models\NewSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriberOwnerMail;
use App\Mail\ThankYouForSubscribingMail;

class NewSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'email' => 'required|email|unique:new_subscribers',
        ]);

        // Save the subscription to the database
        $newSubscriber = NewSubscriber::create([
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
        ]);

        // Send email to the owner
        Mail::to('cgreen@hacksolutionsusa.com')->send(new NewSubscriberOwnerMail($newSubscriber));

        // Send thank you email to the subscriber
        Mail::to($newSubscriber->email)->send(new ThankYouForSubscribingMail($newSubscriber));

        return redirect()->back()->with('success', 'Subscription successful!');
    }
}
