<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Appointment extends Model
{

    use HasFactory;



    protected $fillable = [

        'appointment_number',

        'doctor_id',

        'department_id',

        'patient_name',

        'phone',

        'email',

        'appointment_date',

        'appointment_time',

        'disease',

        'status',

    ];





    protected static function boot()
    {

        parent::boot();



        static::creating(function ($appointment) {


            if(!$appointment->appointment_number)
            {


                $appointment->appointment_number =
                    'SHEBY-APT-' .
                    date('Ymd') .
                    '-' .
                    strtoupper(Str::random(5));


            }


        });


    }





    public function department()
    {

        return $this->belongsTo(Department::class);

    }





    public function doctor()
    {

        return $this->belongsTo(Doctor::class);

    }


}