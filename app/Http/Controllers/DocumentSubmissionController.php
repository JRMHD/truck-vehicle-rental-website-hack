<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentSubmission;
use App\Mail\FormDataEmailNotification;
use Illuminate\Support\Facades\Mail;

class DocumentSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mc_number' => 'required|string|max:255',
            'dot' => 'required|string|max:255',
            'driver_license' => 'required',
            'additional_info' => 'nullable|string',
        ]);

        $documentSubmission = new DocumentSubmission([
            'mc_number' => $request->mc_number,
            'dot' => $request->dot,
            'driver_license' => $request->file('driver_license')->store('driver_licenses'),
            'additional_info' => $request->additional_info,
        ]);

        $documentSubmission->save();

        return redirect()->back()->with('success', 'Documents submitted successfully.');
        $userName = $request->input('name');
        $userEmail = $request->input('email');
        $mcNumber = $request->input('mcNumber');
        $dot = $request->input('dot');
        $additionalInfo = $request->input('additional_info');
        $attachment = $request->file('driver_license');

        Mail::to('cgreen@hacksolutionsusa.com')
            ->send(new FormDataEmailNotification($userName, $userEmail, $mcNumber, $dot, $additionalInfo, $attachment));
    }
}
