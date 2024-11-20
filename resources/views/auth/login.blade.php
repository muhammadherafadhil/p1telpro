<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://www.androidponsel.com/wp-content/uploads/2020/05/The-Telkom-Hub-e1598512789783.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-card .logo {
            margin: 0 auto 20px;
            max-width: 80px;
        }

        .login-card h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .form-control {
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .btn-primary {
            font-size: 1rem;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 25px;
            width: 100%;
        }

        .alert-danger {
            font-size: 0.9rem;
            color: #d9534f;
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: left;
        }

        .login-card .form-footer {
            font-size: 0.9rem;
        }

        .login-card a {
            color: #007bff;
            text-decoration: none;
        }

        .login-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <!-- Logo -->
        <a href="#">
            <img src="https://product.telkomproperty.co.id/assets/images/logoTelkom.png" alt="Logo" class="logo">
        </a>

        <h1>Welcome Back</h1>
        <p class="text-muted">Login to access your account</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- NIK Input -->
            <div class="form-group">
                <input type="text" 
                       name="nik" 
                       placeholder="Enter your NIK" 
                       class="form-control @error('nik') is-invalid @enderror" 
                       required>
                @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <input type="password" 
                       name="password" 
                       placeholder="Enter your password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>

        <!-- Links -->
        <div class="form-footer mt-3">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="form-footer mt-2">
            <span>Don't have an account?</span>
            <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
