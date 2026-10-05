<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'dept_id';

    protected $fillable = [
        'dept_name',
    ];

    public function students()
    {
        return $this->hasMany(
            Student::class,
            'department_id',
            'dept_id'
        );
    }
}