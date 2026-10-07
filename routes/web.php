<?php

use Illuminate\Support\Facades\Route;

use App\Models\Appointment;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;

/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');


/*
|--------------------------------------------------------------------------
| Appointment Routes
|--------------------------------------------------------------------------
*/

// Redirect /appointments to booking page
Route::get('/appointments', function () {
    return redirect()->route('appointments.create');
})->name('appointments');


// Booking form
Route::get('/appointments/create', [AppointmentController::class, 'create'])
    ->name('appointments.create');


// Save booking
Route::post('/appointments', [AppointmentController::class, 'store'])
    ->name('appointments.store');


// AJAX - doctors by department
Route::get('/appointments/doctors/{department}', [AppointmentController::class, 'doctors'])
    ->name('appointments.doctors');


// Success page
Route::get('/appointments/success/{id}', function ($id) {

    $appointment = Appointment::with([
        'doctor',
        'department'
    ])->findOrFail($id);

    return view('appointments.success', compact('appointment'));

})->name('appointments.success');


// QR Code
Route::get('/appointments/{id}/qr', [AppointmentController::class, 'qrCode'])
    ->name('appointments.qr');


/*
|--------------------------------------------------------------------------
| Admin Appointment Dashboard
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/appointments', [AdminAppointmentController::class, 'index'])
        ->name('admin.appointments.index');

    // View appointment
    Route::get('/appointments/{id}', [AdminAppointmentController::class, 'show'])
        ->name('admin.appointments.show');

    // Update status
    Route::put('/appointments/{id}/status', [AdminAppointmentController::class, 'updateStatus'])
        ->name('admin.appointments.status');

});