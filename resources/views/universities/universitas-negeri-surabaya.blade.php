<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Negeri Surabaya – Informasi Kampus</title>

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
        <h1>UNESA</h1>
        <h2>Universitas Negeri Surabaya</h2>
        <img src="{{ asset('assets/img/gedungnegerisurabaya.webp') }}" alt="Universitas Lancang Kuning">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
           Universitas Negeri Surabaya (UNESA) adalah universitas negeri yang berlokasi di Surabaya, Indonesia. UNESA menawarkan berbagai program di 11 fakultas, termasuk program sarjana, vokasi, dan pascasarjana. Universitas ini telah mendapatkan pengakuan nasional dan internasional, dengan beberapa program studi yang menerima akreditasi internasional. UNESA memiliki akreditasi “A” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), yang mencerminkan komitmennya terhadap standar akademik yang tinggi dan kualitas pendidikan. Selain itu, beberapa program studi, terutama di bidang sains dan matematika, telah memperoleh akreditasi internasional melalui ASIIN, semakin meningkatkan reputasi globalnya. Dengan tingkat penerimaan yang sangat selektif, berkisar antara 10-19%, UNESA menjadi pilihan yang kompetitif bagi calon mahasiswa.
        </p>
    </div>

    <!-- Kolom 2 -->
    <div>
        <h3>Informasi Dasar</h3>

        <div class="info-item">
            <b>Type</b>
            Public
        </div>

        <div class="info-item">
            <b>Regions</b>
            Indonesia
        </div>

        <div class="info-item">
            <b>Website</b>
            https://www.unesa.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Lidah Wetan, Surabaya, 60213
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@unesa.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            +6231-99421834
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/official_unesa/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.tiktok.com/@unesaid target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href=https://www.youtube.com/@unesaofficial target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://x.com/official_unesa target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://web.facebook.com/universitasnegerisurabaya?_rdc=1&_rdr# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UNESA.webp') }}" alt="Logo UI" class="logo-ui">
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
            Tidak tersedia informasi mengenai akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas di Universitas Negeri Surabaya (UNESA).
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-location-pin"></i></div>
            <h3>Layanan Kesehatan Mental</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Layanan Kesehatan Mental?
        </div>
        <div class="service-desc">
            Universitas Negeri Surabaya (UNESA) menyediakan layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas, di bawah naungan Pusat Studi dan Layanan Penyandang Disabilitas (PSLPD). Selain itu, mahasiswa penyandang disabilitas juga dapat mengakses layanan konseling secara online melalui Konseling Mahasiswa Difabel (Madif).
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-wheelchair"></i></div>
            <h3>Aksesibilitas Kampus</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Aksesibilitas Kampus?
        </div>
        <div class="service-desc">
           Universitas Negeri Surabaya (UNESA) menyediakan berbagai fasilitas aksesibilitas, antara lain ramp di setiap gedung, scan reader, JAWS, komputer, serta peralatan khusus lainnya. Selain itu, UNESA juga menyediakan tenaga ahli untuk membantu mahasiswa penyandang disabilitas.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
<div class="service-icon"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Dukungan Sosial?
        </div>
        <div class="service-desc">
           Universitas Negeri Surabaya (UNESA) menyediakan relawan untuk membantu mahasiswa penyandang disabilitas dalam beraktivitas di lingkungan kampus. Meskipun demikian, hingga saat ini, relawan masih didominasi oleh mahasiswa dari Fakultas Ilmu Pendidikan (FIP).
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
            <h3>Jalur Admisi & Beasiswa untuk Disabilitas</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Jalur Admisi & Beasiswa untuk Disabilitas?
        </div>
        <div class="service-desc">
           Universitas Negeri Surabaya (UNESA) memiliki seleksi khusus yang diperuntukkan bagi calon mahasiswa penyandang disabilitas melalui Seleksi Penerimaan Mahasiswa Baru (SPMB) Disabilitas. Calon mahasiswa penyandang disabilitas akan mengikuti proses seleksi tahap pertama yang dimulai dengan tes tulis, baik secara online maupun offline, kemudian dilanjutkan dengan tes wawancara atau uji keterampilan. Jenis seleksi yang dilakukan akan disesuaikan dengan jenis disabilitas calon mahasiswa.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-briefcase"></i></div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">
        Apakah universitas ini memiliki Dukungan Karir?

        </div>
        <div class="service-desc">
            Universitas Negeri Surabaya (UNESA) secara berkala menyalurkan mahasiswa penyandang disabilitas sebagai tenaga kerja profesional kepada perusahaan-perusahaan mitra bursa kerja PSLPD. Kegiatan ini merupakan bentuk nyata dari program advokasi disabilitas yang dijalankan oleh PSLPD.
        </div>
    </div>

     
    <div class="service-item">
        <div class="service-title">
        <div class="service-icon"><i class="fa-solid fa-comments"></i></div>
            <h3>Unit/Pusat Layanan Disabilitas</h3>
        </div>
        <div class="service-question">
       Apakah universitas ini memiliki Unit/Pusat Layanan Disabilitas? 
        </div>
        <div class="service-desc">
       Untuk mengembangkan lingkungan kampus yang inklusif, Universitas Negeri Surabaya (UNESA) membentuk Pusat Studi dan Layanan Penyandang Disabilitas (PSLPD) pada tahun 2013. PSLPD UNESA menyediakan berbagai layanan, antara lain layanan akademik, layanan disabilitas, advokasi, dan penyediaan informasi. Selain menyediakan fasilitas bagi mahasiswa penyandang disabilitas, UNESA juga membentuk Unit Layanan Anak Berkebutuhan Khusus (ULABK) yang berada di bawah Fakultas Ilmu Pendidikan (FIP). 
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