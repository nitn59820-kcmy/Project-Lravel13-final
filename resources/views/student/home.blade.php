<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ isset($student) ? 'Edit Student' : 'Add Student' }}
    </title>

    {{-- Bootstrap CSS --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #0d6efd;
        }

        .page-title {
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            background: #0d6efd;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 18px 25px;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            min-height: 45px;
        }

        textarea.form-control {
            min-height: 120px;
        }

        .btn {
            border-radius: 8px;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-dark">
        <div class="container">

            <a href="{{ route('students.index') }}"
               class="navbar-brand fw-bold">

                <i class="bi bi-mortarboard-fill"></i>

                Student Management System

            </a>

            {{-- Logout --}}
            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button type="submit" class="btn btn-light btn-sm">

                    <i class="bi bi-box-arrow-right"></i>

                    Logout

                </button>

            </form>

        </div>
    </nav>


    {{-- Main Content --}}
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                {{-- Page Title --}}
                <div class="mb-4">

                    <h2 class="page-title">

                        @if(isset($student))

                            <i class="bi bi-pencil-square text-primary"></i>
                            Edit Student

                        @else

                            <i class="bi bi-person-plus-fill text-primary"></i>
                            Add Student

                        @endif

                    </h2>

                    <p class="text-muted mb-0">
                        Please fill in the student information below.
                    </p>

                </div>


                {{-- Validation Errors --}}
                @if ($errors->any())

                    <div class="alert alert-danger">

                        <strong>
                            Please fix the following errors:
                        </strong>

                        <ul class="mb-0 mt-2">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- Student Form --}}
                <div class="card">

                    <div class="card-header">

                        <h5 class="mb-0">

                            <i class="bi bi-person-vcard"></i>

                            Student Information

                        </h5>

                    </div>


                    <div class="card-body p-4">

                        @if(isset($student))

                            {{-- Edit --}}
                            <form
                                action="{{ route('students.update', $student->student_id) }}"
                                method="POST">

                                @csrf
                                @method('PUT')

                        @else

                            {{-- Add --}}
                            <form
                                action="{{ route('students.store') }}"
                                method="POST">

                                @csrf

                        @endif


                            {{-- Student Name --}}
                            <div class="mb-3">

                                <label for="student_name" class="form-label fw-bold">

                                    Student Name
                                    <span class="text-danger">*</span>

                                </label>

                                <input
                                    type="text"
                                    name="student_name"
                                    id="student_name"
                                    class="form-control @error('student_name') is-invalid @enderror"
                                    placeholder="Enter student name"
                                    value="{{ old('student_name', $student->student_name ?? '') }}"
                                    required>

                                @error('student_name')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Email --}}
                            <div class="mb-3">

                                <label for="email" class="form-label fw-bold">

                                    Email
                                    <span class="text-danger">*</span>

                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="example@gmail.com"
                                    value="{{ old('email', $student->email ?? '') }}"
                                    required>

                                @error('email')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Gender --}}
                            <div class="mb-3">

                                <label class="form-label fw-bold">

                                    Gender
                                    <span class="text-danger">*</span>

                                </label>

                                <div>

                                    <div class="form-check form-check-inline">

                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="gender"
                                            id="male"
                                            value="Male"
                                            {{ old('gender', $student->gender ?? '') == 'Male' ? 'checked' : '' }}
                                            required>

                                        <label
                                            class="form-check-label"
                                            for="male">

                                            <i class="bi bi-gender-male"></i>
                                            Male

                                        </label>

                                    </div>


                                    <div class="form-check form-check-inline">

                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="gender"
                                            id="female"
                                            value="Female"
                                            {{ old('gender', $student->gender ?? '') == 'Female' ? 'checked' : '' }}>

                                        <label
                                            class="form-check-label"
                                            for="female">

                                            <i class="bi bi-gender-female"></i>
                                            Female

                                        </label>

                                    </div>

                                </div>

                                @error('gender')

                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Enrollment Date --}}
                            <div class="mb-3">

                                <label
                                    for="enrollment_date"
                                    class="form-label fw-bold">

                                    Enrollment Date
                                    <span class="text-danger">*</span>

                                </label>

                                <input
                                    type="date"
                                    name="enrollment_date"
                                    id="enrollment_date"
                                    class="form-control @error('enrollment_date') is-invalid @enderror"
                                    value="{{ old('enrollment_date', $student->enrollment_date ?? '') }}"
                                    required>

                                @error('enrollment_date')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Department --}}
                            <div class="mb-3">

                                <label
                                    for="department_id"
                                    class="form-label fw-bold">

                                    Department
                                    <span class="text-danger">*</span>

                                </label>

                                <select
                                    name="department_id"
                                    id="department_id"
                                    class="form-select @error('department_id') is-invalid @enderror"
                                    required>

                                    <option value="">
                                        -- Select Department --
                                    </option>

                                    @foreach ($departments as $department)

                                        <option
                                            value="{{ $department->dept_id }}"
                                            {{ old(
                                                'department_id',
                                                $student->department_id ?? ''
                                            ) == $department->dept_id ? 'selected' : '' }}>

                                            {{ $department->dept_name }}

                                        </option>

                                    @endforeach

                                </select>

                                @error('department_id')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Description --}}
                            <div class="mb-4">

                                <label
                                    for="description"
                                    class="form-label fw-bold">

                                    Description

                                </label>

                                <textarea
                                    name="description"
                                    id="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Enter description...">{{ old('description', $student->description ?? '') }}</textarea>

                                @error('description')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Buttons --}}
                            <div class="d-flex justify-content-between">

                                <a
                                    href="{{ route('students.index') }}"
                                    class="btn btn-secondary">

                                    <i class="bi bi-arrow-left"></i>

                                    Back

                                </a>


                                <button
                                    type="submit"
                                    class="btn btn-primary px-4">

                                    @if(isset($student))

                                        <i class="bi bi-check-circle"></i>

                                        Update Student

                                    @else

                                        <i class="bi bi-plus-circle"></i>

                                        Add Student

                                    @endif

                                </button>

                            </div>


                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Bootstrap JS --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>