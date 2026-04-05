<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Indonesia – Informasi Kampus</title>

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
        <h1>UNIZAR</h1>
        <h2>Universitas Islam Al-Azhar Mataram</h2>
        <img src="{{ asset('assets/img/gedungislamalazhar.webp') }}" alt="Universitas Islam Al-Azhar Mataram">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            MemilikiSertifikatAKreditasi“BAIK” UNIZAR 2021-2026. Universitas Islam Al-Azhar Mataram (Unizar) menawarkan beberapa pilihan program pendidikan yang dapat dipilih sesuai minat calon mahasiswa yaitu Agribisnis, Agroteknologi, Akuntansi, Ekonomi Pembangunan, Biologi, Ilmu Hukum, Pendidikan Dokter, Teknik Sipil, IlmuKomputer dan memiliki Program Profesi Dokter.
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
            https://unizar.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          Jl. Unizar No.20, Turida, Kec. Sandubaya, Kota Mataram, Nusa Tenggara Barat
        </div>

        <div class="info-item">
            <b>Email</b>
           mail@unizar.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (0370) 7562077 | (0370) 7562077
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href= https://www.instagram.com/officialunizarmataram/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                
            </div>
        </div>

        <img src="{{ asset('logo-univ/islamalazhar.webp') }}" alt="Logo UI" class="logo-ui">
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
            Tidak ada informasi mengenai kampus aksesibel yang tersedia terkait Unizar.
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
            Tidak ada informasi mengenai Layanan Kesehatan Mental yang tersedia terkait Unizar.
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
            Tidak ada informasi mengenai kampus aksesibel yang tersedia terkait Unizar.
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
           Tidak ada info perihal dukungan sosial yang disediakan oleh Unizar, tetapi Unizar pernah melakukan pelatihan manajemen usaha, pembiayaan usaha dan kesehatan mental di masa pandemi untuk perempuan penyandang disabilitas.
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
           Belum ada penjelasan secara eksplisit mengenai jalur admisi dan beasiswa khusus untuk mahasiswa disabilitas. Namun, Unizar memiliki program Beasiswa Program Indonesia Pintar (PIP). Beasiswa PIP merupakan bantuan berupa uang tunai yang diberikan langsung oleh pemerintah melalui Kementerian Pendidikan dan Kebudayaan kepada semua peserta didik yang berasal dari keluarga kurang mampu dan mengalami kesulitan untuk membayar biaya pendidikan. Calon mahasiswa yang memenuhi kriteria akan diusulkan oleh Unizar sebagai calon penerima beasiswa.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">&#128188;</div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">
        Apakah universitas ini memiliki Dukungan Karir?

        </div>
        <div class="service-desc">
            Unizar memiliki Inkubator Bisnis Teknologi. Sebuah program inkubasi bagi UMKM atau start up bagi mahasiswa dan alumni untuk mengembangkan usahanya melalui pembinaan manajemen, kompetensi teknis, dan fasilitas ruang usaha sehingga lebih mandiri dan menjadi wirausaha yang berkelanjutan.
        </div>
    </div>

     
    <div class="service-item">
        <div class="service-title">
             <div class="service-icon"><i class="fa-solid fa-comments"></i></div>
            </div>
            <h3>Unit/Pusat Layanan Disabilitas</h3>
        </div>
        <div class="service-question">
       Apakah universitas ini memiliki Unit/Pusat Layanan Disabilitas? 
        </div>
        <div class="service-desc">
       Tidak ada penjelasan mengenai Unit LayananDisabilitas di dalam website UNIZAR. Namunmemiliki “Unizar Learning Centre” yang terdiridari Disability support, TOEFLITP, Study resources, Succes Story yang terdiridari Alumni Unizar.
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
