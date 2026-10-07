<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Directory</title>

    <!-- Bootstrap 5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
            color: #212529;
        }

        /* =========================
           Sidebar
        ========================= */

        .sidebar {
            width: 250px;
            min-height: 100vh;

            position: fixed;
            left: 0;
            top: 0;

            background:
                linear-gradient(
                    180deg,
                    #0d6efd,
                    #6610f2
                );

            color: white;

            padding: 25px 18px;

            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 8px 10px 25px;
        }

        .brand-logo {
            width: 45px;
            height: 45px;

            border-radius: 12px;

            background: rgba(255,255,255,.18);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;

            box-shadow:
                0 8px 20px rgba(0,0,0,.12);

            animation: brandFloat 3s ease-in-out infinite;
        }

        @keyframes brandFloat {

            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }

        }

        .brand h5 {
            margin: 0;
            font-weight: 700;
            font-size: 17px;
        }

        .brand small {
            opacity: .75;
            font-size: 11px;
        }

        .menu-title {
            font-size: 11px;
            text-transform: uppercase;

            opacity: .6;

            margin:
                15px 10px 8px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;

            color: rgba(255,255,255,.82);

            text-decoration: none;

            padding: 12px 14px;

            border-radius: 10px;

            margin-bottom: 5px;

            transition: .25s;
        }

        .sidebar-link i {
            font-size: 18px;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            background: rgba(255,255,255,.16);
            color: white;

            transform: translateX(4px);
        }

        .sidebar-bottom {
            position: absolute;

            bottom: 20px;
            left: 18px;
            right: 18px;
        }

        /* =========================
           Main
        ========================= */

        .main {
            margin-left: 250px;
            padding: 30px;
        }

        /* =========================
           Top Header
        ========================= */

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 28px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .page-subtitle {
            color: #8a94a6;
            margin-top: 5px;
            font-size: 14px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;

            background: white;

            padding: 8px 14px;

            border-radius: 12px;

            box-shadow:
                0 5px 20px rgba(0,0,0,.05);
        }

        .user-avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-name {
            font-size: 13px;
            font-weight: 700;
        }

        .user-role {
            font-size: 11px;
            color: #8a94a6;
        }

        /* =========================
           Stats
        ========================= */

        .stat-card {
            background: white;

            border: none;

            border-radius: 16px;

            padding: 20px;

            height: 100%;

            box-shadow:
                0 5px 25px rgba(0,0,0,.05);

            transition: .3s;

            position: relative;

            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.10);
        }

        .stat-icon {
            width: 50px;
            height: 50px;

            border-radius: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            margin-bottom: 15px;
        }

        .icon-blue {
            background: #e8f1ff;
            color: #0d6efd;
        }

        .icon-purple {
            background: #f0e8ff;
            color: #6610f2;
        }

        .icon-green {
            background: #e7f8ef;
            color: #198754;
        }

        .icon-orange {
            background: #fff1df;
            color: #fd7e14;
        }

        .stat-number {
            font-size: 25px;
            font-weight: 700;
        }

        .stat-label {
            color: #8a94a6;
            font-size: 13px;
        }

        /* =========================
           Main Cards
        ========================= */

        .custom-card {
            background: white;

            border: none;

            border-radius: 16px;

            box-shadow:
                0 5px 25px rgba(0,0,0,.05);

            overflow: hidden;
        }

        .card-header-custom {
            padding: 20px 22px;

            border-bottom: 1px solid #edf0f5;

            background: white;
        }

        /* =========================
           Search
        ========================= */

        .search-box {
            background: #f8f9fc;

            border: 1px solid #e9edf3;

            border-radius: 10px;

            transition: .2s;
        }

        .search-box:focus-within {
            border-color: #0d6efd;

            box-shadow:
                0 0 0 3px rgba(13,110,253,.10);
        }

        .search-box .input-group-text {
            background: transparent;
            border: none;
            color: #0d6efd;
        }

        .search-box .form-control {
            background: transparent;
            border: none;

            height: 45px;
        }

        .search-box .form-control:focus {
            box-shadow: none;
        }

        .form-select {
            height: 45px;

            border-radius: 10px;

            border-color: #e2e7ef;
        }

        .form-select:focus {
            border-color: #0d6efd;

            box-shadow:
                0 0 0 3px rgba(13,110,253,.10);
        }

        /* =========================
           Buttons
        ========================= */

        .btn-main {
            height: 45px;

            border: none;

            border-radius: 10px;

            font-weight: 600;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            transition: .25s;
        }

        .btn-main:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(13,110,253,.25);
        }

        .btn-add {
            border-radius: 10px;

            font-weight: 600;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            border: none;

            padding: 10px 16px;
        }

        .btn-add:hover {
            transform: translateY(-2px);

            box-shadow:
                0 7px 18px rgba(13,110,253,.25);
        }

        .btn-reset {
            height: 45px;
            border-radius: 10px;
        }

        /* =========================
           Table
        ========================= */

        .student-table {
            margin: 0;
        }

        .student-table thead th {
            background: #f8f9fc;

            color: #667085;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: .3px;

            padding: 15px;

            border: none;

            white-space: nowrap;
        }

        .student-table tbody td {
            padding: 15px;

            vertical-align: middle;

            border-color: #f0f2f5;

            font-size: 13px;
        }

        .student-table tbody tr {
            transition: .2s;
        }

        .student-table tbody tr:hover {
            background: #f8faff;

            transform: scale(1.001);
        }

        .student-id {
            font-weight: 700;

            color: #0d6efd;

            background: #edf4ff;

            padding: 6px 9px;

            border-radius: 7px;
        }

        .student-name {
            font-weight: 700;
            color: #212529;
        }

        .email {
            color: #667085;
        }

        /* =========================
           Gender
        ========================= */

        .gender-male {
            background: #e7f1ff;
            color: #0d6efd;
        }

        .gender-female {
            background: #ffe9ef;
            color: #dc3545;
        }

        .gender-badge {
            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 600;
        }

        /* =========================
           Department
        ========================= */

        .department-badge {
            background: #eaf8f2;

            color: #198754;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 600;
        }

        /* =========================
           Action
        ========================= */

        .action-btn {
            width: 35px;
            height: 35px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 8px;

            border: none;

            transition: .2s;
        }

        .action-btn:hover {
            transform: translateY(-2px);
        }

        .edit-btn {
            background: #fff3cd;
            color: #997404;
        }

        .delete-btn {
            background: #ffe5e8;
            color: #dc3545;
        }

        /* =========================
           Empty
        ========================= */

        .empty-icon {
            width: 70px;
            height: 70px;

            border-radius: 50%;

            background: #f0f4fa;

            color: #8a94a6;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: auto;

            font-size: 30px;
        }

        /* =========================
           Pagination
        ========================= */

        .pagination {
            margin: 0;
        }

        .page-link {
            border: none;

            margin: 0 3px;

            border-radius: 8px !important;

            color: #667085;
        }

        .page-item.active .page-link {
            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );
        }

        /* =========================
           Alert
        ========================= */

        .alert {
            border: none;

            border-radius: 12px;

            box-shadow:
                0 5px 20px rgba(0,0,0,.04);
        }

        /* =========================
           Mobile
        ========================= */

        @media (max-width: 992px) {

            .sidebar {
                width: 75px;

                padding: 20px 10px;
            }

            .brand {
                justify-content: center;
            }

            .brand-text,
            .menu-title,
            .sidebar-link span,
            .sidebar-bottom span {
                display: none;
            }

            .sidebar-link {
                justify-content: center;

                padding: 12px;
            }

            .sidebar-bottom {
                left: 10px;
                right: 10px;
            }

            .main {
                margin-left: 75px;
            }

        }

        @media (max-width: 768px) {

            .main {
                padding: 20px 15px;
            }

            .top-header {
                align-items: flex-start;

                gap: 15px;
            }

            .page-title {
                font-size: 23px;
            }

            .user-profile {
                display: none;
            }

            .btn-add {
                padding: 9px 12px;
            }

            .btn-add span {
                display: none;
            }

        }

        @media (max-width: 576px) {

            .sidebar {
                width: 0;

                padding: 0;

                overflow: hidden;
            }

            .main {
                margin-left: 0;
            }

        }

    </style>

