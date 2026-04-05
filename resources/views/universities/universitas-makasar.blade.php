<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Negeri Makasar – Informasi Kampus</title>

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
        <h1>UNM</h1>
        <h2>Universitas Negeri Makassar</h2>
        <img src="{{ asset('assets/img/gedungnegeri makasar.webp') }}" alt="Universitas Negeri Makassar">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Negeri Makassar (UNM) adalah institusi pendidikan terkemuka yang berlokasi di Makassar, Sulawesi Selatan. UNM menawarkan berbagai program sarjana dan pascasarjana di beragam fakultas, termasuk Pendidikan, Teknik, Ilmu Sosial, dan lainnya. Dengan penekanan kuat pada kewirausahaan dan pelatihan profesional, UNM bertujuan untuk menghasilkan lulusan yang berdaya saing global. Universitas ini juga dikenal atas kontribusinya dalam penelitian dan pengabdian kepada masyarakat. UNM memiliki akreditasi “A” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), yang mencerminkan standar akademis yang tinggi. Universitas ini memiliki tingkat penerimaan yang selektif, berkisar antara 10-20%, menjadikannya pilihan yang kompetitif bagi calon mahasiswa yang ingin melanjutkan pendidikan.
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
            https://unm.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
            Jl. A. P. Pettarani, Tidung, Kec. Rappocini, Kota Makassar, Sulawesi Selatan.
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@unm.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (0411) 3987077
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/unm.makassar/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
               
                <a href=https://x.com/UNM_Makassar target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://web.facebook.com/UNM_Makassar?_rdc=1&_rdr#  target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href=https://www.linkedin.com/school/universitas-negeri-makassar/ target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/negerimakasar.webp') }}" alt="Logo UI" class="logo-ui">
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
            Tidak tersedia informasi mengenai akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas di Universitas Negeri Makassar (UNM).
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
            Tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Makassar (UNM). Namun, UNM memiliki Unit Pelaksana Teknis Layanan Bimbingan Konseling (UPT-LBK) yang berfungsi sebagai pusat layanan bimbingan, konseling, dan kesehatan mental bagi mahasiswa secara umum.
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
           Universitas Negeri Makassar (UNM) menyediakan berbagai fasilitas aksesibilitas, antara lain ramp untuk pengguna kursi roda, lift, toilet khusus penyandang disabilitas, dan area parkir khusus penyandang disabilitas. Selain itu, UNM juga menyediakan tenaga pendamping bagi mahasiswa penyandang disabilitas.
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
            Tidak tersedia informasi mengenai layanan dukungan sosial di Universitas Negeri Makassar (UNM).
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
           Tidak tersedia informasi mengenai jalur penerimaan dan beasiswa yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Makassar (UNM). Namun, berdasarkan informasi yang ada, UNM menyediakan beasiswa Kartu Indonesia Pintar (KIP) Kuliah, beasiswa Supersemar, dan beasiswa unggulan CIMB Niaga.
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
            Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Makassar (UNM). Namun, UNM memiliki layanan dukungan karier dalam bentuk Career Development Center (CDC).
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
        Universitas Negeri Makassar (UNM) diketahui memiliki Unit Layanan Disabilitas (ULD) yang berada di bawah Fakultas Ilmu Keolahragaan dan Kesehatan (FIKK). ULD FIKK menyediakan berbagai layanan, seperti pengelolaan database, menjadi penghubung antara mahasiswa dan manajer kemahasiswaan atau pembimbing akademik, pelatihan penggunaan assistive technology (AT), advokasi, serta penyediaan teknologi bantu (assistive technology).
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