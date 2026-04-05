<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Islam Makassar – Informasi Kampus</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- font awesome ICON-->
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
        <h1>UIM</h1>
        <h2>Universitas Islam Makassar</h2>
        <img src="{{ asset('assets/img/gedungUIM.webp') }}" alt="Universitas Islam Makassar">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">
    <div class="campus-col">
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Islam Makassar yang disingkat UIM adalah salah satu Perguruan Tinggi Islam Swasta yang dibentuk oleh Yayasan Perguruan Tinggi Al-Gazali Makassar. Universitas Islam Makassar (UIM Al-Gazali) telah mendapatkan Akreditasi Institusi “B” untuk penilaian akreditasi institusi yang dilakukan oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun 2019.

UIM Al-Gazalimenawarkan program pendidikan di jenjangsarjana (S1) yang terdiridari 28 pilihan program studi, program diploma (D3) sebanyak 1 pilihan program studi, program profesisebanyak 2 pilihan program studi, serta program magister (S2) sebanyak 3 program studi. Dari seluruh program studi yang ditawarkan UIM Al-Gazali, 2 Program Studi Akreditasi "Unggul" dan 90% program studi telah terakreditasi "Baik."
        </p>
    </div>

    <div class="campus-col">
        <h3>Informasi Dasar</h3>
        <div class="info-item"><b>Type</b> Private</div>
        <div class="info-item"><b>Regions</b> Indonesia</div>
        <div class="info-item"><b>Website</b> https://uim-makassar.ac.id/ </div>
        <div class="info-item"><b>Address</b> Gedung Rektorat Baru Lantai 1, Kampus Universitas Islam Makassar, Jl. Perintis Kemerdekaan Km.9 No.29</div>
        <div class="info-item"><b>Email</b> uim-makassar@uim-makassar.ac.id</div>
    </div>

    <div class="campus-col">
        <h3>Kontak</h3>
        <div class="info-item"><b>Telephone</b> 082110071633  / (0411) 588167</div>
        <div class="social-icons">
            <a href="https://www.instagram.com/mahasiswa.uimstory/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://web.facebook.com/uim.story?_rdc=1&_rdr#"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UCMVVYpuh3kOAAs_s7CMoxUg"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <img src="{{ asset('logo-univ/logo-UIM.webp') }}" alt="Logo UIM" class="logo-ui">
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
        <div class="service-desc">Tidak ada penjelasan dalam website UIM Al-Gazali secara spesifik. Tetapi, dalam websitenya terdapat artikel yang menjelaskan bahwa UIM melakukan MoU dengan Universitas Patria Artha dan SOIna Indonesia, Memandirikan Penyandang Disabilitas Intelektual.</div>
    </div>                          

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Dukungan Sosial?</div>
        <div class="service-desc">Tidak ada informasi spesifik terkait dukungan sosial di UIM Al-Gazali.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon2"><i class="fa fa-graduation-cap"></i></div>
            <h3>Jalur Admisi & Beasiswa</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Jalur Admisi & Beasiswa Disabilitas?</div>
        <div class="service-desc">Tidak ada penjelasan spesifik mengenai beasiswa khusus disabilitas di UIM Al-Gazali. Namun, terdapat beasiswa Hafidz Qur’an, Beasiswa Rekomendasi Pengurus Cabang Nahdatul Ulama/BANOM, Beasiswa Juara seni/atlet, Beasiswa Kartu Indonesia Pintar (KIP) dan Program Beasiswa Santri Berprestasi.</div>
    </div>
                                    
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-briefcase"></i></div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Dukungan Karir?</div>
        <div class="service-desc">UIM memiliki banyak Kerjasama dengan Sistem Pelaporan Kerjasama (LAPORKERMA) yang merupakan layanan informasi dan pendataan data kerjasama Perguruan Tinggi dengan mitra dalam negeri maupun luar negeri yang dapat bermafaat dalam dukungan karir mahasiswa secara umum. Namun, tidak ada informasi spesifik terkait dukungan karir untuk mahasiswa disabilitas.</div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa-solid fa-comments"></i></div>
            <h3>Unit Layanan Disabilitas</h3>
        </div>
        <div class="service-question">Apakah universitas ini memiliki Unit Layanan Disabilitas?</div>
        <div class="service-desc">niversitas Islam Makassar (UIM) Al-Gazali telah berhasil meraih program bantuan pembentukan dan penguatan Unit LayananDisabilitas (ULD) Tahun 2024 dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemdikbudristek) DirektoratJenderal Pendidikan Tinggi, Riset, dan Teknologi.</div>
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