<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Mail\SubscriptionConfirmationToUser;
use App\Mail\SubscriptionNotificationToOwner;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:subscriptions',
        ]);

        $subscription = Subscription::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
        ]);

        // Send email to the subscriber
        Mail::to($subscription->email)->send(new SubscriptionConfirmationToUser($subscription));

        // Send email to the owner
        Mail::to('cgreen@hacksolutionsusa.com')->send(new SubscriptionNotificationToOwner($subscription));

        return redirect()->back()->with('success', 'Subscription successful!');
    }
}
