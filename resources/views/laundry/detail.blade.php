<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $laundry['name'] }} - Cleany Malang</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and base styles */
        body {
            background-color: #ADC9F3;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh; /* Tambahkan ini */
            display: flex; /* Tambahkan ini */
            flex-direction: column;
        }

        #services h2,
        #location h2,
        #gallery h2,
        #review h2 {
        text-align: center;
        }

    
        nav {
            background-color: white;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 1rem; 
            padding-right: 1rem;
        }

        .nav-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand-logo img {
            width: 6rem;
        }

        .nav-links {
            display: flex;
            gap: 5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #374151;
            transition: color 0.3s ease;
        }

        .nav-links a.active {
            color: #2563eb;
            font-weight: bold;
        }

        .main-container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            flex: 1;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            color: #2563eb;
            margin-bottom: 2rem;
            text-decoration: none;
            gap: 0.5rem;
        }

        .back-button svg {
            width: 1rem;
            height: 1rem;
        }

        /* Card styles */
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .card h2 {
            color: #1f2937;
            margin-bottom: 1.5rem;
        }

        .laundry-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .laundry-header img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .laundry-info h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #1f2937;
            text-align: center;
        }

        .laundry-info p {
            color: #4b5563;
            margin-bottom: 1rem;
            text-align: center;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .info-grid h3 {
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: #1f2937;
            text-align: center;
            font-size: 1.25rem;
        }

        .info-grid p {
            color: #4b5563;
            margin: 0;
            font-size: 1rem;
        }

        .info-button {
        background-color: rgba(132, 174, 237, 1); /* Warna biru */
        color: white; /* Teks putih */
        padding: 0.5rem 1rem; /* Padding tombol */
        border: none; /* Hilangkan border */
        border-radius: 15px; /* Sudut membulat */
        font-size: 1rem; /* Ukuran font */
        font-weight: 600; /* Teks tebal */
        cursor: pointer; /* Pointer saat hover */
        text-align: center; /* Teks rata tengah */
        transition: background-color 0.3s ease; /* Efek hover */
        width: 100%; /* Lebar tombol */
        }

        .info-button:hover {
            background-color: #1d4ed8; /* Warna lebih gelap saat hover */
        }

        .services-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .services-image img {
            width: 16rem;
            height: auto;
        }

        .services-list {
            flex: 1;
            text-align: center;
        }

        .services-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            text-align: center;
            align-items: center;
        }

        .service-tag {
            background-color: #3b82f6;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            display: inline-block;
            font-size: 0.875rem;
            text-align: center;
            display: flex;
        }

        .location-section {
            margin-bottom: 2rem;
        }

        .location-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .map-container,
        .logo-container {
            flex: 1;
            max-width: 400px;
        }

        .map-container iframe,
        .logo-container img {
            width: 100%;
            height: 400px;
            border-radius: 0.5rem;
        }

        .location-button {
            background-color: #2563eb;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .location-button:hover {
            background-color: #1d4ed8;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }

        .gallery-item {
            width: 100%;
            height: 12rem;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .reviews-header {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .reviews-header img {
            width: 16rem;
            height: auto;
            order: -1;
        }

        .reviews-header h2 {
            font-size: 2rem;
            margin: 0;
        }

        .reviews-content {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-left: 0;
            max-width: none;
        }

        .review-item {
            background-color: #2563eb;
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 9999px;
            margin-bottom: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            max-width: fit-content;
        }

        .rating {
            color: #facc15;
            font-size: 0.875rem;
            margin: 0;
        }

        .review-text {
            color: white;
            font-size: 0.875rem;
            margin: 0;
            line-height: 1.2;
            text-align: justify;
        }

        /* Container untuk gambar dan reviews */
        .reviews-container {
            display: flex;
            align-items: flex-start;
            gap: 2rem;
            margin-top: 1rem;
        }
        /* Footer styles */
        footer {
            background-color: white;
            text-align: center;
            margin-top: auto;
            width: 100%;
            padding: 1rem 0;
        }

        footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        footer p {
            margin: 0.5rem 0;
            color: #4b5563;
        }

        .credits {
            font-size: 0.875rem;
            color: #4b5563;
        }

        .contact {
            font-size: 0.875rem;
            color: #4b5563;
            margin-top: 0.5rem;
        }

        .contact a {
            color: #2563eb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact a:hover {
            color: #1d4ed8;
        }

        @media (min-width: 640px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                gap: 2rem;
            }

            .location-content {
                flex-direction: column;
            }

            .services-content {
                flex-direction: column;
                text-align: center;
            }

            .map-container iframe {
            height: 300px; 
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
            .info-grid > div {
                padding: 1.25rem;
            }
            .reviews-container {
            flex-direction: column;
            align-items: center;
        }

        .reviews-header {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .reviews-header img {
            width: 100%;
            max-width: 16rem;
        }

        .reviews-content {
            justify-content: center;
        }

        .review-item {
            width: auto;
        }
            }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-content">
                <a href="{{ route('home') }}" class="back-button">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back
                </a>
                <div class="brand-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo">
                </div>
                <div class="nav-links">
                    <a href="#about" class="{{ request()->is('#about') ? 'active' : '' }}">About Laundry</a>
                    <a href="#services" class="{{ request()->is('#services') ? 'active' : '' }}">Services</a>
                    <a href="#location" class="{{ request()->is('#location') ? 'active' : '' }}">Location</a>
                    <a href="#gallery" class="{{ request()->is('#gallery') ? 'active' : '' }}">Gallery</a>
                    <a href="#review" class="{{ request()->is('#review') ? 'active' : '' }}">Review</a>
                </div>                
            </div>
        </div>
    </nav>

    <div class="main-container">
        {{-- <a href="{{ route('home') }}" class="back-button">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back
        </a> --}}

        <!-- About Section -->
        <section id="about" class="card">
            <div class="laundry-header">
                <img src="{{ asset($laundry['logo']) }}" alt="{{ $laundry['name'] }} Logo"> 
                <div class="laundry-info">
                    <h1>{{ $laundry['name'] }}</h1>
                    <p>{{ $laundry['description'] }}</p>
                    <div class="info-grid">
                        <div>
                            <h3>Jam Operasional</h3>
                            <button class="info-button">{{ $laundry['operational_hours'] }}</button>
                        </div>
                        <div>
                            <h3>Contact</h3>
                            <button class="info-button">{{ $laundry['contact'] }}</button>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="card">
            <h2>Services</h2>
            <div class="services-content">
                <div class="services-image">
                    <img src="{{ asset('images/services.png') }}" alt="Service Icon">
                </div>
                <div class="services-list">
                    <ul>
                        @foreach($laundry['services'] as $service => $price)
                        <li class="service-tag">
                            {{ $service }}/{{ $price }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>        

        <!-- Location Section -->
        <section id="location" class="location-section">
            <h2>Location</h2>
            <div class="container">
                <div class="location-content">
                    <div class="map-container">
                        <iframe 
                            src="{{ $laundry['map_iframe'] }}" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="logo-container">
                        <img src="{{ asset('images/location.png') }}" alt="Location Image">
                    </div>
                </div>
                <button class="location-button">
                    {{ $laundry['address'] }}
                </button>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="card">
            <h2>Gallery</h2>
            <div class="gallery-grid">
                @foreach($laundry['gallery'] as $image)
                <div class="gallery-item">
                    <img src="{{ asset($image) }}" alt="Gallery Image">
                </div>
                @endforeach
            </div>            
        </section>

        <!-- Reviews Section -->
        <section id="review" class="card">
            <h2>Reviews</h2>
            <div class="reviews-container">
                <img src="{{ asset('images/apa kata mereka.png') }}" alt="Reviews">
                <div class="reviews-content">
                    @foreach($laundry['reviews'] as $review)
                    <div class="review-item">
                        <div class="rating">
                            @for($i = 0; $i < $review['rating']; $i++)
                                ★
                            @endfor
                        </div>
                        <p class="review-text">{{ $review['text'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Made By Team of Cleany Malang ✿</p>
            <p class="credits">
                Amylia Kusuma | Shavira Diva | Haris Eka | Frizqy Zistin
            </p>
            <p class="contact">
                Need Collaboration? <a href="mailto:amyliaazizah@student.ub.ac.id">Contact Us!</a>
            </p>
        </div>
    </footer>
</body>
</html>