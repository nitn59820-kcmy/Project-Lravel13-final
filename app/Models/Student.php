<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'student_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'student_name',
        'email',
        'gender',
        'enrollment_date',
        'department_id',
        'description',
    ];

    public function department()
    {
        return $this->belongsTo(
            Department::class,
            'department_id',
            'dept_id'
        );
    }
}