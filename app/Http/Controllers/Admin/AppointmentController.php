<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\AppointmentStatusUpdated;

class AppointmentController extends Controller
{
    /**
     * Display all appointments.
     */
    public function index()
    {
        $appointments = Appointment::with([
            'doctor',
            'department'
        ])
        ->latest()
        ->get();

        return view(
            'admin.appointments.index',
            compact('appointments')
        );
    }

    /**
     * Display a single appointment.
     */
    public function show($id)
    {
        $appointment = Appointment::with([
            'doctor',
            'department'
        ])->findOrFail($id);

        return view(
            'admin.appointments.show',
            compact('appointment')
        );
    }

    /**
     * Update appointment status.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $appointment = Appointment::with([
            'doctor',
            'department'
        ])->findOrFail($id);

        $appointment->status = $request->status;
        $appointment->save();

        /*
        |--------------------------------------------------------------------------
        | Send Status Update Email
        |--------------------------------------------------------------------------
        */
        if (!empty($appointment->email)) {

            Mail::to($appointment->email)
                ->send(new AppointmentStatusUpdated($appointment));

        }

        return redirect()
            ->back()
            ->with(
                'success',
                'Appointment status updated successfully.'
            );
    }
}