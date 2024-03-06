<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FormData; // Import the FormData model

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData; // Declare public variable to hold the form data

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FormData $formData)
    {
        $this->formData = $formData; // Initialize the public variable with the form data
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.form_submitted') // Pass the form data to the view
                    ->subject('New Form Submission'); // Set the email subject
    }
}
