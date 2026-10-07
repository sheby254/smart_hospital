<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;


return new class extends Migration
{

    public function up(): void
    {

        Schema::table('appointments', function (Blueprint $table) {

            $table->string('appointment_number')
                  ->nullable()
                  ->unique()
                  ->after('id');

        });



        // Update old appointments
        \App\Models\Appointment::whereNull('appointment_number')
            ->get()
            ->each(function ($appointment) {


                $appointment->appointment_number =
                    'SHEBY-APT-' .
                    date('Ymd') .
                    '-' .
                    strtoupper(Str::random(5));


                $appointment->save();


            });



    }



    public function down(): void
    {

        Schema::table('appointments', function (Blueprint $table) {

            $table->dropColumn('appointment_number');

        });

    }

};