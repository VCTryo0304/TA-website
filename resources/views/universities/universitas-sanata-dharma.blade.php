<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Sanata Dharma – Informasi Kampus</title>

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
        <h1>USD</h1>
        <h2>Universitas Sanata Dharma</h2>
        <img src="{{ asset('assets/img/gedungUniversitas-sanata-dharma.webp') }}"alt="Universitas Sanata Dharma">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
    Universitas Sanata Dharma merupakan perguruan tinggi swasta (PTS) yang berdiri sejak 20 Oktober 1955 dengan nama PTPG Sanata Dharma yang selanjutnya menjadi Universitas Sanata Dharma pada 20 April 1993.Universitas Sanata Dharma meraih akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun 2016 serta berada di peringkat 32 dalam daftar 10 universitas swasta terbaik di Indonesia versi Kemenristekdikti. Universitas Sanata Dharma memiliki lima gedung kampus yang tersebar di Yogyakarta, D.I. Yogyakarta. Universitas Sanata Dharma saat ini memiliki 8 fakultas dengan 25 program studi sarjana (S1), 1 program studi profesi, 8 program studi magister (S2), dan 1 program studi doktor (S3).
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
            https://www.usd.ac.id
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Affandi, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
        </div>

        <div class="info-item">
            <b>Email</b>
          humas@usd.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            08112661144
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href="https://www.instagram.com/usd_official" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@usd.official" target="_blank">
                    <i class="fa-brands fa-TikTok"></i>
                </a>
                <a href="https://www.youtube.com/@humasuniversitassanatadhar7844" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://web.facebook.com/universitassanatadharma?_rdc=1&_rdr#" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/USD.webp') }}" alt="Logo USD" class="logo-usd">
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
            Universitas Sanata Dharma melakukan pendampingan yang dilakukan berupa penyediaan juru tulis atau juru bahasa selama jam kuliah serta memiliki kegiatan kursus bahasa isyarat yang terbuka bagi civitas akademika dan masyarakat umum.
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
           Universitas Sanata Dharma memiliki Pusat Layanan Konseling yang bertujuan untuk menangani civitasakademika yang mengalami gangguan dalam fungsi pikir, emosi, dan perilaku secara khusus yang ditangani dan dilayani oleh para psikolog dan konselor dalam bidangnya.
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
            Universitas Sanata Dharma menyediakan akses bagi mahasiswa atau tenaga kependidikan yang terganggu fungsi geraknya, Universitas Sanata Dharma telah menyediakan layanan kursi roda, bidang miring, dan lift. Bagi yang mengalami gangguan dalam fungsi pikir, emosi, dan perilaku secara khusus bisa ditangani oleh Pusat Layanan Konseling di Universitas Sanata Dharma yang dilayani oleh para psikolog dan konselor dalam bidangnya.
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
        Memiliki layanan pendampingan admisi pada saat tes masuk/PMB (Pendaftaran Mahasiswa Baru) namun tidak memiliki informasi spesifik terkait beasiswa untuk disabilitas.
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
        Universitas Sanata Dharma belum memiliki dukungan sosial.
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
           Tidak ada informasi spesifik terkait dukungan karir di Universitas Sanata Dharma, namun pada PSIBK sendiri memiliki rekan kerja dengan Autisme yang membantu kegiatan kesekretariatan, seperti pembuatan amplop yang nantinya amplop tersebut akan didistribusikan ke unit-unit yang memerlukan.
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
        Universitas Sanata Dharma memiliki Unit Layanan Disabilitas dengan nama PSIBK (Pusat Studi Individu Berkebutuhan Khusus). Adapun layanan yang diberikan adalah pemberian akses pendukung seperti kursi roda bagi yang membutuhkan, bantuan advokasi fasilitas sesuai sarana dan prasarana yang ada di USD, pendampingan selama kegiatan pembelajaran, serta pendampingan saat tes masuk (Pendaftaran Mahasiswa Baru). Adapun informasi lebih lanjut mengenai PSIBK dapat diakses melalui website PSIBK www.usd.ac.id/pusat/psibk/
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
