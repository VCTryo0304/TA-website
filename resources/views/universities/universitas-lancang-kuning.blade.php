<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Lancang Kuning – Informasi Kampus</title>

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
        <h1>Unilak</h1>
        <h2>Universitas Lancang Kuning</h2>
        <img src="{{ asset('assets/img/gedunglancangkuning.webp') }}" alt="Universitas Lancang Kuning">
</header>

<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
           Universitas Lancang Kuning merupakan perguruan tinggi swasta (PTS) yang berdiri pada tahun 1982 di bawah naungan Yayasan Pendidikan Raja Ali Haji di Pekanbaru, Riau. Universitas Lancang Kuning meraih akreditasi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)serta berada di peringkat 86 dalam daftar 100 kampus terbaik di Indonesia. Universitas Lancang Kuning saat ini memiliki 10 fakultas dengan 38 program studi sarjana (S1), dan10 program studi magister (S2).
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
            https://unilak.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl.Yos Sudarso KM. 8 Rumbai, Pekanbaru
        </div>

        <div class="info-item">
            <b>Email</b>
           info@unilak.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (0761) 52248
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

        <img src="{{ asset('logo-univ/lancangkuning.webp') }}" alt="Logo UI" class="logo-ui">
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
           Universitas Lancang Kuning mengakomodasi mahasiswa disabilitasnya melalui penyediaan Relawan Disabilitasmelalui proses rekruitasi relawan disabilitasyang nantinya menjadi sahabat dari mahasiswa disabilitasdan akan membantu dalam proses perkuliahan, berinteraksi, berkomunikasi dan lain-lain. Selain itu, Universitas Lancang Kuning juga menyediakan akses penerjemah bahasa isyarat untuk memudahkan komunikasi.
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
            Universitas Lancang Kuning memberikan Layanan Konseling dan Pendampingan bagi mahasiswa disabilitas agar mereka dapat mengoptimalkan potensi dan bakat yang dimiliki.
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
            Tidak ada informasi mengenai aksesibilitas kampus di Universitas Lancang Kuning namun disebutkan bahwa akan mengupayakan segera pelaksanaan proses pembangunan fasilitas ramah disabilitas secara bertahap seperti toilet, rumah disabilitas, dan lain-lain.
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
           Tidak ada informasi terkait jalur admisi namun disebutkan Universitas Lancang Kuning memberikan beasiswa untuk seluruh mahasiswa disabilitas yang berasal dari APBN atau APBD. Apabila tidak ada beasiswa, maka mahasiswa disabilitas di Universitas Lancang Kuning dipastikan bebas biaya pendidikan oleh rektor.
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
          Tidak ada informasi spesifik namun disebutkan bahwa Universitas Lancang Kuning membuka mitra kerjasama dengan perusahaan-perusahaan agar mereka (mahasiswa disabilitas) dapat berkesepatan untuk diterima untuk magang dan bekerja.
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
           Tidak ada informasi spesifik namun disebutkan bahwa Universitas Lancang Kuning membuka mitra kerjasama dengan perusahaan-perusahaan agar mereka (mahasiswa disabilitas) dapat berkesepatan untuk diterima untuk magang dan bekerja.
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
        Universitas Lancang Kuning memiliki Unit Layanan Disabilitas dengan nama Pusat Layanan Psikologi dan Disabilitas Unilak (PLPD).
    </div>
</section>
<!-- ================= FOOTER =================-->
@extends('footer')
</body>
</html>