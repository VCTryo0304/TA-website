<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas BINA NUSANTARA – Informasi Kampus</title>

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
        <h1>UBN</h1>
        <h2>Universitas BINA NUSANTARA</h2>
        <img src="{{ asset('assets/img/binus.webp') }}" alt="Universitas BINA NUSANTARA">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
           Universitas Bina Nusantara merupakan perguruan tinggi swasta (PTS) yang memiliki beberapa cabang kampus seperti Binus Alam Sutera, Binus Kemanggisan, Binus Malang, Binus Bandung, Binus Semarang,Binus Medan, Binus Senayan, Binus Bekasi, Binus ASO School of Engineering, Binus Business School, dan Binus Online. Universitas Bina Nusantara didirikan pada 1 Juli 1981. Universitas Bina Nusantara meraih akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun 2016, meraih peringkat pertama sebagai universitas terbaik di Jakarta serta berada di peringkat kedua sebagai PTS terbaik di Indonesia. Universitas Bina Nusantara memiliki 8 fakultas dengan ±70 program studi sarjana yang terdiri dari sarjana reguler, sarjana daring, dan sarjana internasional(S1/S1 Online/S1 Internasional),±21 program studi magister yang terdiri dari magister reguler dan magister daring (S2/S2 Online), 2 program studi doktor (S3), 12 double program, 3 program master track, ±9 program studi diploma ekstensi terdiri dari diploma ekstensi reguler dan diploma ekstensi online (D3 Extension/D3 Extension Online), serta 2 program studi terapan (D4).
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
            https://binus.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          BINUS Kampus Syahdan, Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah, Jakarta.
        </div>

        <div class="info-item">
            <b>Email</b>
           pmb@binus.edu
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            +62 21 534 5830
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/binusuniversityofficial/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/@BINUSTVChannel target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://x.com/BINUS_UNIV target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                  <a href=https://www.tiktok.com/@binusuniversityofficial target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                  <a href= https://web.facebook.com/universitasbinanusantara/?_rdc=1&_rdr# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/binus.webp') }}" alt="Logo UI" class="logo-ui">
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
            Universitas Bina Nusantara mengembangkan aplikasi ADAB atau singkatan dari Ayo Dengar Ayo Bicara yang merupakan aplikasi web dan seluler open-source yang dikembangkan oleh Tim Pengembang Bearcats untuk membantu siswa tunarungu dan lowvision di dunia online. Selain itu, Universitas Bina Nusantara juga mengadakanpelatihan dari BINUS CorporateLearning & Development (BCL&D) dan dari Lecturer Resource Center (LRC) untuk staf dosen dan administrasi guna meningkatkan mutu pengembangan tenaga pengajar dan karyawan terutama peningkatan kompetensi melayani mahasiswa berkebutuhan khusus. Bagi mahasiswa yang memiliki disabilitas/berkebutuhan khusus, dapat menghubungi StudentAdvisory & Support Centre untuk nantinya diarahkan ke Sub-Unit Layanan Disabilitas Universitas Bina Nusantara. Selain itu, Universitas Bina Nusantara menyediakan Program Pembelajaran Individual dengan mahasiswa disabilitas yang sudah terdata di database sub-unit layanan disabilitas secara berkala dipantau perkembangannya. Hal ini termasuk kendala dari sisi keterampilan atau kemampuan penting yang dapat menghambat tercapainya prestasi yang optimal atau menghambat kesejahteraan psikologis mereka/. Adapun fasilitas pelayanan lainnya adalah FriendsCareCommunityyangbertujuan merekrut mahasiswa yang tertarik pada dunia disabilitas untuk berperan sebagai peerconsultant(rekan mahasiswa yang menjadi wadah cerita sesama mahasiswa) serta peer partner (mahasiswa yang akan menjadi rekan dan teman diskusi bagi mahasiswa berkebutuhan khusus/disabilitas dalam menunjang perkuliahan sehari-hari).
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
            Universitas Bina Nusantara menyediakan fasilitas layanan kesehatan mental/wellness secara gratis mengenai masalah akademik maupun masalah pribadi sehubungan dengan kebutuhan khusus atau kondisi disabilitasnya bagi mahasiswa berkebutuhan khusus/disabilitas maupun orang tua mahasiswa yang akan ditangani oleh konselor profesional dalam bidangnya.
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
        Universitas Bina Nusantara menyediakan lahan area parkir khusus disabilitas yang dekat dari pintu masuk, ramp bidang miring, lift, toilet khusus disabilitas, serta jalur pemandu (guidingblock).
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
           Tidak ada informasi spesifik mengenai dukungan karir bagi mahasiswa disabilitas/berkebutuhan khusus di Universitas Bina Nusantara, namun diadakan sesi sosialisasi karir bagi mahasiswa disabilitas/berkebutuhan khusus.
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
           niversitas Bina Nusantara memiliki Unit Layanan Disabilitas dengan nama Sub-Unit Disabilty Services.
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
            Tidak ada informasi terkait dukungan karir spesifik untuk mahasiswa disabilitasdi UI. Namun, UI memiliki layanan dukungan karir dalam bentuk UI Career Development Center (CDC).
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
        niversitas Bina Nusantara memiliki Unit Layanan Disabilitas dengan nama Sub-Unit Disabilty Services.
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
