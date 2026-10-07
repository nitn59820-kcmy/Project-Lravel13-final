<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Student Management System</title>

    <!-- Bootstrap 5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons 1.13.1 -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, sans-serif;

            padding: 20px;

            overflow: hidden;
        }

        /* =========================================
           Login Card
        ========================================= */

        .login-card {
            width: 100%;
            max-width: 430px;

            background: #ffffff;

            border-radius: 22px;

            padding: 40px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);

            animation: cardShow 0.8s ease;
        }

        @keyframes cardShow {
            from {
                opacity: 0;
                transform: translateY(30px) scale(.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* =========================================
           Logo
        ========================================= */

        .logo-wrapper {
            width: 105px;
            height: 105px;

            margin: auto;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;
        }

        .logo {
            width: 82px;
            height: 82px;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            color: white;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 38px;

            position: relative;
            z-index: 2;

            box-shadow:
                0 10px 25px rgba(13, 110, 253, .30);

            animation:
                logoFloat 3s ease-in-out infinite,
                logoGlow 2s ease-in-out infinite alternate;
        }

        /* Logo Floating */

        @keyframes logoFloat {

            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0);
            }

        }

        /* Logo Glow */

        @keyframes logoGlow {

            0% {
                box-shadow:
                    0 10px 25px rgba(13, 110, 253, .25),
                    0 0 0 0 rgba(102, 16, 242, .15);
            }

            100% {
                box-shadow:
                    0 15px 35px rgba(13, 110, 253, .45),
                    0 0 0 12px rgba(102, 16, 242, .08);
            }

        }

        /* Logo Icon */

        .logo i {
            display: inline-block;

            animation:
                iconPulse 2s ease-in-out infinite;
        }

        @keyframes iconPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.12);
            }

        }

        /* Rotating Ring */

        .logo-wrapper::before {
            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            border-radius: 50%;

            border: 2px dashed rgba(13, 110, 253, .35);

            animation:
                rotateRing 8s linear infinite;
        }

        @keyframes rotateRing {

            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }

        }

        /* =========================================
           Title
        ========================================= */

        .title {
            font-weight: 700;

            margin-top: 20px;

            color: #212529;

            animation:
                titleShow .8s ease .2s both;
        }

        @keyframes titleShow {

            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        .subtitle {
            color: #6c757d;

            font-size: 14px;

            animation:
                titleShow .8s ease .35s both;
        }

        /* =========================================
           Labels
        ========================================= */

        .form-label {
            font-weight: 600;

            font-size: 14px;

            color: #343a40;
        }

        /* =========================================
           Input
        ========================================= */

        .input-group {
            border-radius: 10px;

            overflow: hidden;

            transition: .25s ease;
        }

        .input-group-text {
            background: #f8f9fa;

            border-color: #dee2e6;

            color: #0d6efd;

            width: 48px;

            justify-content: center;
        }

        .form-control {
            height: 48px;

            border-radius: 0 10px 10px 0;

            border-color: #dee2e6;

            transition: .25s ease;
        }

        .form-control:focus {
            border-color: #0d6efd;

            box-shadow: none;
        }

        .input-group:focus-within {
            box-shadow:
                0 0 0 3px rgba(13, 110, 253, .12);

            transform: translateY(-1px);
        }

        /* =========================================
           Password Button
        ========================================= */

        .password-toggle {
            height: 48px;

            border-color: #dee2e6;

            background: #f8f9fa;

            color: #6c757d;

            transition: .2s;
        }

        .password-toggle:hover {
            background: #e9ecef;

            color: #0d6efd;
        }

        /* =========================================
           Login Button
        ========================================= */

        .btn-login {
            height: 50px;

            border-radius: 10px;

            font-weight: 700;

            border: none;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #6610f2
                );

            transition: .25s ease;

            position: relative;

            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(13, 110, 253, .30);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Button Shine */

        .btn-login::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 60%;
            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, .25),
                    transparent
                );

            transform: skewX(-20deg);

            animation:
                buttonShine 3s infinite;
        }

        @keyframes buttonShine {

            0% {
                left: -100%;
            }

            50% {
                left: 140%;
            }

            100% {
                left: 140%;
            }

        }

        /* =========================================
           Create Account
        ========================================= */

        .btn-register {
            height: 45px;

            border-radius: 10px;

            font-weight: 600;

            transition: .25s ease;
        }

        .btn-register:hover {
            transform: translateY(-2px);

            box-shadow:
                0 6px 15px rgba(13, 110, 253, .15);
        }

        /* =========================================
           Forgot Password
        ========================================= */

        .forgot-password {
            text-decoration: none;

            font-size: 13px;

            color: #0d6efd;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* =========================================
           Divider
        ========================================= */

        .divider {
            display: flex;

            align-items: center;

            gap: 12px;

            color: #adb5bd;

            font-size: 12px;

            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: "";

            height: 1px;

            background: #dee2e6;

            flex: 1;
        }

        /* =========================================
           Back Home
        ========================================= */

        .back-home {
            text-decoration: none;

            color: #6c757d;

            font-size: 13px;

            transition: .2s;
        }

        .back-home:hover {
            color: #0d6efd;
        }

        /* =========================================
           Error / Success
        ========================================= */

        .alert {
            border-radius: 10px;

            font-size: 13px;

            animation:
                alertShow .4s ease;
        }

        @keyframes alertShow {

            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        /* =========================================
           Remember Checkbox
        ========================================= */

        .form-check-input {
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #0d6efd;

            border-color: #0d6efd;
        }

        /* =========================================
           Background Decorations
        ========================================= */

        .background-circle {
            position: fixed;

            border-radius: 50%;

            pointer-events: none;

            z-index: -1;
        }

        .circle-one {
            width: 250px;
            height: 250px;

            background: rgba(255, 255, 255, .08);

            top: -100px;
            left: -80px;

            animation:
                backgroundMove 8s ease-in-out infinite;
        }

        .circle-two {
            width: 300px;
            height: 300px;

            background: rgba(255, 255, 255, .06);

            right: -120px;
            bottom: -100px;

            animation:
                backgroundMove 10s ease-in-out infinite reverse;
        }

        @keyframes backgroundMove {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(20px, -20px);
            }

            100% {
                transform: translate(0, 0);
            }

        }

        /* =========================================
           Mobile
        ========================================= */

        @media (max-width: 480px) {

            body {
                padding: 15px;
            }

            .login-card {
                padding: 30px 22px;

                border-radius: 18px;
            }

            .title {
                font-size: 21px;
            }

            .logo {
                width: 75px;
                height: 75px;

                font-size: 34px;
            }

            .logo-wrapper {
                width: 95px;
                height: 95px;
            }

            .logo-wrapper::before {
                width: 90px;
                height: 90px;
            }

        }

        /* =========================================
           Reduced Motion
        ========================================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }

        }
    </style>

</head>

<body>

    <!-- Background Decorations -->

    <div class="background-circle circle-one"></div>
    <div class="background-circle circle-two"></div>


    <!-- Login Card -->

    <div class="login-card">

        <!-- Logo & Title -->

        <div class="text-center">

            <div class="logo-wrapper">

                <div class="logo">

                    <i class="bi bi-mortarboard-fill"></i>

                </div>

            </div>


            <h2 class="title">
                Student Management System
            </h2>

            <p class="subtitle">
                Login to your account
            </p>

        </div>


        <!-- Error Message -->

        @if ($errors->any())

            <div class="alert alert-danger mt-3">

                <i class="bi bi-exclamation-triangle-fill me-1"></i>

                {{ $errors->first() }}

            </div>

        @endif


        <!-- Success Message -->

        @if (session('success'))

            <div class="alert alert-success mt-3">

                <i class="bi bi-check-circle-fill me-1"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- Login Form -->

        <form
            action="{{ url('/login') }}"
            method="POST"
            class="mt-4">

            @csrf


            <!-- Email -->

            <div class="mb-3">

                <label class="form-label">

                    Email

                </label>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-envelope-fill"></i>

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


            <!-- Password -->

            <div class="mb-2">

                <div class="d-flex justify-content-between">

                    <label class="form-label">

                        Password

                    </label>


                    <a
                        href="#"
                        class="forgot-password">

                        Forgot password?

                    </a>

                </div>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-lock-fill"></i>

                    </span>


                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required>


                    <button
                        type="button"
                        class="btn password-toggle"
                        onclick="togglePassword()">

                        <i
                            class="bi bi-eye"
                            id="eyeIcon">
                        </i>

                    </button>

                </div>

            </div>


            <!-- Remember -->

            <div class="form-check mt-3">

                <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    id="remember">

                <label
                    class="form-check-label"
                    for="remember"
                    style="font-size:13px;">

                    Remember me

                </label>

            </div>


            <!-- Login -->

            <div class="d-grid mt-4">

                <button
                    type="submit"
                    class="btn btn-primary btn-login">

                    <i class="bi bi-box-arrow-in-right me-1"></i>

                    Login

                </button>

            </div>

        </form>


        <!-- Register -->

        <div class="divider">

            OR

        </div>


        <div class="text-center">

            <p
                class="text-muted mb-3"
                style="font-size:13px;">

                Don't have an account?

            </p>


            <a
                href="{{ route('register') }}"
                class="btn btn-outline-primary btn-register w-100">

                <i class="bi bi-person-plus-fill me-1"></i>

                Create Account

            </a>

        </div>


        <!-- Back Home -->

        <div class="text-center mt-4">

            <a
                href="{{ url('/') }}"
                class="back-home">

                <i class="bi bi-arrow-left me-1"></i>

                Back to Home

            </a>

        </div>

    </div>


    <!-- Password Toggle -->

    <script>

        function togglePassword() {

            const password =
                document.getElementById('password');

            const icon =
                document.getElementById('eyeIcon');


            if (password.type === 'password') {

                password.type = 'text';

                icon.classList.remove('bi-eye');

                icon.classList.add('bi-eye-slash');

            } else {

                password.type = 'password';

                icon.classList.remove('bi-eye-slash');

                icon.classList.add('bi-eye');

            }

        }

    </script>

</body>

</html>