<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentStatusUpdated extends Notification
{
    use Queueable;


    public $appointment;


    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }



    public function via($notifiable)
    {
        return ['mail'];
    }




    public function toMail($notifiable)
    {

        return (new MailMessage)

            ->subject('Sheby Hospital Appointment '.$this->appointment->status)

            ->greeting('Dear '.$this->appointment->patient_name)

            ->line(
                'Your appointment status has been updated.'
            )

            ->line(
                'Appointment ID: '.
                $this->appointment->appointment_number
            )

            ->line(
                'Department: '.
                ($this->appointment->department->name ?? 'N/A')
            )

            ->line(
                'Doctor: '.
                ($this->appointment->doctor->name ?? 'N/A')
            )

            ->line(
                'Date: '.
                $this->appointment->appointment_date
            )

            ->line(
                'Time: '.
                $this->appointment->appointment_time
            )

            ->line(
                'Status: '.
                ucfirst($this->appointment->status)
            )

            ->line(
                'Thank you for choosing Sheby Hospital.'
            )

            ->line(
                'Dar es Salaam, Tanzania'
            )

            ->line(
                'Emergency: +255 766822536'
            );

    }
}