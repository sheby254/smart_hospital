<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Doctor extends Model
{

    use HasFactory;



    protected $fillable = [

        'department_id',

        'name',

        'specialization',

        'experience',

        'phone',

        'email',

        'photo',

        'availability',

        'status',

    ];





    /**
     * Doctor belongs to one department
     */

    public function department()
    {

        return $this->belongsTo(Department::class);

    }





    /**
     * Doctor has many appointments
     */

    public function appointments()
    {

        return $this->hasMany(Appointment::class);

    }


}