<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;

    public function __construct($reservationData)
    {
        $this->reservationData = $reservationData;
    }

    public function build()
    {
        return $this->view('emails.reservation_notification')
            ->with(['reservationData' => $this->reservationData])
            ->subject('New Reservation Request');
    }
}
