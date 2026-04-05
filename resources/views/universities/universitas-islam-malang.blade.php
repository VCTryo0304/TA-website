<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Islam Malang – Informasi Kampus</title>

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
        <h1>UNISMA</h1>
        <h2>Universitas ISLAM MALANG</h2>
        <img src="{{ asset('assets/img/gedungUNISMA.webp') }}" alt="Universitas Islam Malang">
    </div>
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Islam Malang (Unisma) sebagai perguruan tinggi Islam dibawah naungan Pusat Pendidikan dan Latihan Olahraga Pelajar (PPLP) Ma’arif Nahdatul Ulama. Memiliki 11 Fakultas yang terdiridari Agama Islam, Hukum, Pertanian, Peternakan, Teknik, MIPA, Keguruan dan Ilmu Pendidikan, Ekonomi dan Bisnis, IlmuAdministrasi, Kedokteran, dan Pascasarjana.

Visi Universitas Islam Malang adalah : Menjadi Universitas unggul bertaraf internasional, berorientasi masa depan dalam IPTEKS dan budaya, untuk kemaslahatan umat yang berakhlaqul karimah, berlandaskan Islam Ahlussunnah waljama’ah

Misi Universitas Islam Malang adalah :

Meningkatkankualitaspendidikan, penelitian, pengabdian kepada masyarakat, yang berpihak pada kemaslahatan umat menuju universitas berkualifikasi internasional (world class university)
Mengembangkan dan menyebarluaskan akses pendidikan dan ajaran Islam Ahlussunnah waljama’ah .
Menguatkan kapasitas institusi untuk mewujudkan kualitas pendidikan dan pembelajaran yang handal serta unggul berstandar internasional dengan meningkatkan tata kelola yang baik (Good University Governance)
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
            https://unisma.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Mayjen Haryono 193 Malang 65144
        </div>

        <div class="info-item">
            <b>Email</b>
           Humas@unisma.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            081259991678
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href="https://www.instagram.com/unisma_malang/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@HumasUnismaOfficial" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('assets/img/UNISMA.webp') }}" alt="Logo UNISMA" class="logo-unisma">
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
            Unisma memiliki teknologi bernama Risetto (dirancang dengan menggunakan teknologi AI Voice-Over dan Text to Speech/TTS) sebagai bentuk inovasi pembelajaran yang memudahkan mahasiswa untuk bisa mengakses materi atau powerpoint dalam pertemuan sebelumnya, khususnya pada Pembelajaran Bahasa dan Sastra Indonesia.
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
            Tidak ada informasi spesifik layanan Kesehatan Mental di Unisma.
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
            Tidak ada informasi spesifik mengenai Kampus Aksesibel di Unisma.
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
            Tidak ada informasi spesifik mengenai Dukungan Sosial di Unisma.
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
           Tidak ada penjelasan spesifik mengenai beasiswa khusus untuk disabilitas di Unisma. Namun ada Beasiswa KIP Kuliah, Beasiswa Bidikmisi, Beasiswa Siswa Juara, Beasiswa OSC.MEDCOM.ID, Beasiswa Baznas, Beasiswa Djarum.
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
            Tidak ada informasi spesifik mengenai Dukungan Karir di Unisma.
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
        Unisma memiliki Unit Studi dan Layanan Disabilitas. Tetapi, tidak dijelaskan secara rinci mengenai unit layanan disabilitas tersebut.
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
