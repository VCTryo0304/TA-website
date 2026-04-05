<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UNIVERSITAS ANDALAS – Informasi Kampus</title>

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
    <div class="hero">
        <h1>Unand</h1>
        <h2>Universitas Andalas</h2>
        <img src= "{{ asset('assets/img/gedungUNAND.webp') }}" alt="Universitas Andalas">
    </div>
</header>

<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Andalas merupakan perguruan tinggi negeri (PTN) tertua di luar pulau jawa yang terletak di Kota Padang, Sumatera Barat. Universitas Andalas didirikan pada 23 Desember 1955 oleh Wakil Presiden Mohammad Hatta. Universitas Andalas meraih akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun 2023, meraih peringkat pertama sebagai universitas terbaik di Padang serta berada di peringkat 19 di peringkat nasional. Universitas Andalas memiliki 15 fakultas dengan 44 program studisarjana (S1), 41 program studi magister (S2), 13 program studi doktor (S3), 12 program pendidikan dokter spesialis (PPDS), 5 program profesi, serta 4 program studi diploma (D3).
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
            https://www.unand.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          Jl. Dr. Mohammad Hatta Limau Manis, Pauh, Kota Padang, Sumatera Barat.
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@unand.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            0751-71181-318
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href="https://www.instagram.com/unandofficial/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="tiktok.com/@unandofficial/" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="https://x.com/unandofficial" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.youtube.com/@UNANDOfficial56" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://web.facebook.com/unandofficial/?_rdc=1&_rdr#" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UNAND.webp') }}" alt="Logo Unand" class="logo-unand">
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
            Universitas Andalas menyediakan volunteer sebagai pendamping mahasiswa disabilitas yang akan mendampingi saat mengerjakan tugas kuliah, PKK MABA, dan mengurus administrasi perkuliahan, mendampingi ketika bertemu dosen untuk bimbingan, memberikan informasi serta mengoreksi tugas (perkuliahan/OSPEK) mahasiswa difabel.
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
           Universitas Andalas menyediakan layanan pendampingan dan konseling bagi mahasiswa disabilitas yang membutuhkan.
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
            Tidak ada informasi spesifik mengenai aksesibilitas kampus bagi mahasiswa disabilitas di Universitas Andalas.
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
           Terdapat jalur admisi “SIMA Disabilitas” bagi calon peserta yang disabilitas. Tidak ada informasi mengenai beasiswa untuk disabilitas di Universitas Andalas
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
          Terdapat jalur admisi “SIMA Disabilitas” bagi calon peserta yang disabilitas. Tidak ada informasi mengenai beasiswa untuk disabilitas di Universitas Andalas
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
        Tidak ada informasi spesifik mengenai Dukungan karir di Universitas Andalas.
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
           Universitas Andalasmemiliki Unit LayananDisabilitas yang dapatdiaksesmelalui https://uld.unand.ac.id/
    </div>
</div>
</section>
</main>
</div>
 <!-- ================= FOOTER ================= -->
@include('footer')
<div id="magnifierLens"></div>
<script src="{{ asset('js/accessibility.js') }}"></script>
</body>
</html>
