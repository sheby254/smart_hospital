@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-gray-50 py-16">


<div class="max-w-5xl mx-auto px-6">


<div class="bg-white rounded-3xl shadow-xl p-10 border">


{{-- HEADER --}}

<div class="flex justify-between items-center mb-10">


<div>

<h1 class="text-4xl font-extrabold text-blue-700">
Appointment Details
</h1>


<p class="text-gray-500 mt-2">
Sheby Hospital Administration
</p>

</div>



<div>

<span
class="px-5 py-2 rounded-full text-white font-bold

@if($appointment->status == 'confirmed')
bg-green-600

@elseif($appointment->status == 'completed')
bg-blue-600

@elseif($appointment->status == 'cancelled')
bg-red-600

@else
bg-yellow-500

@endif
">

{{ ucfirst($appointment->status) }}

</span>

</div>


</div>




{{-- DETAILS --}}


<div class="grid md:grid-cols-2 gap-8">



<div>
<p class="text-gray-500">
Appointment ID
</p>

<p class="font-bold text-lg">
{{ $appointment->appointment_number }}
</p>

</div>




<div>
<p class="text-gray-500">
Patient Name
</p>

<p class="font-bold text-lg">
{{ $appointment->patient_name }}
</p>

</div>





<div>
<p class="text-gray-500">
Phone
</p>

<p class="font-bold text-lg">
{{ $appointment->phone }}
</p>

</div>





<div>
<p class="text-gray-500">
Email
</p>

<p class="font-bold text-lg">
{{ $appointment->email ?? 'No Email' }}
</p>

</div>






<div>
<p class="text-gray-500">
Department
</p>

<p class="font-bold text-lg">
{{ $appointment->department->name ?? 'N/A' }}
</p>

</div>






<div>
<p class="text-gray-500">
Doctor
</p>

<p class="font-bold text-lg">
{{ $appointment->doctor->name ?? 'N/A' }}
</p>

</div>






<div>
<p class="text-gray-500">
Appointment Date
</p>

<p class="font-bold text-lg">
{{ $appointment->appointment_date }}
</p>

</div>






<div>
<p class="text-gray-500">
Appointment Time
</p>

<p class="font-bold text-lg">
{{ $appointment->appointment_time }}
</p>

</div>






<div class="md:col-span-2">


<p class="text-gray-500">
Disease / Reason
</p>


<p class="font-bold text-lg">
{{ $appointment->disease ?? $appointment->symptoms }}
</p>


</div>



</div>






<hr class="my-12">






<h2 class="text-2xl font-bold text-blue-700">
Update Appointment Status
</h2>



<p class="text-gray-500 mt-2">
Choose the new appointment status.
The patient will receive an email notification.
</p>





<form

method="POST"

action="{{ route('admin.appointments.status',$appointment->id) }}"

class="mt-8 flex flex-wrap gap-4"

>


@csrf

@method('PUT')




<button

type="submit"

name="status"

value="confirmed"

class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-full font-semibold"

>

Confirm Appointment

</button>







<button

type="submit"

name="status"

value="completed"

class="bg-blue-600 hover:bg-blue-700 text-white px-7 py-3 rounded-full font-semibold"

>

Complete Appointment

</button>







<button

type="submit"

name="status"

value="cancelled"

class="bg-red-600 hover:bg-red-700 text-white px-7 py-3 rounded-full font-semibold"

>

Cancel Appointment

</button>



</form>





</div>



</div>


</div>


@endsection