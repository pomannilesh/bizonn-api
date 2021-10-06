<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class LowInventoryMail extends Mailable
{
	
    public $data;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data){
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->markdown('emails.LowInventoryMail')->subject('Low inventory Alert for '.$this->data['machine_name'].'.')->with('data', $this->data);
    }
}