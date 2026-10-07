```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center"
             style="min-height: 100vh;">

            <div class="col-md-5">

                <div class="card shadow border-0">

                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Create Account</h3>
                    </div>

                    <div class="card-body p-4">

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('/register') }}" method="POST">

                            @csrf

                            {{-- Name --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter your name"
                                    required>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter your email"
                                    required>

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Create password"
                                    required>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Confirm Password
                                </label>

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Confirm password"
                                    required>
                            </div>

                            {{-- Register Button --}}
                            <button
                                type="submit"
                                class="btn btn-primary w-100">
                                Register
                            </button>

                        </form>

                        <div class="text-center mt-3">
                            <span>Already have an account?</span>

                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </div>

                        <div class="text-center mt-2">
                            <a href="{{ url('/') }}"
                               class="text-decoration-none">
                                ← Back to Home
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
`
