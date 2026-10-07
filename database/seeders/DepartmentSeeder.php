<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;


class DepartmentSeeder extends Seeder
{

    public function run(): void
    {

        $departments = [

            [
                'name' => 'Cardiology',
                'description' => 'Heart disease diagnosis and treatment.',
                'image' => 'cardiology.jpg'
            ],


            [
                'name' => 'Neurology',
                'description' => 'Treatment of brain and nervous system disorders.',
                'image' => 'neurology.jpg'
            ],


            [
                'name' => 'Pediatrics',
                'description' => 'Healthcare services for children.',
                'image' => 'pediatrics.jpg'
            ],


            [
                'name' => 'Orthopedics',
                'description' => 'Bone, joint and muscle treatment.',
                'image' => 'orthopedics.jpg'
            ],


            [
                'name' => 'Internal Medicine',
                'description' => 'Diagnosis and treatment of adult diseases.',
                'image' => 'medicine.jpg'
            ],


            [
                'name' => 'Emergency Department',
                'description' => '24/7 emergency medical services.',
                'image' => 'emergency.jpg'
            ],


            [
                'name' => 'Laboratory',
                'description' => 'Medical tests and diagnostics.',
                'image' => 'laboratory.jpg'
            ],


            [
                'name' => 'Dental Care',
                'description' => 'Complete dental healthcare services.',
                'image' => 'dental.jpg'
            ],

        ];



        foreach($departments as $department)
        {

            Department::create($department);

        }

    }
}