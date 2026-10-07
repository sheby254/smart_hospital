@extends('layouts.app')


@section('content')


<div class="max-w-7xl mx-auto py-16 px-6">


<h1 class="text-4xl font-bold text-blue-700">

Admin Appointment Dashboard

</h1>


<p class="text-gray-600 mt-2">

Manage all Sheby Hospital patient appointments

</p>





<div class="mt-10 bg-white shadow-xl rounded-3xl overflow-hidden">


<table class="w-full">


<thead class="bg-blue-700 text-white">


<tr>


<th class="p-4 text-left">
ID
</th>


<th class="p-4 text-left">
Patient
</th>


<th class="p-4 text-left">
Doctor
</th>


<th class="p-4 text-left">
Date
</th>


<th class="p-4 text-left">
Status
</th>


<th class="p-4">
Action
</th>


</tr>


</thead>





<tbody>


@foreach($appointments as $appointment)


<tr class="border-b">


<td class="p-4">

{{ $appointment->appointment_number }}

</td>



<td class="p-4">

{{ $appointment->patient_name }}

</td>



<td class="p-4">

{{ $appointment->doctor->name ?? 'N/A' }}

</td>



<td class="p-4">

{{ $appointment->appointment_date }}

</td>




<td class="p-4">


@if($appointment->status == 'pending')

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">

Pending

</span>


@elseif($appointment->status == 'confirmed')


<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

Confirmed

</span>


@else


<span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">

{{ ucfirst($appointment->status) }}

</span>


@endif


</td>




<td class="p-4">


<a href="{{ route('admin.appointments.show',$appointment->id) }}"

class="bg-blue-600 text-white px-5 py-2 rounded-full">

View

</a>


</td>



</tr>


@endforeach


</tbody>


</table>


</div>


</div>


@endsection