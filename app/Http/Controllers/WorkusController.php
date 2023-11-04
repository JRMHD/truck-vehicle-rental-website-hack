<?php

namespace App\Http\Controllers;
use App\Mail\WorkWithUsMail;
use Illuminate\Http\Request;
use App\Models\Workus; // Import the Workus model at the top
use Illuminate\Support\Facades\Mail;
class WorkusController extends Controller
{
    public function showForm()
    {
        return view('welcome'); // This should load your form view (create a Blade view for the form).
    }

    public function storeForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'state' => 'required',
        ]);

        $existingRecord = Workus::where('email', $data['email'])->first();

        if ($existingRecord) {
            // If a record with the same email exists, update it
            $existingRecord->update($data);
            $message = 'Data updated successfully.';
        } else {
            // If no record with the same email exists, create a new one
            Workus::create($data);
            $message = 'Data submitted successfully.';
        }
        Mail::to('cgreen@hacksolutionusa.com')->send(new WorkWithUsMail($data));
        return redirect('/work')->with('success', $message);
    }
}
