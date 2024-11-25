<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleany Malang - Laundry Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
html {
    scroll-behavior: smooth;
}

/* Fullscreen Sections */
.hero-section,
.about-section,
.info-section,
.form-section {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: background-color: #F3F4F6;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

/* Navbar */
nav {
    background-color: rgba(255, 255, 255, 1);
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
    position: sticky; /* Membuat navbar tetap terlihat saat scrolling */
    top: 0; /* Posisi di bagian atas */
    z-index: 1000; /* Pastikan navbar berada di atas elemen lain */
}

nav .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-left: 1rem; /* Opsional: Sesuaikan padding horizontal */
    padding-right: 1rem;
}

.brand-logo img {
    width: 5rem; /* Opsional: Sesuaikan ukuran logo */
}

.nav-links {
    display: flex;
    gap: 5rem; /* Sesuaikan jarak antar link */
}

.nav-link {
    font-weight: 600;
    color: #2563EB;
    text-decoration: none; /* Hilangkan garis bawah link */
    transition: color 0.3s; /* Tambahkan animasi saat hover */
}

.nav-link:hover {
    color: #1D4ED8; /* Warna saat hover */
}


/* Hero Section */
.hero-section {
    background: rgba(173, 201, 243, 1);
    display: flex;
    justify-content: center; /* Centering horizontally */
    align-items: center; /* Centering vertically */
    min-height: 100vh;
    padding: 2rem;
    box-sizing: border-box;
}

.hero-section .container {
    display: flex;
    justify-content: space-between; /* Aligns image to the left and content to the right */
    align-items: center; /* Vertically centers both the image and content */
    gap: 2rem; /* Adds space between the image and content */
    width: 100%;
}

.hero-image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 2rem;
    flex: 1;
}

.hero-circle {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20rem;
    height: 20rem;
    background-color: #DBEAFE;
    border-radius: 50%;
    z-index: -1;
}

.hero-image {
    max-width: 100%;
    height: auto;
}

.hero-content {
    text-align: center; /* Align content text to the left */
    flex: 1; /* Memberikan ruang untuk konten di sisi kanan */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Menjaga teks berada di tengah vertikal */
    gap: 1rem;
}

.hero-title {
    font-size: clamp(1.5rem, 5vw, 3rem);
    font-weight: 700;
    margin: 0;
    color: #1E3A8A;
}

.hero-text {
    color: #4B5563;
    margin-bottom: 2rem;
    text-align: center; /* Align text to the left */
    max-width: 90%;
    word-wrap: break-word;
    margin: 0 auto;
}

.swipe-button {
    background-color: #1E3A8A;
    color: white;
    padding: 0.75rem 2rem;
    font-size: 1rem;
    border-radius: 9999px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto; /* Menempatkan tombol di tengah */
    max-width: fit-content; /* Menjaga ukuran tombol sesuai dengan teks */
}

.swipe-button:hover {
    background-color: #1D4ED8;
    transform: translateY(-2px);
}

/* Section Style */
.about-section {
  padding: 50px 20px;
  background-color: rgba(213, 228, 249, 1);
  text-align: center;
}

/* Header */
.about-header h2 {
  font-size: 36px;
  font-weight: bold;
  color: #2d2d2d;
  margin: 8px;
}
.about-header span {
  color: #0056d2;
}

/* Content */
.about-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}

.about-description {
  flex: 1;
  text-align: left;
}

