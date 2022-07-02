<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Course::create(
            ['course_name' => 'Matematika']
        );

        Course::create(
            ['course_name' => 'B.Inggris']
        );

        Course::create(['course_name' => 'B.Indonesia']);


        SchoolClass::create(['class_name' => 'TKJ A']);
        SchoolClass::create(['class_name' => 'TKJ B']);

        Student::create([
            'student_number' => 'S0001',
            'name' => 'Faiz',
            'address' => 'Surabaya',
            'email' => 'fzrahmadan@gmail.com',
            'phone_number' => '082213574819',
            'school_class_id' => 1
        ]);
        Teacher::create([
            'teacher_number' => 'T0001',
            'name' => 'Rahmad',
            'address' => 'Surabaya',
            'email' => 'rahmad@gmail.com',
            'phone_number' => '082546712390',
            'course_id' => 1
        ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
