<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class tenant_email extends Mailable
{
    use Queueable, SerializesModels;
    public $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->id= $data;
    }

    /**
     * @return $this
     * Build the message.
     *
     */
    public function build()
    {
        return $this->markdown('frontend/Email.tenant_email')->with(['id'=>$this->id]);
    }
}
