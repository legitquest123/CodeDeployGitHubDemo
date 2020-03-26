<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;
     public $candidatename;
     public $jobtype;
     public $applyfor;
     public $attachment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidatename , $jobtype , $applyfor ,$attachment)
    {
        $this->candidatename = $candidatename;
        $this->jobtype = $jobtype;
        $this->applyfor = $applyfor;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.career');
    }
}
