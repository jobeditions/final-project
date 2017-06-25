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
    public $name1;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name1)
    {
        this->name1=$name1; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        return $this->view('mail.mail')->to('jobeditions@gmail.com');
    }
                                                            
}
