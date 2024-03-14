<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormDataEmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $userEmail;
    public $mcNumber;
    public $dot;
    public $additionalInfo;
    public $attachment;

    public function __construct($userName, $userEmail, $mcNumber, $dot, $additionalInfo, $attachment)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->mcNumber = $mcNumber;
        $this->dot = $dot;
        $this->additionalInfo = $additionalInfo;
        $this->attachment = $attachment;
    }

    public function build()
    {
        return $this->view('emails.form_data_notification')
            ->with([
                'userName' => $this->userName,
                'userEmail' => $this->userEmail,
                'mcNumber' => $this->mcNumber,
                'dot' => $this->dot,
                'additionalInfo' => $this->additionalInfo,
            ])
            ->attach($this->attachment->getRealPath(), [
                'as' => $this->attachment->getClientOriginalName(),
                'mime' => $this->attachment->getClientMimeType(),
            ]);
    }
}
