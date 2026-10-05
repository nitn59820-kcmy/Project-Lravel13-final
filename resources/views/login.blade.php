<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Student Management System</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .logo {
            width: 80px;
            height: 80px;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-size: 40px;
        }

        .title {
            font-weight: bold;
            margin-top: 20px;
        }

        .form-control {
            height: 48px;
            border-radius: 10px;
        }

        .btn-login {
            height: 48px;
            border-radius: 10px;
            font-weight: bold;
        }

        .back-home {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="text-center">

            <div class="logo">
                <i class="bi bi-mortarboard-fill"></i>
            </div>

            <h2 class="title">
                Student Management System
            </h2>

            <p class="text-muted">
                Login to your account
            </p>

        </div>


        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle-fill"></i>

                {{ $errors->first() }}
            </div>
        @endif


        {{-- Login Form --}}
        <form action="{{ url('/login') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your email"
                        value="{{ old('email') }}"
                        required>

                </div>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required>

                </div>

            </div>


            <div class="d-grid mt-4">

                <button type="submit" class="btn btn-primary btn-login">

                    <i class="bi bi-box-arrow-in-right"></i>

                    Login

                </button>

            </div>

        </form>


        <div class="text-center mt-4">

            <p class="mb-2">
                Don't have an account?
            </p>

            <a href="{{ route('register') }}" class="btn btn-outline-primary">

                <i class="bi bi-person-plus"></i>

                Create Account

            </a>

        </div>


        <div class="text-center mt-3">

            <a href="{{ url('/') }}" class="back-home text-muted">

                <i class="bi bi-arrow-left"></i>

                Back to Home

            </a>

        </div>

    </div>

</body>

</html>