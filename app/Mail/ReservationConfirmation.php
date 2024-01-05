<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;

    public function __construct($reservationData)
    {
        $this->reservationData = $reservationData;
    }

    public function build()
    {
        return $this->subject('New Reservation')->view('emails.reservation_confirmation');
    }
}