</head>

<body>


    <!-- =========================================
         Sidebar
    ========================================== -->

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-logo">

                <i class="bi bi-mortarboard-fill"></i>

            </div>

            <div class="brand-text">

                <h5>Student CMS</h5>

                <small>Management System</small>

            </div>

        </div>


        <div class="menu-title">
            Main Menu
        </div>


        <a
            href="{{ route('students.index') }}"
            class="sidebar-link active">

            <i class="bi bi-grid-1x2-fill"></i>

            <span>Dashboard</span>

        </a>


        <a
            href="{{ route('students.index') }}"
            class="sidebar-link">

            <i class="bi bi-people-fill"></i>

            <span>Students</span>

        </a>


        <a
            href="#"
            class="sidebar-link">

            <i class="bi bi-building"></i>

            <span>Departments</span>

        </a>


        <a
            href="#"
            class="sidebar-link">

            <i class="bi bi-bar-chart-fill"></i>

            <span>Reports</span>

        </a>


        <div class="menu-title">
            Account
        </div>


        <a
            href="#"
            class="sidebar-link">

            <i class="bi bi-person-circle"></i>

            <span>Profile</span>

        </a>


        <div class="sidebar-bottom">

            <form
                action="{{ route('logout') }}"
                method="POST">

                @csrf

                <button
                    type="submit"
                    class="sidebar-link w-100 border-0"
                    style="background:transparent;">

                    <i class="bi bi-box-arrow-right"></i>

                    <span>Logout</span>

                </button>

            </form>

        </div>

    </aside>


    <!-- =========================================
         Main
    ========================================== -->

    <main class="main">


        <!-- Header -->

        <div class="top-header">

            <div>

                <h1 class="page-title">

                    Student Directory

                </h1>

                <div class="page-subtitle">

                    Manage and organize student information

                </div>

            </div>


            <div class="user-profile">

                <div class="user-avatar">

                    <i class="bi bi-person-fill"></i>

                </div>

                <div>

                    <div class="user-name">

                        Administrator

                    </div>

                    <div class="user-role">

                        Admin Account

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             Statistics
        ====================================== -->

        <div class="row g-4 mb-4">


            <!-- Total -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon icon-blue">

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <div class="stat-number">

                        {{ $students->total() }}

                    </div>

                    <div class="stat-label">

                        Total Students

                    </div>

                </div>

            </div>


            <!-- Male -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon icon-purple">

                        <i class="bi bi-gender-male"></i>

                    </div>

                    <div class="stat-number">

                        {{ $students->where('gender', 'Male')->count() }}

                    </div>

                    <div class="stat-label">

                        Male Students

                    </div>

                </div>

            </div>


            <!-- Female -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon icon-green">

                        <i class="bi bi-gender-female"></i>

                    </div>

                    <div class="stat-number">

                        {{ $students->where('gender', 'Female')->count() }}

                    </div>

                    <div class="stat-label">

                        Female Students

                    </div>

                </div>

            </div>


            <!-- Department -->

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon icon-orange">

                        <i class="bi bi-building"></i>

                    </div>

                    <div class="stat-number">

                        {{ $departments->count() }}

                    </div>

                    <div class="stat-label">

                        Departments

                    </div>

                </div>

            </div>


        </div>


        <!-- Success Message -->

        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show mb-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        <!-- =====================================
             Search Card
        ====================================== -->

        <div class="custom-card mb-4">

            <div class="card-header-custom">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="fw-bold mb-1">

                            <i class="bi bi-funnel-fill text-primary me-2"></i>

                            Search & Filter

                        </h5>

                        <small class="text-muted">

                            Find students quickly

                        </small>

                    </div>

                </div>

            </div>


            <div class="p-4">

                <form
                    action="{{ route('students.index') }}"
                    method="GET">

                    <div class="row g-3">


                        <!-- Search -->

                        <div class="col-lg-4 col-md-6">

                            <label class="form-label fw-semibold">

                                Search Student

                            </label>

                            <div class="input-group search-box">

                                <span class="input-group-text">

                                    <i class="bi bi-search"></i>

                                </span>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Name, Email, Department..."
                                    value="{{ request('search') }}">

                            </div>

                        </div>


                        <!-- Department -->

                        <div class="col-lg-3 col-md-6">

                            <label class="form-label fw-semibold">

                                Department

                            </label>

                            <select
                                name="department_id"
                                class="form-select">

                                <option value="">

                                    All Departments

                                </option>

                                @foreach($departments as $department)

                                    <option
                                        value="{{ $department->dept_id }}"
                                        {{ request('department_id') == $department->dept_id ? 'selected' : '' }}>

                                        {{ $department->dept_name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        <!-- Gender -->

                        <div class="col-lg-2 col-md-6">

                            <label class="form-label fw-semibold">

                                Gender

                            </label>

                            <select
                                name="gender"
                                class="form-select">

                                <option value="">
                                    All
                                </option>

                                <option
                                    value="Male"
                                    {{ request('gender') == 'Male' ? 'selected' : '' }}>

                                    Male

                                </option>

                                <option
                                    value="Female"
                                    {{ request('gender') == 'Female' ? 'selected' : '' }}>

                                    Female

                                </option>

                            </select>

                        </div>


                        <!-- Buttons -->

                        <div class="col-lg-3 col-md-6">

                            <label class="form-label">

                                &nbsp;

                            </label>

                            <div class="d-flex gap-2">

                                <button
                                    type="submit"
                                    class="btn btn-primary btn-main">

                                    <i class="bi bi-search me-1"></i>

                                    Search

                                </button>


                                <a
                                    href="{{ route('students.index') }}"
                                    class="btn btn-outline-secondary btn-reset">

                                    <i class="bi bi-arrow-clockwise"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        <!-- =====================================
             Student Table
        ====================================== -->

        <div class="custom-card">


            <!-- Table Header -->

            <div class="card-header-custom">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="fw-bold mb-1">

                            <i class="bi bi-people-fill text-primary me-2"></i>

                            Student Information

                        </h5>

                        <small class="text-muted">

                            List of registered students

                        </small>

                    </div>


                    <a
                        href="{{ route('students.create') }}"
                        class="btn btn-primary btn-add">

                        <i class="bi bi-plus-lg me-1"></i>

                        <span>Add Student</span>

                    </a>

                </div>

            </div>


            <!-- Table -->

            <div class="table-responsive">

                <table class="table student-table">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Student</th>

                            <th>Email</th>

                            <th>Gender</th>

                            <th>Enrollment</th>

                            <th>Department</th>

                            <th>Description</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>


                        @forelse($students as $student)

                            <tr>


                                <!-- ID -->

                                <td>

                                    <span class="student-id">

                                        #{{ $student->student_id }}

                                    </span>

                                </td>


                                <!-- Name -->

                                <td>

                                    <div class="student-name">

                                        {{ $student->student_name }}

                                    </div>

                                </td>


                                <!-- Email -->

                                <td>

                                    <span class="email">

                                        <i class="bi bi-envelope me-1"></i>

                                        {{ $student->email }}

                                    </span>

                                </td>


                                <!-- Gender -->

                                <td>

                                    @if($student->gender == 'Male')

                                        <span class="gender-badge gender-male">

                                            <i class="bi bi-gender-male me-1"></i>

                                            Male

                                        </span>

                                    @else

                                        <span class="gender-badge gender-female">

                                            <i class="bi bi-gender-female me-1"></i>

                                            Female

                                        </span>

                                    @endif

                                </td>


                                <!-- Enrollment -->

                                <td>

                                    <span class="text-muted">

                                        <i class="bi bi-calendar3 me-1"></i>

                                        {{ $student->enrollment_date
                                            ? \Carbon\Carbon::parse($student->enrollment_date)->format('d-M-Y')
                                            : '-' }}

                                    </span>

                                </td>


                                <!-- Department -->

                                <td>

                                    @if($student->department)

                                        <span class="department-badge">

                                            <i class="bi bi-building me-1"></i>

                                            {{ $student->department->dept_name }}

                                        </span>

                                    @else

                                        <span class="text-muted">

                                            No Department

                                        </span>

                                    @endif

                                </td>


                                <!-- Description -->

                                <td>

                                    <span class="text-muted">

                                        {{ $student->description ?? '-' }}

                                    </span>

                                </td>


                                <!-- Action -->

                                <td>

                                    <div class="d-flex gap-2">


                                        <!-- Edit -->

                                        <a
                                            href="{{ route('students.edit', $student->student_id) }}"
                                            class="action-btn edit-btn"
                                            title="Edit">

                                            <i class="bi bi-pencil-square"></i>

                                        </a>


                                        <!-- Delete -->

                                        <form
                                            action="{{ route('students.destroy', $student->student_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this student?')">

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-btn delete-btn"
                                                title="Delete">

                                                <i class="bi bi-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td
                                    colspan="8"
                                    class="text-center py-5">

                                    <div class="empty-icon">

                                        <i class="bi bi-inbox"></i>

                                    </div>

                                    <h5 class="fw-bold mt-3">

                                        No Students Found

                                    </h5>

                                    <p class="text-muted">

                                        There are no students matching your search.

                                    </p>

                                    <a
                                        href="{{ route('students.create') }}"
                                        class="btn btn-primary btn-add">

                                        <i class="bi bi-plus-lg me-1"></i>

                                        Add Student

                                    </a>

                                </td>

                            </tr>


                        @endforelse


                    </tbody>

                </table>

            </div>


            <!-- Pagination -->

            @if($students->hasPages())

                <div class="p-4 border-top">

                    <div class="d-flex justify-content-center">

                        {{ $students->links() }}

                    </div>

                </div>

            @endif


        </div>


        <!-- Footer -->

        <div class="text-center text-muted mt-4">

            <small>

                © {{ date('Y') }} Student Management System

                • All Rights Reserved

            </small>

        </div>


    </main>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>