.about-description h3 {
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.about-description p {
  font-size: 16px;
  line-height: 1.6;
  color: #666;
  text-align: justify;
}

.about-image {
  flex: 1;
  text-align: right;
}
.about-image img {
  max-width: 100%;
  height: auto;
}

.about-features {
  display: flex;
  justify-content: center;
  gap: 20px; /* Jarak antar tombol */
}

.feature {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 15px;
  background-color: #C0D6F6; /* Warna latar belakang tombol */
  border: 0px solid #C0D6F6; /* Border tombol */
  border-radius: 30px; /* Sudut border melengkung */
  cursor: pointer; /* Kursor berubah jadi pointer saat hover */
  transition: transform 0.2s, background-color 0.3s;
  text-align: center;
  text-decoration: none;
}

.feature i {
  font-size: 24px;
  color: #007bff;
  margin-bottom: 8px;
}

.feature p {
  font-size: 16px;
  font-weight: bold;
  color: #000000;
  margin: 0;
}

.feature:hover {
  transform: scale(1.1); /* Efek membesar */
  background-color: #007bff; /* Warna berubah saat hover */
  color: #ffffff; /* Warna teks berubah */
}

.feature:hover i {
  color: #ffffff;
}

/* Laundry Information Section */
.info-section {
    padding: 4rem 0; /* Tambahkan padding atas dan bawah (4rem) */
    background-color: rgba(213, 228, 249, 1); /* Opsional: Tambahkan warna latar belakang */
    text-align: center;
}
.laundry-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.laundry-card {
    background-color:rgba(173, 201, 243, 1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    padding: 1rem;
    text-align: center;
}
.laundry-card:hover {
    transform: scale(0.8);
}

.laundry-logo {
    margin: 0 auto;
}

.laundry-title {
    font-weight: 700;
    font-size: 1.125rem;
    margin-top: 1rem;
}

.laundry-description {
    font-size: 0.875rem;
    color: #4B5563;
}

.rating {
    display: flex;
    justify-content: center;
    margin-top: 0.5rem;
    color: #FBBF24;
}

.more-link {
    color: #2563EB;
    display: inline-block;
    margin-top: 1rem;
}

/* Suggestion Form Section */
.form-section {
    background: rgba(173, 201, 243, 1);
    padding: 4rem 0;
    text-align: center;
}

.form-container {
    max-width: 32rem;
    margin: 0 auto;
    
}

.form-input {
    width: 100%;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
            border: 1px solid #E5E7EB;
            border-radius: 15px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 1);
            transition: all 0.3s ease;
}

textarea.form-input {
    height: 8rem;
}

.submit-button {
    background: #0052CC;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
            text-align: center;
}

/* Footer */
footer {
    background-color: #F3F4F6; /* Abu-abu terang */
    color: #374151;
    padding: 0 0;
    text-align: center;
}

.footer-text {
    margin-bottom: 1rem;
    background-color: #F3F4F6;
}

.footer-credits {
    font-size: 0.875rem;
    color: #4B5563;
}

.footer-contact {
    font-size: 0.875rem;
    color: #4B5563;
    margin-top: 1rem;
}

.footer-link {
    color: #2563EB; /* Biru */
    text-decoration: none;
}

/* Media Queries */
@media (max-width: 768px) {
    .hero-section,
    .about-section,
    .info-section,
    .form-section {
        min-height: 100vh;
        padding: 80px 1rem 2rem 1rem;
    }

    body {
        margin: 0; /* Hilangkan margin default */
        padding: 0;
        overflow-x: hidden; /* Hindari space horizontal yang berlebihan */
    }

    .laundry-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    }

    .laundry-card {
    background-color: #ADC9F3;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    padding: 1rem;
    text-align: center;
    }

    .laundry-logo {
        margin: 0 auto;
        width: 100px; /* Atur ukuran logo agar proporsional */
        height: auto; /* Pastikan proporsi gambar tetap terjaga */
    }

    .container {
        padding: 1rem; /* Padding fleksibel */
        width: 100%; /* Pastikan kontainer menggunakan lebar penuh */
        box-sizing: border-box; /* Termasuk padding dalam lebar */
    }

    .nav-section {
        display: none; /* Sembunyikan navigasi jika diperlukan */
    }

    .signin-box {
        width: 100%; /* Isi layar penuh */
        max-width: 400px; /* Tetapkan lebar maksimum */
        margin: 0 auto; /* Pusatkan elemen */
        padding: 1rem; /* Tambahkan padding untuk jarak dalam */
        box-sizing: border-box; /* Hindari overflow */
    }
    .info-section {
        padding: 3rem 0; /* Padding lebih kecil di layar kecil */
    }
}
    @media (max-width: 480px) {
    .laundry-grid {
    grid-template-columns: 1fr; /* Hanya 1 kolom untuk layar kecil */
    }
    .laundry-logo {
        margin: 0 auto;
        width: 100px; /* Atur ukuran logo agar proporsional */
        height: auto; /* Pastikan proporsi gambar tetap terjaga */
    }
}


