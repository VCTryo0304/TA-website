<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UNIVERSITAS NEGERI YOGYAKARTA – Informasi Kampus</title>

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
        <h1>UNY</h1>
        <h2>Universitas Negeri Yogyakarta</h2>
        <img src="{{ asset('assets/img/gedungUNY.webp') }}" alt="Universitas Negeri Yogyakarta">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Negeri Yogyakarta (UNY) adalah perguruan tinggi negeri yang berlokasi di Yogyakarta, Indonesia. Universitas ini telah meraih akreditasi “A” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), yang mengukuhkan keunggulannya dalam pendidikan dan penelitian. UNY dikenal dengan program-program unggulannya di bidang pendidikan, seni, olahraga, dan sains. Dengan tingkat penerimaan yang kompetitif, sekitar 20%, UNY menunjukkan proses seleksi mahasiswa yang ketat.
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
            https://www.uny.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          Jl. Colombo No.1 Karangmalang Yogyakarta 55281
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@uny.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            0274-586168
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=hhttps://www.instagram.com/unyofficial/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.tiktok.com/@unyofficial target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href=https://www.youtube.com/c/UNYOfficial target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://x.com/unyofficial/ target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://web.facebook.com/unyofficial/?_rdc=1&_rdr# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/img/UNY.webp') }}" alt="Logo UNY" class="logo-uim">
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
            Tidak tersedia informasi mengenai akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY).
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
           Tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, UNY memiliki Unit Pelaksanaan Teknis Layanan Bimbingan Konseling (UPTLBK) bagi mahasiswa secara umum.
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
            Universitas Negeri Yogyakarta (UNY) menyediakan berbagai fasilitas aksesibilitas, antara lain ramp untuk pengguna kursi roda dan lift.
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
           Tidak tersedia informasi mengenai layanan dukungan sosial di Universitas Negeri Yogyakarta (UNY).
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
          Tidak tersedia informasi mengenai jalur penerimaan yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, berdasarkan informasi yang ada, UNY menyediakan beasiswa khusus bagi mahasiswa penyandang disabilitas melalui program Afirmasi Pendidikan Tinggi (ADik) dan ADik Papua. Selain itu, UNY juga menawarkan berbagai beasiswa bagi mahasiswa secara umum, seperti Kartu Indonesia Pintar (KIP) Kuliah, beasiswa Peningkatan Prestasi Akademik (PPA), beasiswa Bantuan Belajar Mahasiswa (BBM), beasiswa Unggulan Kemendikbud, dan beasiswa lainnya.
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
        Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, UNY memiliki Subdirektorat Karier dan Alumni bagi mahasiswa secara umum.
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
            Universitas Negeri Yogyakarta diketahui memiliki Pusat Studi Layanan Disabilitas. Namun, tidak tersedia informasi lebih lanjut mengenai layanan yang disediakan.
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
