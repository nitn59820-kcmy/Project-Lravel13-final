<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id('student_id');

            $table->string('student_name');

            $table->string('email')
                ->unique();

            $table->enum('gender', [
                'Male',
                'Female'
            ]);

            $table->date('enrollment_date')
                ->nullable();

            $table->text('description')
                ->nullable();

            $table->unsignedBigInteger('department_id');

            $table->foreign('department_id')
                ->references('dept_id')
                ->on('departments')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};