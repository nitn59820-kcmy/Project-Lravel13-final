<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                "studentname" => "Phat Sophanit",
                "gender" => "Male",
                "age" => 20,
                "dob" => "2003-01-22",
                "subject" => "WP",
                "payment" => 900.00
            ],
            [
                "studentname" => "Kong Heng",
                "gender" => "Female",
                "age" => 22,
                "dob" => "1999-12-03",
                "subject" => "CA",
                "payment" => 400.00
            ],
            [
                "studentname" => "Seak Leang",
                "gender" => "Male",
                "age" => 28,
                "dob" => "2005-08-12",
                "subject" => "LIN",
                "payment" => 300.00
            ],
            [
                "studentname" => "Rach Chana",
                "gender" => "Female",
                "age" => 27,
                "dob" => "2004-04-17",
                "subject" => "Java",
                "payment" => 200.00
            ]
        ]);
    }
}