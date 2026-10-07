<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmationMail;

class AppointmentController extends Controller
{
    /**
     * Show Appointment Form
     */
    public function create()
    {
        $departments = Department::all();

        return view('appointments.create', compact('departments'));
    }

    /**
     * Load Doctors by Department (AJAX)
     */
    public function doctors($department)
    {
        $doctors = Doctor::where('department_id', $department)
            ->where('status', true)
            ->get();

        return response()->json($doctors);
    }

    /**
     * Generate Appointment QR Code
     */
    public function qrCode($id)
    {
        $appointment = Appointment::with([
            'doctor',
            'department'
        ])->findOrFail($id);

        $data = "
SHEBY HOSPITAL

Appointment ID:
{$appointment->appointment_number}

Patient:
{$appointment->patient_name}

Doctor:
{$appointment->doctor->name}

Department:
{$appointment->department->name}

Date:
{$appointment->appointment_date}

Time:
{$appointment->appointment_time}
";

        return response(
            QrCode::size(300)->generate($data)
        )->header(
            'Content-Type',
            'image/svg+xml'
        );
    }

    /**
     * Save Appointment
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'doctor_id' => 'required|exists:doctors,id',

            'department_id' => 'required|exists:departments,id',

            'patient_name' => 'required|string|max:255',

            'phone' => 'required|string|max:20',

            'email' => 'nullable|email',

            'appointment_date' => 'required|date',

            'appointment_time' => 'required|string',

            'symptoms' => 'required|string|max:1000',

        ]);

        /*
        |--------------------------------------------------------------------------
        | Generate Appointment Number
        |--------------------------------------------------------------------------
        */

        $appointmentNumber =
            'SHEBY-APT-' .
            now()->format('Ymd') .
            '-' .
            strtoupper(substr(md5(uniqid()), 0, 5));

        /*
        |--------------------------------------------------------------------------
        | Save Appointment
        |--------------------------------------------------------------------------
        */

        $appointment = Appointment::create([

            'doctor_id' => $validated['doctor_id'],

            'department_id' => $validated['department_id'],

            'patient_name' => $validated['patient_name'],

            'phone' => $validated['phone'],

            'email' => $validated['email'] ?? null,

            'appointment_date' => $validated['appointment_date'],

            'appointment_time' => $validated['appointment_time'],

            'appointment_number' => $appointmentNumber,

            // Keep both fields until database is cleaned up
            'disease' => $validated['symptoms'],

            'symptoms' => $validated['symptoms'],

            'status' => 'pending',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Send Confirmation Email
        |--------------------------------------------------------------------------
        */

        if (!empty($appointment->email)) {

            Mail::to($appointment->email)
                ->send(new AppointmentConfirmationMail($appointment));
        }

        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('appointments.success', $appointment->id)
            ->with('success', 'Appointment booked successfully.');
    }
}