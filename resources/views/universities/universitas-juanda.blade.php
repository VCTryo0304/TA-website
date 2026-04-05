<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas DJUANDA – Informasi Kampus</title>

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
        <h1>UNIDA</h1>
        <h2>Universitas DJUANDA</h2>
        <img src="{{ asset('assets/img/gedung-juanda.webp') }}" alt="Universitas Indonesia">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Djuanda (Unida) didirikan pada tanggal 21 Maret 1987 oleh Yayasan Pusat Studi Pengembangan Islam Indonesia, yang diprakarsai oleh Letnan Jendral TNI Purn. H. Alamsjah Ratu Perwiranegara (Alm). Berlokasi di Ciawi, Kabupaten Bogor, Jawa Barat, Unida kini menawarkan Program Sarjana (S1) dengan 7 Fakultas dan 17 Program Studi, Program Pascasarjana dengan 4 Program Magister, serta 1 Sekolah Vokasi jenjang Sarjana Terapan (D4). Seluruh program studinya telah terakreditasi dengan predikat “Baik Sekali” dan “Unggul,” serta Unida terus mengembangkan program studi baru untuk jenjang S1, S2, dan S3.   
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
            https://unida.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Tol Ciawi No.1 Bogor 16720 Jawa Barat, Indonesia
        </div>

        <div class="info-item">
            <b>Email</b>
          humas@unida.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (0251) 8240773
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/unida_bogor/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://web.facebook.com/people/Universitas-Djuanda-Bogor/100057254327901/?locale=da_DK# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href=https://x.com/PMBUnidaBogor target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/logo-juanda.webp') }}" alt="Logo UI" class="logo-ui">
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
            Tidak ada informasi terkait fasilitas akademik aksesibeldi kampus Unida.
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
            Tidak ada informasi terkait layanan kesehatan mental spesifik untuk mahasiswa disabilitas. Namun, Unida memiliki layanan konseling yang dapat diakses oleh seluruh mahasiswa Unida.
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
            Tidak ada informasi terkait fasilitas aksesibilitas di kampus Unida.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Dukungan Sosial?
        </div>
        <div class="service-desc">
            Tidak ada informasi terkait layanan dukungan sosial di kampus Unida.
        </div>
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
           Tidak tersedia informasi tentang beasiswa spesifik untuk mahasiswa disabilitas. Namun, dari informasi yang tersedia, Unida menawarkan enam skema beasiswa yang ditawarkan untuk mahasiswa secara umum, di antaranya adalah Bantuan Pendidikan Bidikmisi, Beasiswa Olimpiade Sains Internasional (OSI), Beasiswa Peningkatan Prestasi Akademik (PPA), Beasiswa Peningkatan Prestasi Ekstrakurikuler (PPE), danBeasiswa Pendidikan Kader Dakwah (PKD).
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
            Tidak ada informasi terkait layanan dukungan karir di Unida.
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
        
        Tidak tersedia informasi terkait ketersediaan Unit Layanan Disabilitas di Unida.
    </div>
</div>
</section>
</main>
</div>
<!-- ================= FOOTER =================-->
@include('footer')
<div id="magnifierLens"></div>
<script src="{{ asset('js/accessibility.js') }}"></script>
</body>
</html>