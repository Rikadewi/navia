<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->data['user'] == true) {
            return $this->from(env('MAIL_USERNAME'))->subject('Thanks for Contacting Us')->view('mail.user')->with('data', $this->data);
        } else{
            return $this->from(env('MAIL_ADMIN'))->subject('NAVIA Admin')->view('mail.admin')->with('data', $this->data);
        }
    }
}
