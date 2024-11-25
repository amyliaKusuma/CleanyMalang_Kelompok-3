<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #EEF2FF;
        }

        .container {
            background: rgba(193, 214, 246, 1);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 1rem;
        }

        h1 {
            color: #1E3A8A;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .error-container {
            background-color: #FEE2E2;
            border: 1px solid #EF4444;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .error-container ul {
            list-style-position: inside;
            color: #B91C1C;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            color: #4B5563;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
            background-color: white;
        }

        input:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* Add icon styles */
        .form-group::before {
            content: '';
            position: absolute;
            left: 1rem;
            top: 2.5rem;
            width: 20px;
            height: 20px;
            opacity: 0.5;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .form-group.user-icon::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z' /%3E%3C/svg%3E");
        }

        .form-group.email-icon::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z' /%3E%3C/svg%3E");
        }

        input {
            padding-left: 2.75rem;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #0052CC;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #0043A4;
        }

        .brand-logo {
            text-align: center;
            color: #3B82F6;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <div class="brand-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo">
        </div>

        @if ($errors->any())
            <div class="error-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('edit-profile.update') }}" method="POST">
            @csrf
            <div class="form-group user-icon">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" required>
            </div>

            <div class="form-group email-icon">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required>
            </div>

            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>