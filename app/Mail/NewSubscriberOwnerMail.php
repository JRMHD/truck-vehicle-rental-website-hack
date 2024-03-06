<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewSubscriberOwnerMail extends Mailable
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
        return $this->view('emails.new_subscriber_owner')
            ->subject('New Subscriber Alert');
    }
}
