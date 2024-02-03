<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserApproved extends Mailable
{
    use SerializesModels;

    public $user;

    // use Queueable, SerializesModels;

    
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function build()
    {
        // dd('here');
        return $this->subject('Account Approved')->view('emails.user-approved');
    }


  
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
