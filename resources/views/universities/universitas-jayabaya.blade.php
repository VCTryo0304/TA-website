<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UNIVERSITAS JAYABAYA – Informasi Kampus</title>

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
        <h1>UJ</h1>
        <h2>Universitas Jayabaya</h2>
        <img src= "{{ asset('assets/img/gedungJAYABAYA.webp') }}" alt="Universitas Jayabaya">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
       Universitas Jayabaya, yang terletak di Jakarta, adalah salah satu universitas swasta terkemuka di Indonesia. Kampus ini menawarkan program sarjana dan pascasarjana di berbagai bidang, termasuk hukum, teknik, ekonomi, psikologi, komunikasi, dan ilmu komputer.Fasilitasnya meliputi laboratorium, perpustakaan, dan ruang kegiatan mahasiswa. Universitas ini juga berfokus pada penelitian dan pengabdian masyarakat, dengan lembaga-lembaga yang mendukung kualitas akademik dan penelitian mahasiswa. Universitas ini memiliki tingkat penerimaan yang tinggi yaitu 92%, yang menandakan aksesibilitas bagi banyak mahasiswa. Universitas ini didirikan pada tahun 1958 dan telah terakreditasi oleh BAN-PT, Badan Akreditasi Nasional Perguruan Tinggi.
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
            https://jayabaya.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
         Jl. Pulomas Selatan Kav. 23, Jakarta Timur, 13210.
        </div>

        <div class="info-item">
            <b>Email</b>
           info@jayabaya.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            0813-3332-2128
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href="https://www.instagram.com/universitas_jayabaya/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                </a>
                <a href=https://x.com/jayabaya_univ target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            
                <a href="https://web.facebook.com/Univ.Jayabaya?_rdc=1&_rdr#" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UJ.webp') }}" alt="Logo UJ" class="logo-uj">
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
           Tidak tersedia informasi mengenai akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas di Universitas Jayabaya (UJ).
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
           Tidak tersedia informasi mengenai layanan kesehatan mental di Universitas Jayabaya (UJ).
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
           Tidak tersedia informasi mengenai fasilitas aksesibilitas di Universitas Jayabaya (UJ).
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
          Tidak tersedia informasi mengenai layanan dukungan sosial di Universitas Jayabaya (UJ).
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
          Tidak tersedia informasi mengenai jalur penerimaan dan beasiswa yang secara khusus ditujukan kepada mahasiswa penyandang disabilitas di Universitas Jayabaya (UJ). Namun, berdasarkan informasi yang ada, UJ membuka tiga jalur penerimaan mahasiswa, yaitu melalui tes online, tanpa tes (melalui beasiswa prestasi), dan Kartu Indonesia Pintar (KIP) Kuliah.
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
        Tidak tersedia informasi mengenai layanan dukungan karier di Universitas Jayabaya (UJ).
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
           Universitas Jayabaya (UJ) diketahui memiliki Unit Layanan Disabilitas (ULD). Namun, tidak tersedia informasi lebih lanjut mengenai layanan yang disediakan.
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
