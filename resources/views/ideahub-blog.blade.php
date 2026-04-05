<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog - IDEA Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/headerTA.css') }}">
     <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>

<!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4"
         role="navigation"
         aria-label="Navigasi Utama">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
           <img src="{{ asset('logo-univ/logo.webp') }}" class="img-fluid" style="max-width:150px;" alt="Ideahub">
           
        </a>

        <ul class="navbar-nav ms-auto gap-3">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Metodologi</a></li>
        </ul>
    </div>
</nav>

<!-- HERO -->
<section class="hero px-5 py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="fw-bold title">BERITA TERKINI</h1>
            <p class="desc">
                Baca artikel, info terbaru dan unduh produk digital dari IDEA.
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/img/blogstikerideahub.png') }}" class="img-fluid hero-img" alt="">
        </div>
    </div>
</section>

<!-- INFO TERKINI -->
<section class="px-5 pb-5">
    <h4 class="fw-bold mb-4">INFO TERKINI</h4>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card-blog">
                <img src="https://picsum.photos/400/250" class="img-fluid">
                <div class="card-content">
                    <h6>7 CONTOH & PENGERTIAN DISABILITAS FISIK</h6>
                    <p>Apa pengertian dari disabilitas fisik dan apa saja...</p>
                    <button class="btn btn-danger">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card-blog">
                <div class="no-image">No Image</div>
                <div class="card-content">
                    <h6>PANDUAN AKSES PENDIDIKAN UNTUK MAHASISWA DISABILITAS</h6>
                    <p>Panduan praktis untuk mahasiswa penyandang disabilitas...</p>
                    <button class="btn btn-danger">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card-blog">
                <img src="https://picsum.photos/401/250" class="img-fluid">
                <div class="card-content">
                    <h6>MENDIKBUD: KAMPUS BELUM SIAP AKOMODASI</h6>
                    <p>Diskusi tentang kesiapan kampus dalam menerima mahasiswa...</p>
                    <button class="btn btn-danger">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-md-4">
            <div class="card-blog">
                <img src="https://picsum.photos/402/250" class="img-fluid">
                <div class="card-content">
                    <h6>PELATIHAN KEWIRAUSAHAAN BAGI SISWA DISABILITAS</h6>
                    <p>Pelatihan kewirausahaan untuk siswa disabilitas...</p>
                    <button class="btn btn-danger">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-md-4">
            <div class="card-blog">
                <div class="no-image">No Image</div>
                <div class="card-content">
                    <h6>POLICY BRIEF</h6>
                    <p>Dokumen kebijakan untuk mendukung akses pendidikan...</p>
                    <button class="btn btn-danger">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

    </div>
</section>
@include('footer')
</body>
</html>