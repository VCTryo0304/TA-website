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
    <div id="zoomWrapper">

<!-- ================= HEADER ================= -->
   @include('headerKampus') 
   <a href="#main-content" class="skip-link">Lewati ke Konten</a>
    @include('panel-aksesibilitas')
<header class="hero-section">
   <div class="hero">
        <h1>UNAIR</h1>
        <h2>UNIVERSITAS AIRLANGGA</h2>
        <img src="{{ asset('assets/img/gedungairlangga.webp') }}" alt="Universitas Airlangga">
    </div>
</header>
    <main id="main-content" tabindex="-1">


<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Airlangga (Unair) merupakan Perguruan Tinggi Negeri (PTN) yang berdiri sejak 10 November 1954. Kampus utama Unair terletak di Surabaya, Jawa Timur. Unair memiliki 16 (enam belas) fakultas dan 1 (satu) sekolah pascasarjana. Unair telah terakreditasi A oleh BAN-PT (Badan Akreditasi Nasional-Perguruan Tinggi), dan menduduki peringkat-308 dunia sekaligus peringkat ke-4 se-Indonesia menurut QS World UniversityRanking 2024 dan peringkat-67 Asia UniversityRanking 2023. Unair menyelenggarakan program pendidikan dari jenjang Diploma (D3 dan D4), Sarjana (S1), Pascasarjana (S2-S3), Program Profesi dan Spesialis, serta Program Internasional.
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
            https://unair.ac.id
        </div>

        <div class="info-item">
            <b>Address</b>
           Gedung Kantor Manajemen, Kampus MERR C Mulyorejo – Surabaya
        </div>

        <div class="info-item">
            <b>Email</b>
           adm@pkip.unair.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            (031) 5914042, 5914043, 5915551 | Fax. (031) 5915551 | WhatsApp +62 812-3456-9007
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

        <img src="{{ asset('logo-univ/UNAIR.webp') }}" alt="Logo UI" class="logo-ui">
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
            Unair menyediakan akomodasi akademik berupa layanan pembuatan bahan ajar digital dalam bentuk Word, PDF, Power Point, atau video yang aksesibel untuk mahasiswa disabilitas. Layanan ini diperuntukkan bagi seluruh dosen di Unair yang ingin mengembangkan bahan ajar aksesibel.
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
            Mahasiswa disabilitas dapat memperoleh layanan konseling yang disediakan oleh AIL.
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
           Fasilitas yangdisediakan oleh Unair untuk civitasakademica penyandang disabilitas antara lain adalah ramp untuk kursi roda yang berada di setiap fakultas, toilet disabilitas, dan lift untuk gedung yang memiliki lebih dari tiga lantai. Adapun untuk gedung yang tidak lebih tinggi dari tiga lantai, disediakan ruang kelas khusus untuk mahasiswa disabilitas.

           Terdapat layanan antar-jemput di lingkungan internal UNAIR dari Unit Layanan Disabilitas menuju masing-masing fakultas dan sebaliknya, di mana jam operasional untuk layanan ini adalah puku; 07.00 WIB sampai 16.00 WIB pada jam kerja. Layanan mobilitas bisa didapatkan dengan permintaan atau by-request.
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
           Belum ada informasi rinci mengenai pembukaan jalur admisi dan beasiswa khusus untuk calon mahasiswa disabilitas. Namun, sejak tahun 2016 Unair telah menyediakan pendampingan untuk mahasiswa disabilitas dalamseleksi beasiswa ASEAN University Network DisabilityPublicPolicy Network (AUNDPPNet).Selain itu Unair juga memberikan pendampingan dalam proses Seleksi Mahasiswa Baru bagi calon mahasiswa penyandang disabilitas.
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
            Dari informasi yang tersedia, Unair melalui AIL juga menyediakan dukungan berupa pelatihan kerja untuk mahasiswa disabilitas.
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
        Di Universitas Airlangga (Unair), terdapat unit Airlangga InclusiveLearning (AIL) yang berfungsi sebagai pusat layanan disabilitas. AIL menawarkan enam jenis layanan, yaitu akomodasi, aksesibilitas, tutorial, konseling, digitalisasi buku, serta layanan mobilitas.
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