<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class MachineStatus extends Mailable
{
	public $data;
    //public $partCount;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($machine, $account, $monitorData){
        $this->machine = $machine;
        $this->account = $account;
        $this->monitorData = $monitorData;
        $this->status = $monitorData['monitor_status'];
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        if($this->status == 'error'){
            $subject = 'SaaS Generated Machine Alert - Error';
            return $this->subject($subject)->with(['kiosk' => $this->machine, 'account' => $this->account, 'monitorData' => $this->monitorData])->markdown('MachineStatusEmail');
        }else{
            $subject = 'SaaS Generated Machine Alert - Online';
            return $this->subject($subject)->with(['kiosk' => $this->machine, 'account' => $this->account, 'monitorData' => $this->monitorData])->markdown('MachineStatusEmailOnline');
        }
    }
} 