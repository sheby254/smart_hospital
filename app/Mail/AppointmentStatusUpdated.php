<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;


    public $appointment;


    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }



    public function build()
    {
        return $this
            ->subject('Sheby Hospital Appointment Status Updated')
            ->view('emails.appointment-status');
    }
}