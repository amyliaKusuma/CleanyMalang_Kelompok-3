<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            transition: border-color 0.2s;
            background-color: white;
        }

        input:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
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
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Change Password</h1>
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

        <form action="{{ route('change-password.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" id="current_password" required>
            </div>

            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" id="new_password" required>
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Confirm New Password:</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" required>
            </div>

            <button type="submit">Change Password</button>
        </form>
    </div>
</body>
</html>