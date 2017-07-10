<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $mailing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailing)
    {
       $this->mailing= $mailing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       

        return $this->view('mail.sendmail',compact('mailing'));
    }
                                                            
}
