<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Cearte function show()
public function show(int $id , string $name, string $position)
    {
        return view ('employee.employeedetail',
        compact('id', 'name', 'position'));
    }
}
