<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;

class StudentController extends Controller
{
    // List Students
    public function index(Request $request)
    {
        $query = Student::with('department');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('student_name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhereHas('department', function ($departmentQuery) use ($search) {
                        $departmentQuery->where(
                            'dept_name',
                            'like',
                            '%' . $search . '%'
                        );
                    });
            });
        }

        // Filter Department
        if ($request->filled('department_id')) {
            $query->where(
                'department_id',
                $request->department_id
            );
        }

        // Filter Gender
        if ($request->filled('gender')) {
            $query->where(
                'gender',
                $request->gender
            );
        }

        // Pagination
        $students = $query->paginate(10);

        // Keep search/filter when changing page
        $students->withQueryString();

        // Get Departments
        $departments = Department::all();

        return view(
            'student.liststudent',
            compact('students', 'departments')
        );
    }

    // Show Add Student Form
    public function create()
    {
        $departments = Department::all();

        return view(
            'student.home',
            compact('departments')
        );
    }

    // Save Student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',

            'email' => 'required|email|unique:students,email',

            'gender' => 'required|in:Male,Female',

            'enrollment_date' => 'required|date',

            'department_id' => 'required|exists:departments,dept_id',

            'description' => 'nullable|string',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student registered successfully!');
    }

    // Edit Student
    public function edit(Student $student)
    {
        $departments = Department::all();

        return view(
            'student.home',
            compact('student', 'departments')
        );
    }

    // Update Student
    public function update(
        Request $request,
        Student $student
    ) {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',

            'email' => 'required|email|unique:students,email,' .
                $student->student_id . ',student_id',

            'gender' => 'required|in:Male,Female',

            'enrollment_date' => 'required|date',

            'department_id' => 'required|exists:departments,dept_id',

            'description' => 'nullable|string',
        ]);

        $student->update($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    // Delete Student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}