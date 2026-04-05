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
        <h1>UI</h1>
        <h2>Universitas Indonesia</h2>
        <img src="{{ asset('assets/img/gedungUI.webp') }}" alt="Gedung Universitas Indonesia">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Indonesia (UI) merupakan salah satukampustertua di Indonesia yang telahberdirisejaktahun 1950.
             UI membawahi 14 fakultas yang terdiridariFakultas Hukum, Fakultas Farmasi, Fakultas Ilmu Administrasi, Fakultas Ilmu Pengetahuan Budaya, Fakultas Ekonomi dan Bisnis, Fakultas Ilmu Keperawatan, Fakultas Ilmu Komputer, Fakultas Ilmu Sosial dan Ilmu Politik, Fakultas Kedokteran, Fakultas Kedokteran Gigi, Fakultas Kesehatan Masyarakat, Fakultas MIPA, Fakultas Psikologi, dan Fakultas Teknik. 
             Serta dua sekolah, yakni Sekolah Ilmu Lingkungan dan Sekolah Kajian Stratejik dan Global, dan Program Vokasi.
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
            https://www.ui.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Lingkar, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 1642
        </div>

        <div class="info-item">
            <b>Email</b>
           humas-ui@ui.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (021) 786 7222
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/univ_indonesia target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/channel/UCN7ilwf35POP97PVsweyDsw target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://twitter.com/univ_indonesia target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/logo-UI.webp') }}" alt="Logo UI" class="logo-ui">
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
            Tidak ada informasi terkait fasilitas akademik aksesibel di kampus UI.
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
            Tidak ada informasi terkait layanan kesehatan mental di kampus UI.
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
            Fasilitas yang disediakan oleh UI untuk mahasiswa disabilitas beragam di setiap gedung fakultas. Silahkan menghubungi kontak yang tertera pada website resmi UI untuk memastikan fasilitas yang tersedia sesuai kebutuhan Anda.
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
            Tidak ada informasi terkait dukungan sosial yang disediakan oleh UI. LMD UI memiliki relawan, namun informasi terkait relawan ini sangat minim.
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
           Tidak ada informasi mengenai beasiswa dab jalur admisi khusus yang disediakan bagi UI untuk mahasiswa disabilitas. Namun, mahasiswa disabilitas yang berkuliah di UI dapat mengajukanBeasiswa Afirmasi Pendidikan Tinggi (ADik) untuk mahasiswa disabilitas.
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
            Tidak ada informasi terkait dukungan karir spesifik untuk mahasiswa disabilitasdi UI. Namun, UI memiliki layanan dukungan karir dalam bentuk UI Career Development Center (CDC).
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
        UI memiliki unit Layanan Mahasiswa Disabilitas (LMD) yang berada di bawah Direktorat Kemahasiswaan. LMD yang dimiliki oleh UI memiliki tiga jenis layanan yang diperuntukkan bagi mahasiswa disabilitas, yakni layanan pembelajaran, training, dan advokasi.
    </div>
</div>
</section>
</main>
</div>
<!-- ================= FOOTER =================-->
@include('footer')
<div id="magnifierLens"></div>
<script src="{{ asset('js/accessibility.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/VCTryo0304/aksesibilitas-plugin-1303223025@latest/modules/tts.js?v=2"></script>
</body>
</html> 
