<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Cleany Malang</title>
    <style>
        /* Reset dan base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: rgba(193, 214, 246, 1);
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Navbar */
        nav {
            background-color: white;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-logo img {
            width: 6rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: #4B75F2;
            text-decoration: none;
            margin-right: 2rem;
        }

        .nav-links a.active {
            font-weight: bold;
        }

        /* Buttons */
        .btn-primary {
            background-color: #4B75F2;
            color: white;
            padding: 0.625rem 1.25rem;
            border-radius: 1.5625rem;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: #3260e0;
            transform: translateY(-2px);
        }

        .btn-info {
            background-color: #F3F4F6;
            color: #333333;
            padding: 0.5rem 1rem;
            border-radius: 1.5625rem;
            width: 100%;
            text-align: left;
            border: none;
            cursor: pointer;
            margin-bottom: 0.5rem;
        }

        .btn-info:hover {
            background-color: #E5E7EB;
        }

        .logout-btn {
            background-color: #3260e0;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: none;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: rgba(7, 77, 182, 1);
        }

        /* Profile Section */
        .profile-section {
            background-color: rgba(193, 214, 246, 1);
            border-radius: 0.5rem;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
            margin: 1.5rem;
            /* padding: 4rem 1.5rem; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .profile-name {
            font-size: 1.875rem;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 0.5rem;
        }

        .profile-welcome {
            font-size: 1.125rem;
            color: #4B5563;
        }

        /* Profile Cards Container */
        .profile-cards {
            display: flex;
            gap: 2rem;
            width: 100%;
            max-width: 900px;
            justify-content: center;
            margin-top: 1rem;
        }

        .profile-card {
            background-color: rgba(193, 214, 246, 1);
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            width: 50%;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 1rem;
            text-align: center;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* Footer */
        footer {
            background-color: white;
            padding: 1rem;
        }

        .footer-content {
            text-align: center;
        }

        .footer-team {
            color: #4B5563;
            font-size: 0.875rem;
            margin: 1rem 0;
        }

        .footer-contact {
            color: #4B5563;
            font-size: 0.875rem;
        }

        .footer-contact a {
            color: #4B75F2;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-cards {
                flex-direction: column;
            }

            .profile-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container nav-container">
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo">
            </div>
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('account') }}" class="active">Akun</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- User Profile Section -->
    <div class="container">
        <section class="profile-section">
            <div class="profile-header">
                <img src="{{ asset('images/foto profil.png') }}" alt="Profile Picture" class="profile-pic">
                <h2 class="profile-name">Hello, {{ Auth::user()->name }}!</h2>
                <p class="profile-welcome">Welcome to your account page. Here you can manage your profile and settings.</p>
            </div>

            <div class="profile-cards">
                <!-- Personal Information -->
                <div class="profile-card">
                    <h3 class="card-title">Personal Information</h3>
                    <div class="card-content">
                        <button class="btn-info"><strong>Username:</strong> {{ Auth::user()->name }}</button>
                        <button class="btn-info"><strong>Email:</strong> {{ Auth::user()->email }}</button>
                        <div style="text-align: center; margin-top: 1rem;">
                            <a href="{{ route('edit-profile') }}" class="btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Account Settings -->
                <div class="profile-card">
                    <h3 class="card-title">Account Settings</h3>
                    <div class="card-content">
                        <button class="btn-info"><strong>Role:</strong> {{ Auth::user()->role ?? 'No Role' }}</button>
                        <button class="btn-info"><strong>Member since:</strong> {{ optional(Auth::user()->created_at)->timezone('Asia/Jakarta')->format('M d, Y') }}</button>
                        <div style="text-align: center; margin-top: 1rem;">
                            <a href="{{ route('change-password') }}" class="btn-primary">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <p>Made By Team of Cleany Malang ✿</p>
            <p class="footer-team">
                Amylia Kusuma | Shavira Diva | Haris Eka | Frizqy Zistin
            </p>
            <p class="footer-contact">
                Need Collaboration? <a href="mailto:amyliaazizah@student.ub.ac.id">Contact Us!</a>
            </p>
        </div>
    </footer>
</body>
</html>