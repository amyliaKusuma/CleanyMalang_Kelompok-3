<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Cleany Malang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(to right, #afcef9, #c5d6fa, #d7e3fa, #dee4f5); /* Gradien bertingkat */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            gap: 2rem;
            padding: 2rem;
        }

        .nav-section {
            background-color: #E3EFFF; /* Warna biru lembut */
            padding: 2rem;
            border-radius: 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        .nav-button {
            background: transparent;
            border: none;
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            padding: 1rem 2rem;
            border-radius: 30px;
            color: #8E9AB4;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-button.active {
            background: white;
            color: #1E3A8A;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }

        .signin-box {
            background: #C1D6F6;
            padding: 2.5rem;
            border-radius: 30px;
            width: 450px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .signin-box h2 {
            color: #1E3A8A;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .brand-logo {
            display: block;
            margin: 0 auto; /* Untuk memastikan logo di tengah horizontal */
            max-width: 100%; /* Agar tidak melebihi ukuran */
            height: auto; /* Proporsi tetap */
            margin-bottom: 1.5rem; /* Ruang di bawah logo */
        }

        .form-group {
            margin-bottom: 1.25rem;
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 1px solid #E5E7EB;
            border-radius: 15px;
            font-size: 1rem;
            background: #F9FAFB;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #4B84FF;
            background: white;
        }

        .form-group i {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: #8E9AB4;
        }

        .btn-primary {
            background: #0052CC;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #003D99;
        }

        .signin-link {
            margin-top: 2rem;
            color: #6B7280;
        }

        .signin-link a {
            color: #0052CC;
            text-decoration: none;
            font-weight: 600;
        }

        .alert {
            background: #FEE2E2;
            color: #DC2626;
            padding: 1rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
        }

        .alert ul {
            list-style: none;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .nav-section {
                display: none;
            }

            .signin-box {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-section">
            <a href="{{ route('register') }}" class="nav-button">Sign Up</a>
            <a href="{{ route('login') }}" class="nav-button active">Sign In</a>
        </div>
        <div class="signin-box">
            <h2>Sign In</h2>
            <div class="brand-logo">
                <img src="{{ asset('images/logo tanpa wm.png') }}" alt="Cleany Malang Logo">
            </div>
            
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                </div>
                <button type="submit" class="btn-primary">Sign In</button>

            </form>
            
            <div class="signin-link">
                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>