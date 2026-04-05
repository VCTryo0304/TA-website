<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Pendidikan Indonesia – Informasi Kampus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        <h1>UPI</h1>
        <h2>Universitas Pendidikan Indonesia</h2>
        <img src="{{ asset('assets/img/gedungupi.webp') }}" alt="Universitas Pendidikan Indonesia">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">
    <div class="campus-col">
        <h3>Tentang Kampus</h3>
        <p>
           Universitas Pendidikan Indonesia (UPI) adalah universitas negeri yang berlokasi di Bandung, Indonesia, yang dikenal dengan fokusnya pada pendidikan guru dan disiplin ilmu lainnya. UPI memiliki akreditasi “A” dari BAN-PT, yang menunjukkan standar tinggi dalam pendidikan dan penelitian. UPI menawarkan berbagai program sarjana dan pascasarjana di berbagai fakultas. UPI juga merupakan dikenal sebagai universitas yang inklusif bagi penyandang disabilitas.
        </p>
    </div>

    <div class="campus-col">
        <h3>Informasi Dasar</h3>
        <div class="info-item"><b>Type</b> Public</div>
        <div class="info-item"><b>Regions</b> Indonesia</div>
        <div class="info-item"><b>Website</b> <a href="https://www.upi.edu/" target="_blank">https://www.upi.edu/</a></div>
        <div class="info-item"><b>Address</b> Jl. Dr. Setiabudhi No. 229 Bandung 40154, Jawa Barat</div>
        <div class="info-item"><b>Email</b> sekuniv_upi@upi.edu</div>
    </div>

    <div class="campus-col">
        <h3>Kontak</h3>
        <div class="info-item"><b>Telephone</b> 022-2013163</div>
        <div class="social-icons">
            <a href="https://www.instagram.com/upiofficial"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com/upi_official"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://web.facebook.com/upiofficial?_rdc=1&_rdr#"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.tiktok.com/@upi.official"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <img src="{{ asset('logo-univ/upipng.png') }}" alt="Logo UPI" class="logo-ui">
    </div>
</section>

<section class="service-section">
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-house"></i></div>
            <h3>Akomodasi Akademik</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Akomodasi Akademik?</div>
        <div class="service-desc">Tidak ada informasi spesifik terkait akomodasi akademik di UIM Al-Gazali.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-location-pin"></i></div>
            <h3>Layanan Kesehatan Mental</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Layanan Kesehatan Mental?</div>
        <div class="service-desc">Tidak ada informasi spesifik terkait Layanan Kesehatan Mental/Wellness di UIM Al-Gazali.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-wheelchair"></i></div>
            <h3>Aksesibilitas Kampus</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Aksesibilitas Kampus?</div>
        <div class="service-desc">Informasi terkait aksesibilitas fisik bagi penyandang disabilitas belum tersedia secara detail di website resmi.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <<div class="service-icon"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Dukungan Sosial?</div>
        <div class="service-desc">UIM melakukan MoU dengan SOIna Indonesia untuk memandirikan penyandang disabilitas intelektual.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
            <h3>Jalur Admisi & Beasiswa</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Jalur Admisi & Beasiswa Disabilitas?</div>
        <div class="service-desc">Belum ada jalur khusus, namun tersedia beasiswa KIP-Kuliah, Hafidz Qur'an, dan prestasi lainnya.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-briefcase"></i></div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Dukungan Karir?</div>
        <div class="service-desc">Tersedia layanan LAPORKERMA untuk pendataan kerjasama dunia kerja bagi mahasiswa umum.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
             <div class="service-icon"><i class="fa-solid fa-comments"></i></div>
            <h3>Unit Layanan Disabilitas</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Unit Layanan Disabilitas?</div>
        <div class="service-desc">UIM meraih bantuan pembentukan Unit Layanan Disabilitas (ULD) dari Kemdikbudristek tahun 2024.</div>
    </div>
</div>
</section>
</main>
</div>
@include('footer') 
<div id="magnifierLens"></div>
<script src="{{ asset('js/accessibility.js') }}"></script>
</body>
</html>