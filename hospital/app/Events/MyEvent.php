<?php

namespace App\Events;

use App\Models\Patient;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   public $patientId;
   public $invoiceId;

    public function __construct($data)
    {
        $patient = Patient::find($data['patient_id']);
        $this->patientId = $patient->name;
        $this->invoiceId = $data['invoice_id'];
    }

    public function broadcastOn()
    {
        return ['my-channel'];
    }
}
