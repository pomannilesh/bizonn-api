<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CustomerMail extends Mailable
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
    	return $this->markdown('emails.CustomerMail')->subject('Thank you for shopping with us.')->with('order', $this->data);
    }
}