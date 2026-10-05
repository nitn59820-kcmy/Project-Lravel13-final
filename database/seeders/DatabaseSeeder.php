<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // =========================
        // Seed Admin User
        // =========================

        User::create([
            'name' => 'Admin Woman',
            'email' => 'adminwoman@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        // =========================
        // Seed Departments
        // =========================

        $mis = Department::create([
            'dept_name' => 'Management Information System'
        ]);

        $design = Department::create([
            'dept_name' => 'Design'
        ]);

        // =========================
        // Seed Students
        // =========================

        Student::create([
            'student_name' => 'Kong Sopheak',
            'email' => 'kongsopheak@gmail.com',
            'gender' => 'Male',
            'enrollment_date' => '2022-01-01',
            'department_id' => $mis->dept_id,
        ]);

        Student::create([
            'student_name' => 'Ly Chhailin',
            'email' => 'lin@gmail.com',
            'gender' => 'Female',
            'enrollment_date' => '2022-01-01',
            'department_id' => $design->dept_id,
        ]);

        Student::create([
            'student_name' => 'Pov Nita',
            'email' => 'povnita@gmail.com',
            'gender' => 'Female',
            'enrollment_date' => '2023-04-11',
            'description' => 'OK',
            'department_id' => $mis->dept_id,
        ]);

        Student::create([
            'student_name' => 'Leng Makara',
            'email' => 'lengmakara@gmail.com',
            'gender' => 'Male',
            'enrollment_date' => '2024-11-01',
            'department_id' => $design->dept_id,
        ]);
    }
}