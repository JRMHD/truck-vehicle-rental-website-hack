<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VehicleFormSubmitted;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'vehicle_type' => 'required',
            'price_range' => 'required',
        ]);

        Vehicle::create($data);

        // Get the authenticated user's name and email
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;

        // Send an email with the form data and user information
        Mail::to('cgreen@hacksolutionusa.com')->send(new VehicleFormSubmitted($data, $name, $email));

        return redirect()->route('home')->with('success', 'Data stored successfully and email sent.');
    }
}
