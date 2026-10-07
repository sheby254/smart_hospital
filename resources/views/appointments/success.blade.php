@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-blue-50 flex items-center justify-center py-16">


<div class="max-w-4xl w-full mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">



    {{-- HEADER --}}

    <div class="bg-blue-700 text-white text-center py-10 px-6">


        <div class="w-24 h-24 mx-auto bg-white/20 rounded-full flex items-center justify-center text-5xl">

            ✅

        </div>



        <h1 class="text-4xl font-extrabold mt-6">

            Appointment Confirmed!

        </h1>



        <p class="mt-4 text-blue-100 text-lg">

            Thank you for choosing Sheby Hospital.
            Your appointment has been successfully booked.

        </p>


    </div>





<div class="p-10">



    {{-- HOSPITAL INFORMATION --}}


    <div class="grid md:grid-cols-3 gap-5 mb-10">



        <div class="bg-blue-50 rounded-2xl p-6 text-center">


            <div class="text-4xl mb-3">
                🏥
            </div>


            <h3 class="font-bold text-blue-700 text-lg">

                Sheby Hospital

            </h3>


            <p class="text-gray-600">

                Excellence in Healthcare

            </p>


        </div>





        <div class="bg-blue-50 rounded-2xl p-6 text-center">


            <div class="text-4xl mb-3">
                📍
            </div>


            <h3 class="font-bold text-blue-700 text-lg">

                Location

            </h3>


            <p class="text-gray-600">

                Dar es Salaam, Tanzania

            </p>


        </div>





        <div class="bg-blue-50 rounded-2xl p-6 text-center">


            <div class="text-4xl mb-3">
                ☎
            </div>


            <h3 class="font-bold text-blue-700 text-lg">

                Emergency

            </h3>


            <p class="text-gray-600">

                +255 766822536

            </p>


        </div>



    </div>






    {{-- APPOINTMENT NUMBER --}}


    <div class="border-2 border-dashed border-blue-300 bg-blue-50 rounded-3xl p-6 text-center mb-10">


        <p class="text-gray-600">

            Appointment ID

        </p>



        <h2 class="text-3xl font-extrabold text-blue-700 mt-2">

            {{ $appointment->appointment_number }}

        </h2>


        <p class="mt-3 text-sm text-gray-500">

            Please keep this number for hospital reception.

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


                <span class="inline-block mt-1 px-4 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold">

                    {{ ucfirst($appointment->status) }}

                </span>


            </div>





            <div class="md:col-span-2">

                <p class="text-gray-500 text-sm">

                    Reason / Symptoms

                </p>


                <p class="font-bold text-lg">

                    {{ $appointment->symptoms }}

                </p>


            </div>




        </div>


    </div>






    {{-- QR CODE --}}


    <div class="mt-10 bg-blue-50 rounded-3xl p-8 text-center">


        <h2 class="text-2xl font-bold text-blue-700">

            Patient QR Code

        </h2>



        <p class="text-gray-600 mt-3">

            Present this QR code at Sheby Hospital reception.

        </p>





        <div class="mt-6 bg-white rounded-3xl shadow p-6 inline-block">


            <img

            src="{{ route('appointments.qr',$appointment->id) }}"

            class="w-64 h-64"

            alt="Patient Appointment QR Code">


        </div>



        <p class="mt-4 text-sm text-gray-500">

            Scan this QR code to verify appointment details.

        </p>



    </div>








    {{-- ACTION BUTTONS --}}


    <div class="mt-10 flex flex-col md:flex-row gap-4 justify-center">



        <a href="/"

        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold">


            Back Home


        </a>





        <a href="{{ route('appointments.create') }}"

        class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold">


            Book Another Appointment


        </a>



    </div>







    {{-- CONTACT --}}


    <div class="mt-12 text-center text-gray-500">


        📍 Dar es Salaam, Tanzania

        <br>


        ☎ Emergency: +255 766822536

        <br>


        ✉ info@shebyhospital.com


    </div>





</div>


</div>


</div>



@endsection