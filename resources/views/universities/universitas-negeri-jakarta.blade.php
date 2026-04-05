<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Negeri Jakarta – Informasi Kampus</title>

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
        <h1>UNJ</h1>
        <h2>Universitas Negeri Jakarta</h2>
        <img src="{{ asset('assets/img/gedungUNJ.webp') }}" alt="Universitas Negeri Jakarta">
</header>
<main id="main-content" tabindex="-1">
<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
           Universitas Negeri Jakarta (UNJ) adalah universitas negeri yang berlokasi di Jakarta dan telah meraih akreditasi “A” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), yang mencerminkan standar akademik yang tinggi serta kualitas pengajaran, penelitian, dan pengabdian kepada masyarakat. Akreditasi ini mengukuhkan posisi UNJ sebagai salah satu universitas terkemuka di Indonesia. UNJ menawarkan berbagai program sarjana dan pascasarjana di berbagai fakultas, termasuk Pendidikan, Ilmu Keolahragaan, Seni dan Bahasa, Ilmu Sosial, dan Teknik. UNJ berkomitmen pada keunggulan akademik dan internasionalisasi, dengan beberapa program yang telah meraih akreditasi internasional. Universitas ini aktif dalam penelitian dan pengabdian masyarakat, serta menjalin kolaborasi global. Dengan tingkat penerimaan mahasiswa baru sekitar 95%, UNJ menunjukkan keterbukaannya terhadap sejumlah besar pelamar, sambil tetap mempertahankan reputasinya sebagai salah satu institusi pendidikan terkemuka di Indonesia.
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
            https://www.unj.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
           Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun, Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Jakarta, 13220

        <div class="info-item">
            <b>Email</b>
        humas@unj.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
           (021) 4898486
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                  <a href=https://web.facebook.com/OfficialUNJ/?_rdc=1&_rdr# target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href=https://x.com/UNJ_Official target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href=https://www.youtube.com/@unj_official target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href=https://www.instagram.com/unj_official/ target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>

        <img src="{{ asset('logo-univ/UNJ.webp') }}" alt="Logo UNJ" class="logo-ui">
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
            Tidak ada informasi terkait akomodasi akademik di kampus UNJ.
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
           Universitas Negeri Jakarta (UNJ) menyediakan layanan kesehatan mental bagi mahasiswa secara umum, yang meliputi konseling individu, konseling kelompok, tes psikologi, pelatihan pengasuhan, pengembangan SDM, dan psikoedukasi di bawah Unit Pelaksana Teknis Layanan Bimbingan Konseling Universitas Negeri Jakarta (UPT-LBK UNJ). Namun, tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di UNJ.
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
          Tidak tersedia informasi mengenai fasilitas aksesibilitas di Universitas Negeri Jakarta (UNJ).
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-heart"></i></div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Dukungan Sosial?
        </div>
        <div class="service-desc">
           Universitas Negeri Jakarta (UNJ) membentuk Relawan Disabilitas UNJ yang bertugas membantu calon mahasiswa penyandang disabilitas dalam mengikuti proses seleksi penerimaan mahasiswa baru (PENMABA) dan berkomunikasi dengan pengawas ujian. Selain itu, Relawan Disabilitas UNJ juga mendampingi mahasiswa penyandang disabilitas selama orientasi pengenalan lingkungan kampus. Para relawan ini juga dibekali dengan pelatihan bahasa isyarat.
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
         Universitas Negeri Jakarta (UNJ) memiliki seleksi khusus yang diperuntukkan bagi calon mahasiswa penyandang disabilitas melalui PENMABA Disabilitas. Proses PENMABA Disabilitas terdiri dari dua tahap seleksi, yaitu seleksi ujian tulis dan seleksi wawancara. Selama proses tersebut, calon mahasiswa penyandang disabilitas akan didampingi oleh Relawan Disabilitas UNJ.
         Tidak tersedia informasi mengenai beasiswa yang secara khusus ditujukan kepada mahasiswa penyandang disabilitas di UNJ. Namun, berdasarkan informasi yang ada, UNJ menyediakan berbagai jenis beasiswa bagi mahasiswa secara umum, di antaranya beasiswa Kartu Indonesia Pintar (KIP) Kuliah, beasiswa Peningkatan Prestasi Akademik (PPA), beasiswa Yayasan Supersemar, beasiswa PT Gudang Garam, beasiswa Bank Indonesia, dan beasiswa lainnya.
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon"><i class="fa fa-briefcase"></i></div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">
        Apakah universitas ini memiliki Dukungan Karir?

        </div>
        <div class="service-desc">
            Universitas Negeri Jakarta (UNJ) bersama Unit Pelaksana Teknis Layanan Bimbingan Konseling Universitas Negeri Jakarta (UPT-LBK UNJ) menyediakan informasi mengenai layanan dukungan karier melalui berbagai kegiatan, seperti pembekalan wisudawan, campushiring, dan tracer study. Selain itu, UNJ juga memfasilitasi workshop, webinar, dan jobposting untuk mahasiswa UNJ dan masyarakat umum. Namun, tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di UNJ.
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
       Universitas Negeri Jakarta (UNJ) diketahui memiliki Pusat Pengembangan Pembelajaran dan Layanan Disabilitas. Namun, tidak tersedia informasi lebih lanjut mengenai layanan yang disediakan.
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
