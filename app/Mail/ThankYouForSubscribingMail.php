<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouForSubscribingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The new subscriber instance.
     *
     * @var \App\Models\NewSubscriber
     */
    public $newSubscriber;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\NewSubscriber $newSubscriber
     */
    public function __construct($newSubscriber)
    {
        $this->newSubscriber = $newSubscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.thank_you_for_subscribing')
            ->subject('Thank You For Subscribing');
    }
}