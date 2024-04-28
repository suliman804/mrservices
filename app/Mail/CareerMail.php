<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mailData;

    public function __construct($mailData)
    {
        $logo_image = public_path('logo/logo.png');
        $this->mailData = $mailData;
        $this->mailData['logo'] = $logo_image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->subject($this->mailData['subject'])
                    ->view('emails.career_reply');
    }
}
