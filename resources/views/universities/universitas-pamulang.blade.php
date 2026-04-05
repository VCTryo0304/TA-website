<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas PAMULANG – Informasi Kampus</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('css/Kampus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
<!-- ================= HEADER ================= -->
   @include('headerKampus') 
<header class="hero-section">
   <div class="hero">
        <h1>UNPAM</h1>
        <h2>Universitas Pamulang</h2>
        <img src="{{ asset('assets/img/gedungpamulang.webp') }}" alt="Universitas Pamulang">
</header>

<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Pamulang (UNPAM) adalah sebuah universitas swasta di Tangerang, Indonesia, yang menawarkan berbagai program sarjana dan pascasarjana. Dikenal dengan pendidikannya yang mudah diakses, UNPAM berfokus pada keterjangkauan dan keunggulan akademik. UNPAM menawarkan program-program di berbagai bidang seperti ekonomi, teknik, hukum, dan ilmu sosial. UNPAM telah terakreditasi dengan peringkat “Baik Sekali” oleh BAN-PT, yang menyoroti komitmennya terhadap pendidikan berkualitas. UNPAM memiliki proses penerimaan mahasiswa baru yang mudah diakses, dengan tingkat penerimaan sekitar 89%, sehingga relatif lebih mudah untuk masuk dibandingkan dengan universitas lain di wilayah ini.
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
            https://unpam.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@unpam.ac.id
        </div>
    </div>
    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (021) 7412566
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/unpam.official/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.tiktok.com/@unpamofficial target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UNPAM.webp') }}" alt="Logo UI" class="logo-ui">
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
            Universitas Pamulang (UNPAM) menyediakan akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas, seperti onlinelearning untuk memudahkan mahasiswa tunanetra, shadowlecture, serta penyediaan perangkat keras dan perangkat lunak yang mendukung proses pembelajaran. Namun, tidak tersedia informasi lebih rinci mengenai jenis perangkat keras dan perangkat lunak yang dimiliki oleh UNPAM.
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
           Universitas Pamulang (UNPAM) menyediakan layanan kesehatan mental atau konseling untuk mendukung mahasiswa penyandang disabilitas di bawah Pusat Layanan Disabilitas (PLD).
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
            Tidak tersedia informasi mengenai fasilitas aksesibilitas di Universitas Pamulang (UNPAM).
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
            Universitas Pamulang (UNPAM) menyediakan relawan untuk membantu mahasiswa penyandang disabilitas dalam proses pembelajaran di kelas. Relawan ini dikenal dengan sebutan Buddy.
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
           Universitas Pamulang (UNPAM) memiliki seleksi khusus yang diperuntukkan bagi calon mahasiswa penyandang disabilitas, dengan tetap mengikuti standar penerimaan mahasiswa baru (PMB). Calon mahasiswa penyandang disabilitas tidak hanya mengikuti tes tertulis dan tes komputer, tetapi juga tes wawancara. Proses seleksi ini disesuaikan dengan jenis disabilitas masing-masing calon mahasiswa.

Selain itu, UNPAM menyediakan beasiswa khusus bagi mahasiswa penyandang disabilitas melalui program Afirmasi Pendidikan Tinggi (ADik), yang mendukung biaya hidup dan biaya pendidikan setiap semester.
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
            Universitas Pamulang (UNPAM) menyediakan layanan dukungan karier bagi mahasiswa penyandang disabilitas di bawah Pusat Layanan Disabilitas (PLD). PLD UNPAM memfasilitasi pemetaan potensi mahasiswa dan mendukung mereka dalam mengikuti perlombaan atau pelatihan keahlian. Selain itu, akses pendanaan modal kerja atau dana UMKM juga disediakan untuk mendorong wirausaha muda.
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
        Universitas Pamulang (UNPAM) memiliki Pusat Layanan Disabilitas (PLD), yang juga dikenal sebagai Lembaga Layanan Disabilitas (LLD). PLD atau LLD UNPAM menyediakan layanan pelaporan tantangan di kelas, layanan konsultasi dan konseling, serta layanan pengembangan potensi dan prestasi.
    </div>
</section>
<!-- ================= FOOTER =================-->
@extends('footer')
</body>
</html>