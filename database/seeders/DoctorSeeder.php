<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Department;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $cardiology        = Department::where('name', 'Cardiology')->first();
        $neurology         = Department::where('name', 'Neurology')->first();
        $pediatrics        = Department::where('name', 'Pediatrics')->first();
        $orthopedics       = Department::where('name', 'Orthopedics')->first();
        $internalMedicine  = Department::where('name', 'Internal Medicine')->first();
        $emergency         = Department::where('name', 'Emergency Department')->first();
        $laboratory        = Department::where('name', 'Laboratory')->first();
        $dental            = Department::where('name', 'Dental Care')->first();

        Doctor::truncate();

        Doctor::insert([

            [
                'department_id' => $cardiology->id,
                'name' => 'Dr. Shaban Msemakweli',
                'specialization' => 'Consultant Cardiologist',
                'experience' => 12,
                'phone' => '+255 712 345 678',
                'email' => 'shaban@shebyhospital.com',
                'photo' => 'assets/images/doctors/shaban.jpg',
                'availability' => 'Monday - Friday | 08:00 AM - 04:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $cardiology->id,
                'name' => 'Dr. Dorine John',
                'specialization' => 'Heart Specialist',
                'experience' => 9,
                'phone' => '+255 713 000 001',
                'email' => 'dorine@shebyhospital.com',
                'photo' => 'assets/images/doctors/dorine.jpg',
                'availability' => 'Monday - Friday | 09:00 AM - 05:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $neurology->id,
                'name' => 'Dr. Henry Michael',
                'specialization' => 'Consultant Neurologist',
                'experience' => 15,
                'phone' => '+255 713 000 002',
                'email' => 'henry@shebyhospital.com',
                'photo' => 'assets/images/doctors/dr.Henry.jpg',
                'availability' => 'Monday - Thursday | 08:00 AM - 03:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $pediatrics->id,
                'name' => 'Dr. Anna Peter',
                'specialization' => 'Pediatric Specialist',
                'experience' => 8,
                'phone' => '+255 713 000 003',
                'email' => 'anna@shebyhospital.com',
                'photo' => 'assets/images/doctors/anna.jpg',
                'availability' => 'Monday - Friday | 08:00 AM - 04:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $orthopedics->id,
                'name' => 'Dr. James William',
                'specialization' => 'Orthopedic Surgeon',
                'experience' => 14,
                'phone' => '+255 713 000 004',
                'email' => 'james@shebyhospital.com',
                'photo' => 'assets/images/doctors/drjames.jpg',
                'availability' => 'Monday - Friday | 09:00 AM - 04:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $internalMedicine->id,
                'name' => 'Dr. Diana Joseph',
                'specialization' => 'Internal Medicine Specialist',
                'experience' => 11,
                'phone' => '+255 713 000 005',
                'email' => 'diana@shebyhospital.com',
                'photo' => 'assets/images/doctors/shaban.jpg',
                'availability' => 'Monday - Saturday | 08:00 AM - 04:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $emergency->id,
                'name' => 'Dr. Sheby Hassan',
                'specialization' => 'Emergency Medicine',
                'experience' => 13,
                'phone' => '+255 713 000 006',
                'email' => 'sheby@shebyhospital.com',
                'photo' => 'assets/images/doctors/sheby.jpg',
                'availability' => '24 Hours | Every Day',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $laboratory->id,
                'name' => 'Dr. Omega Charles',
                'specialization' => 'Clinical Pathologist',
                'experience' => 10,
                'phone' => '+255 713 000 007',
                'email' => 'omega@shebyhospital.com',
                'photo' => 'assets/images/doctors/dr.Omega.jpg',
                'availability' => 'Monday - Friday | 08:00 AM - 04:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'department_id' => $dental->id,
                'name' => 'Dr. Grace Mollel',
                'specialization' => 'Dental Surgeon',
                'experience' => 7,
                'phone' => '+255 713 000 008',
                'email' => 'grace@shebyhospital.com',
                'photo' => 'assets/images/doctors/dorine.jpg',
                'availability' => 'Monday - Friday | 09:00 AM - 03:00 PM',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}