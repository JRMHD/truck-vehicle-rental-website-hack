<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JourneyPlanned extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @param string $name
     * @param string $email
     * @return void
     */
    public function __construct($data, $name, $email)
    {
        $this->data = $data;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Journey Planned')
            ->view('emails.journey_planned');
    }
}
