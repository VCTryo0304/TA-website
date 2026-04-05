<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Lambung Mangkurat – Informasi Kampus</title>

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
        <h1>ULM</h1>
        <h2>Universitas Lambung Mangkurat</h2>
        <img src="{{ asset('assets/img/gedungULM.webp') }}" alt="Universitas Lambung Mangkurat">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
            Universitas Lambung Mangkurat (ULM), dengan tagline 'Waja Sampai kaPuting' yang berarti perjuangan yang tidak mengenal menyerah dengan tekad baja hingga akhir, didirikan pada 21 September 1958 dan merupakan perguruan tinggi negeri tertua di Kalimantan.\
             ULM menawarkan berbagai program studi di 12 fakultas, termasuk Keguruan dan Ilmu Pendidikan, Teknik, Kedokteran, dan Ilmu Sosial. 
             ULM berfokus pada penelitian dan pengabdian kepada masyarakat, didukung oleh sistem informasi terintegrasi yang menunjang kegiatan akademik dan administrasi. Kampus ini terakreditasi dengan peringkat “A” dan memiliki visi untuk mencetak lulusan berjiwa Pancasila dan berakhlak mulia.
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
            https://ulm.ac.id/id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Brigjen H. Hasan Basri, Kayu Tangi, Banjarmasin, Kalimantan Selatan, Kotak Pos 219
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@ulm.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
           (0511) 3306603
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href=https://www.instagram.com/lambungmangkurat/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href=https://www.youtube.com/@universitaslambungmangkura1814 target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://www.facebook.com/profile.php?id=100011338037064 target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/ULM.webp') }}" alt="Logo ULM" class="logo-ui">
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
           Universitas Lambung Mangkurat (ULM) menyediakan akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas, berupa assistivetechnology (AT),
            tenaga pendidik atau juru bahasa isyarat (JBI), serta penyesuaian kurikulum sesuai dengan kebutuhan kelompok disabilitas. Hingga saat ini, ULM terus berupaya mengembangkan fasilitas non-fisik lainnya.
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
           Tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Lambung Mangkurat (ULM). Namun, berdasarkan informasi yang ada, ULM menyediakan layanan konseling yang dapat diakses oleh seluruh mahasiswa.
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
           Universitas Lambung Mangkurat (ULM) menyediakan fasilitas yang memudahkan mahasiswa penyandang disabilitas untuk bermobilisasi menuju ruang kelas, toilet, dan aula.
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
            Universitas Lambung Mangkurat (ULM) menyediakan relawan untuk membantu mahasiswa penyandang disabilitas dalam beraktivitas di lingkungan kampus.
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
          Universitas Lambung Mangkurat (ULM) menyediakan berbagai jenis beasiswa yang ditujukan khusus bagi mahasiswa penyandang disabilitas, salah satunya adalah beasiswa program Afirmasi Pendidikan Tinggi (ADik). Beasiswa ADik disediakan oleh Pusat Layanan Pembiayaan Pendidikan (Puslapdik) dan membebaskan mahasiswa penyandang disabilitas dari biaya kuliah. Beasiswa ini juga memberikan bantuan biaya hidup setiap bulan serta biaya transportasi dari daerah asal ke lokasi perguruan tinggi. Selain itu, bersama PT. Bayan Resources, ULM memberikan beasiswa Bayan Peduli, yang mencakup pembayaran uang kuliah tunggal (UKT), biaya hidup, dan biaya lainnya. Selain beasiswa ADik dan Bayan Peduli, ULM juga menerima calon mahasiswa penyandang disabilitas melalui jalur Kartu Indonesia Pintar (KIP) Kuliah.
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
            Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Lambung Mangkurat (ULM). Namun, berdasarkan informasi yang ada, ULM menyediakan layanan dukungan karier yang dapat diakses oleh seluruh mahasiswa.
    </div>

     
    <div class="service-item">
        <div class="service-title">
            <div class="icon icon-chat">
             <div class="service-icon"><i class="fa-solid fa-comments"></i></div>
            </div>
            <h3>Unit/Pusat Layanan Disabilitas</h3>
        </div>
        <div class="service-question">
       Apakah universitas ini memiliki Unit/Pusat Layanan Disabilitas? 
        </div>
        <div class="service-desc">
       Sebagai komitmen mewujudkan kampus yang inklusif, pada tahun 2018, Univeritas Lambung Mangkurat (ULM) membentukPusat Pengembangan Pendidikan Inklusi dan Layanan Disabilitas (P3I-LD). Namun, tidak tersedia informasi lebih lanjut mengenai layanan yang disediakan.
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
