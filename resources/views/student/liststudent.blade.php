<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student List</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">
                <i class="bi bi-people-fill"></i>
                Student List
            </h2>

            <p class="text-muted mb-0">
                Manage all student information
            </p>
        </div>

        <div class="d-flex gap-2">

            <a href="{{ route('students.create') }}"
               class="btn btn-primary">
                <i class="bi bi-plus-lg"></i>
                Add Student
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>

        </div>
    </div>


    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif


    <!-- Search & Filter -->
    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <form action="{{ route('students.index') }}"
                  method="GET">

                <div class="row g-3">

                    <!-- Search -->
                    <div class="col-md-4">

                        <label class="form-label fw-semibold">
                            Search
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>

                            <input
                                type="text"
                                name="search"
                                class="form-control"
                                placeholder="Name, Email, Department..."
                                value="{{ request('search') }}"
                            >

                        </div>

                    </div>


                    <!-- Department -->
                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            Department
                        </label>

                        <select name="department_id"
                                class="form-select">

                            <option value="">
                                All Departments
                            </option>

                            @foreach($departments as $department)

                                <option
                                    value="{{ $department->dept_id }}"
                                    {{ request('department_id') == $department->dept_id ? 'selected' : '' }}
                                >
                                    {{ $department->dept_name }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <!-- Gender -->
                    <div class="col-md-2">

                        <label class="form-label fw-semibold">
                            Gender
                        </label>

                        <select name="gender"
                                class="form-select">

                            <option value="">
                                All
                            </option>

                            <option value="Male"
                                {{ request('gender') == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>

                            <option value="Female"
                                {{ request('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>

                        </select>

                    </div>


                    <!-- Buttons -->
                    <div class="col-md-3">

                        <label class="form-label d-block">
                            &nbsp;
                        </label>

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-primary">
                                <i class="bi bi-search"></i>
                                Search
                            </button>

                            <a
                                href="{{ route('students.index') }}"
                                class="btn btn-secondary">
                                <i class="bi bi-arrow-clockwise"></i>
                                Reset
                            </a>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>


    <!-- Student Table -->
    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">

            <div class="d-flex justify-content-between">

                <h5 class="mb-0 fw-bold">
                    Student Information
                </h5>

                <span class="badge bg-primary">
                    Total: {{ $students->total() }}
                </span>

            </div>

        </div>


        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover table-bordered mb-0">

                    <thead class="table-dark">

                        <tr>
                            <th width="70">ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Enrollment Date</th>
                            <th>Department</th>
                            <th>Description</th>
                            <th width="180">Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        @forelse($students as $student)

                            <tr>

                                <td>
                                    {{ $student->student_id }}
                                </td>

                                <td class="fw-semibold">
                                    {{ $student->student_name }}
                                </td>

                                <td>
                                    {{ $student->email }}
                                </td>

                                <td>

                                    @if($student->gender == 'Male')

                                        <span class="badge bg-primary">
                                            <i class="bi bi-gender-male"></i>
                                            Male
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            <i class="bi bi-gender-female"></i>
                                            Female
                                        </span>

                                    @endif

                                </td>

                                <td>
                                    {{ $student->enrollment_date
                                        ? \Carbon\Carbon::parse($student->enrollment_date)->format('d-M-Y')
                                        : '-' }}
                                </td>

                                <td>

                                    @if($student->department)

                                        <span class="badge bg-info text-dark">
                                            {{ $student->department->dept_name }}
                                        </span>

                                    @else

                                        <span class="text-muted">
                                            No Department
                                        </span>

                                    @endif

                                </td>

                                <td>
                                    {{ $student->description ?? '-' }}
                                </td>

                                <td>

                                    <div class="d-flex gap-1">

                                        <!-- Edit -->
                                        <a
                                            href="{{ route('students.edit', $student->student_id) }}"
                                            class="btn btn-sm btn-warning"
                                            title="Edit"
                                        >
                                            <i class="bi bi-pencil-square"></i>
                                        </a>


                                        <!-- Delete -->
                                        <form
                                            action="{{ route('students.destroy', $student->student_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this student?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-danger"
                                                title="Delete"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8"
                                    class="text-center py-5">

                                    <i class="bi bi-inbox fs-1 text-muted"></i>

                                    <h5 class="mt-3">
                                        No Students Found
                                    </h5>

                                    <p class="text-muted">
                                        There are no students matching your search.
                                    </p>

                                    <a
                                        href="{{ route('students.create') }}"
                                        class="btn btn-primary"
                                    >
                                        <i class="bi bi-plus-lg"></i>
                                        Add Student
                                    </a>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        <!-- Pagination -->
        @if($students->hasPages())

            <div class="card-footer bg-white">

                <div class="d-flex justify-content-center">

                    {{ $students->links() }}

                </div>

            </div>

        @endif

    </div>

</div>


<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>