</style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo">
            </div>
            <div class="nav-links">
                <a href="#home" class="nav-link" data-section="home">Home</a>
                <a href="#about" class="nav-link" data-section="about">About</a>
                <a href="#informasi" class="nav-link" data-section="informasi">Informasi</a>
                <a href="#saran" class="nav-link" data-section="saran">Saran</a>
                <a href="{{ route('login') }}" class="nav-link">Akun</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-image-container">
                <div class="hero-circle"></div>
                <img src="{{ asset('images/washing machine.png') }}" alt="Washing Machine" class="hero-image">
            </div>
            <div class="hero-content">
                <h1 class="hero-title">Hi Laundries!</h1>
                <p class="hero-text">Cleany Malang hadir menyediakan berbagai rekomendasi layanan laundry terbaik di Kota Malang untuk kebutuhan cuci bersih Anda!</p>
                <button id="swipe-up-button" class="swipe-button">Swipe Up! ↑</button>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
          <div class="about-header">
            <h2>About</h2>
            <h2><span>Cleany Malang</span></h2>
          </div>
          <div class="about-content">
            <div class="about-description">
              <h3>Apa Itu Cleany Malang?</h3>
              <p>
                Cleany Malang merupakan platform yang hadir untuk memudahkan Anda
                menemukan laundry terbaik di Kota Malang. Temukan berbagai pilihan laundry
                terdekat, paket layanan, ulasan pelanggan, dan panduan harga dalam satu
                platform. Nikmati kemudahan mencari laundry terpercaya hanya di Cleany Malang!
              </p>
            </div>
            <div class="about-image">
              <img src="images/young.png" alt="Ilustrasi Cleany Malang" />
            </div>
          </div>
          <h3>Mengapa Cleany Malang?</h3>
          <div class="about-features">
            <button class="feature">
              <i class="icon-info"></i>
              <p>Informasi Lengkap</p>
            </button>
            <button class="feature">
              <i class="icon-star"></i>
              <p>Rating Terpercaya</p>
            </button>
            <button class="feature">
              <i class="icon-easy"></i>
              <p>Akses Mudah</p>
            </button>
          </div>          
        </div>
      </section>      

    <!-- Informasi Section -->
    <section id="informasi" class="info-section">
        <div class="container">
            <h2 class="section-title">Informasi Laundry</h2>
            
            <div class="laundry-grid">
                <!-- Laundry Card 1 -->
                <div class="laundry-card">
                    <img src="{{ asset('images/le choix.png') }}" alt="Le Choix" class="laundry-logo">
                    <h3 class="laundry-title">Le Choix Laundry</h3>
                    <p class="laundry-description">Le Choix Laundry, laundry premium di Malang, menawarkan layanan berkualitas dengan mesin canggih dan tenaga profesional.</p>
                    <div class="rating">★★★★★</div>
                    <a href="{{ route('laundry.detail', ['id' => 'le-choix']) }}" class="more-link">More →</a>
                </div>

                <!-- Laundry Card 2 -->
                <div class="laundry-card">
                    <img src="{{ asset('images/atlantic-prime.png') }}" alt="Atlantic Prime" class="laundry-logo">
                    <h3 class="laundry-title">Atlantic Prime</h3>
                    <p class="laundry-description">Pada laundry Malang terbaik satu ini, setiap barang yang akan kamu laundry, akan dicuci menggunakan mesin cuci yang modern.</p>
                    <div class="rating">★★★★★</div>
                    <a href="{{ route('laundry.detail', ['id' => 'atlantic-prime']) }}" class="more-link">More →</a>
                </div>

                <!-- Laundry Card 3 -->
                <div class="laundry-card">
                    <img src="{{ asset('images/wiranas.png') }}" alt="Wiranas" class="laundry-logo">
                    <h3 class="laundry-title">Wiranas Laundry & Dry Cleaning</h3>
                    <p class="laundry-description">Tempat laundry Malang yang juga akan memberikan pelayanan terbaik walaupun harganya murah, adalah Wiranas Laundry & Dry Cleaning.</p>
                    <div class="rating">★★★★★</div>
                    <a href="{{ route('laundry.detail', ['id' => 'wiranas']) }}" class="more-link">More →</a>
                </div>

                <!-- Laundry Card 4 -->
                <div class="laundry-card">
                    <img src="{{ asset('images/oxy.png') }}" alt="Oxy Laundry" class="laundry-logo">
                    <h3 class="laundry-title">Oxy CoinLaundry</h3>
                    <p class="laundry-description">Tempat laundry bersih, harganya standar, hasil pengerjaannya cepat. Bahkan kamu bisa mengambil hasil cucian 1 hari setelah datang ke tempat laundry.</p>
                    <div class="rating">★★★★★</div>
                    <a href="{{ route('laundry.detail', ['id' => 'oxy']) }}" class="more-link">More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Saran Section -->
    <section id="saran" class="form-section">
        <div class="container">
            <h2 class="section-title">Saran</h2>
            
            <div class="form-container">
                <form action="https://formspree.io/f/mldelwlg" method="POST">
                    @csrf
                    <div>
                        <input type="email" name="email" placeholder="Your E-Mail" class="form-input">
                    </div>
                    <div>
                        <textarea name="message" placeholder="Your Message" class="form-input"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="submit-button">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="footer-text">Made By Team of Cleany Malang ✿</p>
            <p class="footer-credits">
                Amylia Kusuma | Shavira Diva | Haris Eka | Frizqy Zistin
            </p>
            <p class="footer-contact">
                Need Collaboration? <a href="mailto:amyliaazizah@student.ub.ac.id" class="footer-link">Contact Us!</a>
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.getElementById('swipe-up-button').addEventListener('click', function() {
            document.getElementById('about').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>