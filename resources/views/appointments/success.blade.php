@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-blue-50 flex items-center justify-center py-16">


<div class="max-w-5xl w-full mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">


{{-- HEADER --}}

<div class="bg-blue-700 text-white text-center py-12 px-6">


<div class="w-28 h-28 mx-auto bg-white/20 rounded-full flex items-center justify-center text-6xl">

✅

</div>


<h1 class="text-4xl font-extrabold mt-6">

Appointment Confirmed!

</h1>


<p class="mt-4 text-blue-100 text-lg">

Thank you for choosing Sheby Hospital.
Your medical appointment has been successfully registered.

</p>


</div>





<div class="p-10">





{{-- APPOINTMENT NUMBER --}}


<div class="border-2 border-dashed border-blue-300 bg-blue-50 rounded-3xl p-8 text-center mb-10">


<p class="text-gray-600">

Appointment Number

</p>


<h2 class="text-4xl font-black text-blue-700 mt-3">

{{ $appointment->appointment_number }}

</h2>


<p class="text-sm text-gray-500 mt-3">

Keep this number when visiting Sheby Hospital.

</p>


</div>







{{-- DETAILS --}}


<div class="bg-gray-50 rounded-3xl p-8">


<h2 class="text-2xl font-bold text-blue-700 mb-8">

Appointment Details

</h2>



<div class="grid md:grid-cols-2 gap-8">



<div>

<p class="text-gray-500 text-sm">
Patient Name
</p>

<p class="font-bold text-lg">
{{ $appointment->patient_name }}
</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Department
</p>

<p class="font-bold text-lg">

{{ $appointment->department->name ?? 'N/A' }}

</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Doctor
</p>

<p class="font-bold text-lg">

{{ $appointment->doctor->name ?? 'N/A' }}

</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Phone
</p>

<p class="font-bold text-lg">

{{ $appointment->phone }}

</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Appointment Date
</p>

<p class="font-bold text-lg">

{{ $appointment->appointment_date }}

</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Appointment Time
</p>

<p class="font-bold text-lg">

{{ $appointment->appointment_time }}

</p>

</div>





<div>

<p class="text-gray-500 text-sm">
Status
</p>


<span class="inline-block mt-2 px-5 py-2 rounded-full bg-yellow-100 text-yellow-700 font-semibold">

{{ ucfirst($appointment->status) }}

</span>


</div>





<div class="md:col-span-2">


<p class="text-gray-500 text-sm">

Symptoms / Reason

</p>


<p class="font-bold text-lg">

{{ $appointment->symptoms ?? $appointment->disease }}

</p>


</div>




</div>


</div>









{{-- QR CODE --}}


<div class="mt-12 bg-blue-50 rounded-3xl p-10 text-center">


<h2 class="text-3xl font-bold text-blue-700">

Hospital Verification QR

</h2>



<p class="text-gray-600 mt-3">

Present this QR code at Sheby Hospital reception.

</p>





<div class="mt-8 bg-white rounded-3xl shadow-lg p-8 inline-block">


<img

src="{{ route('appointments.qr',$appointment->id) }}"

class="w-72 h-72 mx-auto"

alt="Appointment QR Code"


>


</div>






<div class="mt-8 flex flex-col md:flex-row justify-center gap-5">


<a

href="{{ route('appointments.qr',$appointment->id) }}"

download="Sheby-Hospital-Appointment-QR.svg"

class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold">


⬇ Download QR Code


</a>





<button

onclick="window.print()"

class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold">


🖨 Print Appointment


</button>


</div>




</div>









{{-- BUTTONS --}}


<div class="mt-12 flex flex-col md:flex-row justify-center gap-5">


<a

href="/"

class="bg-blue-700 hover:bg-blue-800 text-white px-10 py-3 rounded-full font-semibold text-center">


Back Home


</a>




<a

href="{{ route('appointments.create') }}"

class="border-2 border-blue-700 text-blue-700 hover:bg-blue-50 px-10 py-3 rounded-full font-semibold text-center">


Book Another Appointment


</a>



</div>









{{-- FOOTER CONTACT --}}


<div class="mt-12 text-center text-gray-500">


<p>

📍 Dar es Salaam, Tanzania

</p>


<p>

☎ Emergency: +255 766822536

</p>


<p>

✉ info@shebyhospital.com

</p>


</div>




</div>


</div>


</div>


@endsection