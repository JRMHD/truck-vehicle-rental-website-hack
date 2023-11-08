<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VehicleFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $name;
    public $email;

    public function __construct($data, $name, $email)
    {
        $this->data = $data;
        $this->name = $name;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.vehicle_form_submitted')
            ->subject('New Vehicle Form Submission');
    }
}
