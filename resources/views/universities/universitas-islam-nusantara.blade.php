<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Islam Nusantara – Informasi Kampus</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('css/Kampus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wcag.css') }}">
</head>
<body>
    <div id="zoomWrapper">
<!-- ================= HEADER ================= -->
   @include('headerKampus') 
    <a href="#main-content" class="skip-link">Lewati ke Konten</a>
    
     @include('panel-aksesibilitas')
<header class="hero-section">
   <div class="hero">
        <h1>UNINUS</h1>
        <h2>Universitas ISLAM NUSANTARA</h2>
        <img src="{{ asset('assets/img/gedungislamnusantara.webp') }}" alt="Universitas Islam Nusantara">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Islam Nusantara (Uninus) pada saat kelahirannya bernama Universitas Nahdlatul Ulama (UNNU) yang didirikan di kota Bandung pada tanggal 30 November 1959.Pada tanggal 15 April 1969 sesuai dengan dinamika politik saat itu, serta bergabungnya Fakultas Hukum Universitas Ibnu Khaldun, Akademi Pendidikan Agama Islam, Pendidikan Tinggi Dakwah Islam, dan Perguruan Tinggi Muhammadiyah di Bandung, maka, nama Universitas Nahdlatul Ulama (UNNU) diubah menjadi Universitas Islam Nusantara. Uninus memiliki 8 fakultas, 26 program studi dan 260 dosen.
        </p>
    </div>

    <!-- Kolom 2 -->
    <div>
        <h3>Informasi Dasar</h3>

        <div class="info-item">
            <b>Type</b>
            Private
        </div>

        <div class="info-item">
            <b>Regions</b>
            Indonesia
        </div>

        <div class="info-item">
            <b>Website</b>
            https://uninus.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Soekarno Hatta No. 530, Sekejati, Kec. Buah Batu, Kota Bandung, Jawa Barat 40286
        </div>

        <div class="info-item">
            <b>Email</b>
           kominfo@uninus.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            08112311530
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/uninusbandung/?hl=en target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/channel/UCzQUNFYnaPz6ZaxNP_mMjJw target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UNINUS.webp') }}" alt="Logo UNINUS" class="logo-ui">
    </div>

</section>

<!-- ================= SERVICES ================= -->
<section class="service-section">
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-house"></i></div>
            <h3>Akomodasi Akademik</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Akomodasi Akademik?
        </div>
        <div class="service-desc">
            Tidak ada informasi spesifik terkait Akomodasi Akademik di Uninus.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-location-pin"></i></div>
            <h3>Layanan Kesehatan Mental</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Layanan Kesehatan Mental?
        </div>
        <div class="service-desc">
            Tidak ada informasi spesifik terkait layanan kesehatan mental di Uninus.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-wheelchair"></i></div>
            <h3>Aksesibilitas Kampus</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Aksesibilitas Kampus?
        </div>
        <div class="service-desc">
            Tidak ada informasi spesifik terkait layanan Kampus Aksesibel di Uninus.

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Dukungan Sosial?
        </div>
        <div class="service-desc">
            Tidak ada informasi spesifik terkait layanan Dukungan Sosial di Uninus.
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-graduation-cap"></i></div>
            <h3>Jalur Admisi & Beasiswa untuk Disabilitas</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Jalur Admisi & Beasiswa untuk Disabilitas?
        </div>
        <div class="service-desc">
           Tidak ada informasi spesifik terkait Jalur Admisi dan Beasiswa khusus Disabilitas.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-briefcase"></i></div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">
        Apakah universitas ini memiliki Dukungan Karir?

        </div>
        <div class="service-desc">
            Tidak ada informasi spesifik terkait dukungan karir di Uninus.
        </div>
    </div>

     
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa-solid fa-comments"></i></div>
            </div>
            <h3>Unit/Pusat Layanan Disabilitas</h3>
        </div>
        <div class="service-question">
       Apakah universitas ini memiliki Unit/Pusat Layanan Disabilitas? 
        </div>
        <div class="service-desc">
        Tidak ada penjelasan dalam website Uninus. Tetapi, universitas ini masuk ke dalam 10 universitas terbanyak yang menerima mahasiswa disabilitas. Salah satunya dibuktikan dengan Uninus yang menerima 10 mahasiswa penyandang disabilitas sensorik di program studi Pendidikan Luar Biasa, serta terdapat mahasiswa disabilitas lainnya yang tersebar di berbagai program studi Uninus.
    </div>
</div>
</section>
</main>
</div>
<!-- ================= FOOTER =================-->
@extends('footer')
<div id="magnifierLens"></div>
<script src="{{ asset('js/accessibility.js') }}"></script>
</body>
</html>