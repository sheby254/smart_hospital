@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-16">


<div class="max-w-7xl mx-auto px-6">



{{-- HEADER --}}

<div class="text-center mb-14">


<div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-6 py-2 rounded-full font-semibold">

    🏥 Patient Appointment

</div>



<h1 class="mt-6 text-5xl font-extrabold text-slate-900">

    Book Your Medical Appointment

</h1>



<p class="mt-4 text-gray-600 text-lg max-w-2xl mx-auto">

    Choose your department, select your preferred doctor and schedule your visit at Sheby Hospital.

</p>


</div>





{{-- DEPARTMENT SELECT --}}


<div class="bg-white shadow-xl rounded-3xl p-8 border border-gray-100">


<div class="flex items-center gap-3 mb-5">


<div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-2xl">

🏥

</div>


<div>

<h2 class="text-xl font-bold text-slate-900">

Choose Department

</h2>


<p class="text-gray-500 text-sm">

Select the medical service you need

</p>


</div>


</div>



<select

id="department"

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600 py-4 px-5 text-gray-700"


>


<option value="">

Select Hospital Department

</option>


@foreach($departments as $department)

<option value="{{ $department->id }}">

{{ $department->name }}

</option>

@endforeach


</select>


</div>







{{-- DOCTORS AREA --}}


<div id="doctor-section"

class="hidden mt-12"



>


<div class="flex justify-between items-center mb-8">


<div>

<h2 class="text-3xl font-extrabold text-slate-900">

Available Doctors

</h2>


<p class="text-gray-500">

Choose the doctor you want to visit

</p>


</div>



<div class="bg-blue-100 text-blue-700 px-5 py-2 rounded-full font-semibold">

👨‍⚕️ Specialists

</div>


</div>





<div id="doctors"

class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">


</div>


</div>







{{-- APPOINTMENT FORM --}}



<div

id="bookingForm"

class="hidden mt-16 bg-white rounded-3xl shadow-2xl p-10 border border-gray-100"



>



<div class="mb-10">


<span class="text-blue-600 font-semibold uppercase text-sm">

Appointment Details

</span>


<h2 class="text-4xl font-extrabold text-slate-900 mt-2">

Complete Your Booking

</h2>


<p class="text-gray-500 mt-2">

Provide your information to confirm your hospital visit.

</p>


</div>





<div class="grid lg:grid-cols-3 gap-10">





{{-- SELECTED DOCTOR --}}


<div class="bg-blue-50 rounded-3xl p-6">


<img

id="doctorImage"

src=""

class="w-full h-96 object-cover rounded-3xl shadow-lg"


>



<h3

id="doctorName"

class="text-3xl font-bold mt-6 text-slate-900"

>

</h3>



<p

id="doctorSpecialization"

class="text-blue-700 font-semibold mt-2"

>

</p>



<p

id="doctorAvailability"

class="text-gray-600 mt-4"

>

</p>


</div>






{{-- FORM START --}}


<div class="lg:col-span-2">


<form

id="appointmentForm"

action="{{ route('appointments.store') }}"

method="POST"

>


@csrf



<input

type="hidden"

name="doctor_id"

id="doctor_id"

>

<input
type="hidden"
name="department_id"
id="department_id"



>
{{-- PATIENT INFORMATION --}}


<div class="grid md:grid-cols-2 gap-6">



<div>

<label class="block font-semibold text-slate-700 mb-2">

Full Name

</label>


<input

type="text"

name="patient_name"

required

placeholder="Enter your full name"

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


>


</div>





<div>

<label class="block font-semibold text-slate-700 mb-2">

Phone Number

</label>


<input

type="text"

name="phone"

required

placeholder="+255..."

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


>


</div>







<div>

<label class="block font-semibold text-slate-700 mb-2">

Email Address

</label>


<input

type="email"

name="email"

placeholder="example@gmail.com"

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


>


</div>







<div>

<label class="block font-semibold text-slate-700 mb-2">

Appointment Date

</label>


<input

type="date"

id="appointmentDate"

name="appointment_date"

required

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


>


</div>








<div>

<label class="block font-semibold text-slate-700 mb-2">

Appointment Day

</label>


<input

type="text"

id="appointmentDay"

readonly

placeholder="Automatically selected"

class="w-full rounded-2xl bg-gray-100 border-gray-300"


