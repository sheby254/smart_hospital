<!DOCTYPE html>

<html>

<head>

<title>
Appointment Confirmation
</title>

</head>


<body style="font-family: Arial;background:#f1f5f9;padding:30px;">


<div style="
max-width:600px;
margin:auto;
background:white;
padding:30px;
border-radius:20px;
">


<h1 style="color:#075aa8;text-align:center;">

Sheby Hospital

</h1>


<h2 style="text-align:center;">

Appointment Confirmed ✅

</h2>



<p>

Dear {{ $appointment->patient_name }},

</p>


<p>

Your appointment has been successfully booked.

</p>




<hr>




<h3 style="color:#075aa8;">

Appointment Details

</h3>


<p>
<strong>Appointment ID:</strong>
{{ $appointment->appointment_number }}
</p>


<p>
<strong>Doctor:</strong>
{{ $appointment->doctor->name }}
</p>



<p>
<strong>Department:</strong>
{{ $appointment->department->name }}
</p>



<p>
<strong>Date:</strong>
{{ $appointment->appointment_date }}
</p>



<p>
<strong>Time:</strong>
{{ $appointment->appointment_time }}
</p>




<p>

Please keep your appointment ID when visiting our hospital.

</p>




<p>

📍 Dar es Salaam, Tanzania

<br>

☎ Emergency:
+255 766822536

<br>

✉ info@shebyhospital.com

</p>



</div>


</body>

</html>