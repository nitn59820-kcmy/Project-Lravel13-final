<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $primaryKey = 'dept_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'dept_name',
        'description',
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