>


</div>







<div>

<label class="block font-semibold text-slate-700 mb-2">

Appointment Time

</label>



<select

name="appointment_time"

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


>


<option>

08:00 AM

</option>


<option>

09:00 AM

</option>


<option>

10:00 AM

</option>


<option>

11:00 AM

</option>


<option>

02:00 PM

</option>


<option>

03:00 PM

</option>


<option>

04:00 PM

</option>



</select>


</div>



</div>








{{-- SYMPTOMS --}}



<div class="mt-8">


<label class="block font-semibold text-slate-700 mb-2">

Disease / Symptoms / Reason For Visit

</label>



<textarea

name="symptoms"

rows="5"

placeholder="Describe your symptoms..."

class="w-full rounded-2xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"


></textarea>



</div>







{{-- CONFIRM BUTTON --}}



<button

type="submit"

class="mt-8 w-full bg-gradient-to-r from-blue-700 to-blue-500 hover:from-blue-800 hover:to-blue-600 text-white py-4 rounded-full font-bold text-lg shadow-lg transition"



>


✅ Confirm Appointment


</button>



</form>



</div>


</div>



</div>



</div>


</div>









<script>


// LOAD DOCTORS


document
.getElementById('department')
.addEventListener('change', function(){


let departmentId = this.value;


document.getElementById('department_id').value = departmentId;


let section = document.getElementById('doctor-section');

let doctorsDiv = document.getElementById('doctors');




if(!departmentId){


section.classList.add('hidden');

doctorsDiv.innerHTML='';

return;


}





fetch('/appointments/doctors/'+departmentId)



.then(response => response.json())



.then(data => {



doctorsDiv.innerHTML='';


section.classList.remove('hidden');





data.forEach(doctor => {



let image = "/" + doctor.photo;



doctorsDiv.innerHTML += `



<div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300">



<img

src="${image}"

class="w-full h-72 object-cover object-top"



>



<div class="p-6">



<h3 class="text-2xl font-bold text-slate-900">

${doctor.name}

</h3>



<p class="text-blue-600 font-semibold mt-2">

${doctor.specialization}

</p>



<div class="mt-4 space-y-2 text-gray-600">


<p>

👨‍⚕️ Experience: ${doctor.experience} Years

</p>



<p>

☎ ${doctor.phone ?? 'Not Available'}

</p>



<p>

✉ ${doctor.email ?? 'Not Available'}

</p>


</div>





<button

onclick='selectDoctor(${JSON.stringify(doctor)})'

class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-full font-semibold"


>


Select Doctor


</button>



</div>


</div>



`;



});



});



});




function selectDoctor(doctor){



document

.getElementById('bookingForm')

.classList

.remove('hidden');





document

.getElementById('doctor_id')

.value = doctor.id;





document

.getElementById('doctorName')

.innerHTML = doctor.name;





document

.getElementById('doctorSpecialization')

.innerHTML = doctor.specialization;





document

.getElementById('doctorAvailability')

.innerHTML = "Availability: " + (doctor.availability ?? "Available");





document

.getElementById('doctorImage')

.src = "/" + doctor.photo;





document

.getElementById('bookingForm')

.scrollIntoView({

behavior:'smooth'

});



}


// AUTO DETECT APPOINTMENT DAY


document

.getElementById('appointmentDate')

.addEventListener('change', function(){



let selectedDate = new Date(this.value);



let days = [

"Sunday",

"Monday",

"Tuesday",

"Wednesday",

"Thursday",

"Friday",

"Saturday"

];



if(!isNaN(selectedDate)){


document

.getElementById('appointmentDay')

.value = days[selectedDate.getDay()];


}



});







// CONFIRMATION BEFORE SUBMIT



document

.getElementById('appointmentForm')

.addEventListener('submit', function(e){



let doctor = document

.getElementById('doctorName')

.innerHTML;



let date = document

.getElementById('appointmentDate')

.value;



let time = document

.querySelector('[name="appointment_time"]')

.value;






let confirmBooking = confirm(`

🏥 Sheby Hospital Appointment Confirmation



Doctor:

${doctor}



Date:

${date}



Time:

${time}



Do you want to confirm this appointment?

`);





if(!confirmBooking){


e.preventDefault();


}



});



</script>



@endsection