<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>FAQ - IDEA Hub</title>
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
<!-- ================= NAVBAR ================= -->
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
<section class="faq-hero px-5 py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="faq-title">FREQUENTLY ASKED<br>QUESTIONS</h1>
            <p class="faq-desc">
                Cari dan temukan disini, jawaban dari pertanyaan-pertanyaan yang kerap kali ditanyakan.
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/img/faqstiikerideahub.png') }}" class="img-fluid faq-img" alt="">
        </div>
    </div>
</section>


<!-- FAQ CONTENT -->
<section class="px-5 pb-5">

    <div class="faq-box">
        <h6 class="fw-bold mb-3">Apa itu IDEA hub?</h6>
        <p class="faq-text">
            Indonesia Disability Inclusion for Education Accessibility (IDEA) adalah proyek...
        </p>
    </div>

    <div class="accordion" id="faqAccordion">

        <!-- ITEM 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Apa yang bisa saya dapatkan dari IDEA hub?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Anda bisa mendapatkan informasi, panduan, dan sumber daya terkait pendidikan inklusif.
                </div>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Apakah saya harus membayar?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Tidak, semua layanan di IDEA Hub gratis.
                </div>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Bagaimana kebijakan privasi data?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Data pengguna dilindungi dan tidak dibagikan ke pihak lain.
                </div>
            </div>
        </div>

    </div>

    <!-- BUTTON -->
    <div class="faq-contact text-center mt-5">
        Tidak menemukan jawaban yang kamu cari?
        <a href="#" class="fw-bold">Hubungi kami</a>
    </div>

</section>
@include('footer')
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>