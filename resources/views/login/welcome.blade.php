<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management System</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
        }

        .welcome-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .welcome-card {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .left-section {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            min-height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }

        .left-section i {
            font-size: 100px;
            margin-bottom: 20px;
        }

        .left-section h1 {
            font-weight: bold;
        }

        .right-section {
            padding: 50px 40px;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .system-title {
            font-size: 32px;
            font-weight: bold;
            color: #212529;
        }

        .description {
            color: #6c757d;
            line-height: 1.7;
            margin-top: 15px;
        }

        .btn-login {
            background: #0d6efd;
            color: white;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #0b5ed7;
            color: white;
        }

        .btn-register {
            border: 2px solid #0d6efd;
            color: #0d6efd;
            border-radius: 10px;
            padding: 10px;
            font-weight: bold;
        }

        .btn-register:hover {
            background: #0d6efd;
            color: white;
        }

        .feature {
            margin-top: 25px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #495057;
        }

        .feature-item i {
            color: #0d6efd;
            font-size: 20px;
            margin-right: 10px;
        }

        @media (max-width: 767px) {
            .left-section {
                min-height: 300px;
            }

            .left-section i {
                font-size: 70px;
            }

            .right-section {
                padding: 35px 25px;
            }

            .system-title {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="welcome-container">

        <div class="welcome-card">

            <div class="row g-0">

                <!-- Left Section -->
                <div class="col-md-6">

                    <div class="left-section">

                        <div>

                            <i class="bi bi-mortarboard-fill"></i>

                            <h1>Welcome</h1>

                            <p class="mb-0">
                                Student Management System
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Right Section -->
                <div class="col-md-6">

                    <div class="right-section">

                        <div class="system-title">
                            Student Management System
                        </div>

                        <p class="description">
                            Manage student information easily and efficiently.
                            You can register students, manage departments,
                            update student information, and view student records.
                        </p>


                        <!-- Features -->
                        <div class="feature">

                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                Student Management
                            </div>

                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                Department Management
                            </div>

                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                Search & Filter Students
                            </div>

                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                Secure Login System
                            </div>

                        </div>


                        <!-- Buttons -->
                        <div class="d-grid gap-3 mt-4">

                            <a href="{{ route('login') }}"
                               class="btn btn-login">

                                <i class="bi bi-box-arrow-in-right"></i>
                                Login

                            </a>

                            <a href="{{ route('register') }}"
                               class="btn btn-register">

                                <i class="bi bi-person-plus"></i>
                                Create Account

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>