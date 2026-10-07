<!DOCTYPE html>
<html>
<head>

<title>Appointment Status Updated</title>

</head>

<body>

<h2>Sheby Hospital</h2>

<p>Hello {{ $appointment->patient_name }},</p>


<p>
Your appointment status has been updated.
</p>


<hr>


<p>
<strong>Appointment ID:</strong>
{{ $appointment->appointment_number }}
</p>


<p>
<strong>Status:</strong>
{{ ucfirst($appointment->status) }}
</p>


<p>
<strong>Doctor:</strong>
{{ $appointment->doctor->name ?? 'N/A' }}
</p>


<p>
<strong>Department:</strong>
{{ $appointment->department->name ?? 'N/A' }}
</p>


<p>
<strong>Date:</strong>
{{ $appointment->appointment_date }}
</p>


<p>
<strong>Time:</strong>
{{ $appointment->appointment_time }}
</p>


<hr>


<p>
Thank you for choosing Sheby Hospital.
</p>


<p>
Excellence in Healthcare
</p>


</body>
</html>