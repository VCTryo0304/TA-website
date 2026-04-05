<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas AIRLANGGA – Informasi Kampus</title>

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
<!-- ================= HEADER ================= -->
   @include('headerKampus') 
   <a href="#main-content" class="skip-link">Lewati ke Konten</a>

    @include('panel-aksesibilitas')
<header class="hero-section">
   <div class="hero">
        <h1>UM</h1>
        <h2>UNIVERSITAS NEGERI MALANG</h2>
        <img src="{{ asset('assets/img/gedungnegerimalang.webp') }}" alt="Universitas Negeri Malang">
    </div>
</header>
    <main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Negeri Malang (UM) adalah sebuah perguruan tinggi negeri yang terletak di Malang, Indonesia. Universitas ini dikenal dengan fokusnya pada ilmu pendidikan dan berbagai bidang lainnya, menawarkan lebih dari 140 program studi di 10 fakultas. UM telah menerima akreditasi “A” dari BAN-PT, yang menunjukkan keunggulannya dalam pendidikan dan penelitian. Sebagai institusi negeri, UM dikenal sebagai pencetak tenaga profesional yang berkualitas baik di sektor pendidikan maupun non-kependidikan. UM memiliki tingkat penerimaan yang kompetitif sekitar 10%, menjadikannya institusi yang selektif, terutama untuk program-program populer seperti Psikologi dan Pendidikan Guru.
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
            https://um.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Semarang 5 Malang 65145, Jawa Timur
        </div>

        <div class="info-item">
            <b>Email</b>
          humas@um.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            +62 341-551312
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/universitasnegerimalang/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                 <a href=https://www.tiktok.com/@universitasnegerimalang target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href=https://x.com/UM_1954 target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://www.youtube.com/@UM-UniversitasNegeriMalang target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://web.facebook.com/Informasi.UM?_rdc=1&_rdr# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UM.webp') }}" alt="Logo UI" class="logo-ui">
    </div>

</section>

<!-- ================= SERVICES ================= -->
<section class="service-section">
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-house"></i></div>
            <h3>Akomodasi Akademik</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Akomodasi Akademik?
        </div>
        <div class="service-desc">
            Mahasiswa penyandang disabilitas akan mendapatkan modul pembelajaran selama berkuliah di Universitas Negeri Malang (UM). Selain itu, orang tua dan dosen juga akan menerima pedoman pendampingan untuk mendukung proses pembelajaran mahasiswa disabilitas.
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
            Tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Malang (UM). Namun, UM memiliki Pusat Bimbingan Konseling, Karier, dan Kewirausahaan (PBK3) bagi mahasiswa secara umum.
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
           Universitas Negeri Malang (UM) menyediakan berbagai fasilitas aksesibilitas, antara lain ramp untuk pengguna kursi roda, lift dengan huruf braille, serta juru bahasa isyarat (JBI).
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
            Unair juga menyediakan relawan pendamping mahasiswa disabilitas yang dibuka untuk seluruh mahasiswa di lingkungan Unair. Tugas bagi relawan pendamping ini antara lain adalah mendampingi mahasiswa disabilitas selama perkuliahan, membantu dalam mengerjakan tugas kuliah, mengikuti PKK MABA, serta mengurus administrasi perkuliahan, termasuk saat mendampingi pertemuan dengan dosen untuk bimbingan. Juga, memberikan informasi dan mengoreksi tugas perkuliahan atau OSPEK mahasiswa disabilitas dalam hal redaksional/teknis.
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
           Tidak tersedia informasi mengenai jalur penerimaan yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Malang (UM). Namun, berdasarkan informasi yang ada, UM menyediakan beasiswa khusus bagi mahasiswa penyandang disabilitas melalui program Afirmasi Pendidikan Tinggi (ADik). Selain itu, UM juga menawarkan berbagai beasiswa bagi mahasiswa secara umum, seperti Bidik Misi, Peningkatan Prestasi Akademik (PPA), Bantuan Belajar Mahasiswa (BBM), beasiswa Yayasan Toyota Astra, beasiswa Gudang Garam, beasiswa Supersemar, dan beasiswa Daya Adicipta Mustika.
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
            Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Malang (UM). Namun, UM memiliki Pusat Bimbingan Konseling, Karier, dan Kewirausahaan (PBK3) bagi mahasiswa secara umum.
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
        Universitas Negeri Malang (UM) memiliki Pusat Layanan Penyandang Berkebutuhan Khusus (PLPBK). PLPBK menyediakan tiga jenis layanan, yaitu program transisi bagi mahasiswa penyandang disabilitas di jenjang akhir pendidikan, konsultasi dan pelatihan penanganan gangguan membaca kronik, serta konsultasi dan pelatihan penanganan gangguan perilaku.
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