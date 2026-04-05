<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Brawijaya – Informasi Kampus</title>

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
        <h1>UB</h1>
        <h2>Universitas Brawijaya</h2>
        <img src="{{ asset('assets/img/gedungbrawijaya.webp') }}" alt="Universitas Brawijaya">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Brawijaya merupakan perguruan tinggi negeri (PTN) yang terletak di Kota Malang, Sumatera Jawa Timur. Universitas Brawijaya didirikan pada 05 Januari 1963. Universitas Brawijaya meraih akreditasi A dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) pada tahun 2009, meraih peringkat keempat sebagai PTN terbaik di Indonesia. Universitas Brawijaya memiliki 18 fakultas dengan±78 program studi sarjana (S1), ±47 program studi magister (S2), ±25 program studi doktor (S3), ±20 Program Pendidikan Dokter Spesialis (PPDS), ±9 program profesi, ±4 program studi diploma (D3), serta±5 program studi terapan (D4).
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
            https://www.ub.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jalan Veteran No. 12-16, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@ub.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            +62-341-551611
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/univ.brawijaya/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/@univ.brawijaya target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://x.com/UB_Official target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://web.facebook.com/Universitas.Brawijaya.Official/?_rdc=1&_rdr#  target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href=https://www.tiktok.com/@univbrawijaya target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UB.webp') }}" alt="Logo UI" class="logo-ui">
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
            Universitas Brawijaya menyediakan pendamping untuk mahasiswa penyandang disabilitas yang bertugas untuk pendamping mahasiswa disabilitas yang akan mendampingi saat mengerjakan tugas kuliah, PKK MABA, dan mengurus administrasi perkuliahan, mendampingi ketika bertemu dosen untuk bimbingan, memberikan informasi serta mengoreksi tugas (perkuliahan/OSPEK) mahasiswa difabel, membentuk pelayanan konsultasi, penyediaan Juru Bahasa Isyarat (JBI), digitisasi buku cetak/bahan ajardalam bentuk digital sepertiWord, PDF, Power Point, atau video, pelatihan pengajaran yang inklusif bagi dosen, pelatihan layanan inklusif bagi pegawai, website PSLD yang inklusif, dan video captioning. Universitas Brawijaya juga menyediakan Tutorial berupa pembelajaran intensif untuk membantu mahasiswa disabilitas terutama mahasiswa Tuli untuk memahami konsep bahasa yang sesuai dengan kaidah bahasa ilmiah seperti tutorial skripsi/TA/Laporan Magang, (2) tutorial bahasa Indonesia dan bahasa Inggris, dan (3) tutorial matakuliah. Tidak hanya itu, Universitas Brawijaya juga menyediakan fasilitas teknologi bantu seperti Mic clip-on, portable magnifier (dalam perbaikan), komputer dengan Screen Reader dan Magnifier (dalam perbaikan), kursi roda, kruk, serta Layanan instalasi Non-Visual Dekstop Access.
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
            Universitas Brawijaya menyediakan Layanan Konseling Mahasiswa dengan Disabilitas (LKMD) merupakan sebuah layanan yang menjadi bagian dari Pusat Studi dan Layanan Disabilitas (PSLD) sebagai upaya Universitas Brawijaya untuk memfasilitasi atau membantu mahasiswa dengan disabilitas dalam menghadapi permasalahan sehari-hari yang mungkin muncul dan mengganggu aktivitas sehari-hari dan berdampak pada performa akademis mahasiswa. Bagi pihak selain mahasiswa, Layanan Konsultasi Disabilitas (LKD) tersedia sebagai upaya untuk memfasilitasi dosen, pegawai Universitas Brawijaya, pendamping, orangtua, mahasiswa, maupun pihak-pihak lain di luar Universitas Brawijaya dalam berkonsultasi terkait permasalahan tentang disabilitas, baik secara umum maupun khusus.
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
            Universitas Brawijaya menyediakan layanan mobil untuk mempermudah mobilisasi mahasiswa berkebutuhan khusus/disabilitas, jalur pemandu (guiding block), ramp, lift, hingga kamar mandi disabilitas.
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
            Tidak ada informasi terkait dukungan sosial yang disediakan oleh UI. LMD UI memiliki relawan, namun informasi terkait relawan ini sangat minim.
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
           Universitas Brawijaya menyediakan jalur admisi Seleksi Mahasiswa Universitas Brawijaya (SELMA UB) melalui jalur Seleksi Mandiri Penyandang Disabilitas (SMPD). Tidak ada informasi spesifik mengenai beasiswa untuk disabilitas.
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
            Tidak ada informasi spesifik mengenai dukungan karir bagi mahasiswa disabilitas/berkebutuhan khusus di Universitas Brawijaya, namun diadakan sesi sosialisasi karir bagi mahasiswa disabilitas/berkebutuhan khusus.
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
        Universitas Brawijaya memiliki Unit Layanan Disabilitas dengan nama Pusat Studi & Layanan Disabilitas (PSLD).
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