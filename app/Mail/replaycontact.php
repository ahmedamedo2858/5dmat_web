<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class replaycontact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $message;
    protected $replay;
    public function __construct($message,$replay)
    {
       $this->message=$message;
       $this->replay=$replay;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contact=$this->message;
        $replayall=$this->replay;
        return $this->to($contact->email)->
        view('backeend.mail.replay-message',compact('contact','replayall'));
    }
}
