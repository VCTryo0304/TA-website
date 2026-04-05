<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkom University – Informasi Kampus</title>

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
        <h1>Tel-U</h1>
        <h2>Telkom University</h2>
        <img src="{{ asset('assets/img/gedung_telkom_university.jpg') }}" alt="Telkom University">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            elkom University (Tel-U) adalah salah Penguruan Tinggi Swasta (PTS) unggulan di Indonesia yang berlokasi di Bandung,
             didirikan 14 Agustus 2013, hasil gabungan empat institusi di bawah Yayasan Pendidikan Telkom (YPT), 
             fokus pada TIK, Manajemen, dan Industri Kreatif, 
             serta dikenal sebagai PTS terbaik dengan akreditasi Unggul dan prestasi inovasi tinggi. Tel-U menawarkan berbagai program (D3, S1, S2, S3, PJJ, Internasional)\
              dengan jenjang pendidikan lengkap, program studi beragam, dan fasilitas riset & kewirausahaan yang kuat. 
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
             https://telkomuniversity.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          Gedung Bangkit Telkom University, Jl. Telekomunikasi,Terusan Buah Batu, Bandung 40257
        </div>

        <div class="info-item">
            <b>Email</b>
           info@telkomuniversity.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (022) 7566456
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/telkomuniversity/?hl=en target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/@TelkomUniversityOfficial target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://x.com/telfess target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/logo_telkom.jpg') }}" alt="Logo UI" class="logo-ui">
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
             Tidak ada informasi terkait fasilitas akademik aksesibel di kampus telkomuniversity.
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
             Tidak ada informasi terkait layanan kesehatan mental di kampus telkomuniversity.
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
           telkomuniversity menyediakan fasilitas aksesibilitas yang bervariasi di setiap fakultas.
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
    Telkom University menyediakan relawan untuk membantu mahasiswa penyandang disabilitas dalam beraktivitas di lingkungan kampus.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
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
           Telkom University menyediakan berbagai jenis beasiswa yang ditujukan khusus bagi mahasiswa penyandang disabilitas, salah satunya adalah beasiswa program Afirmasi Pendidikan Tinggi (ADik). Beasiswa ADik disediakan oleh Pusat Layanan Pembiayaan Pendidikan (Puslapdik) dan membebaskan mahasiswa penyandang disabilitas dari biaya kuliah. Beasiswa ini juga memberikan bantuan biaya hidup setiap bulan serta biaya transportasi dari daerah asal ke lokasi perguruan tinggi.  Telkom University memberikan beasiswa Bayan Peduli, yang mencakup pembayaran uang kuliah tunggal (UKT), biaya hidup, dan biaya lainnya. Selain beasiswa ADik, Telkom University juga menerima calon mahasiswa penyandang disabilitas melalui jalur Kartu Indonesia Pintar (KIP) Kuliah.
        </div>
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
            Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di  Telkom University. Namun, berdasarkan informasi yang ada, Telkom University menyediakan layanan dukungan karier yang dapat diakses oleh seluruh mahasiswa.
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
        Telkom University menyediakan fasilitas bagi mahasiswa penyandang disabilitas baik berupa dukungan fasilitas yang disediakan ataupun berupa materi pembelajaran yang dapat membantu penyandang disabilitas.
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

