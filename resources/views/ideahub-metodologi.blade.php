<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Metodologi - IDEA Hub</title>
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

<!-- HERO -->
<section class="meto-hero px-5 py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="meto-title">METODOLOGI</h1>
            <p class="meto-desc">
                Bagaimana proses <br> pengambilan data di IDEA?
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/img/metodologi.png') }}" class="img-fluid meto-img" alt="">
        </div>
    </div>
</section>

<!-- CONTENT -->
<section class="px-5 py-4">

    <p class="meto-text">
        Kami menggunakan analisis web dengan logika Boolean (Boolean logic) pada universitas yang terdaftar menerima mahasiswa penyandang disabilitas...
    </p>

    <h6 class="fw-bold mt-4">Prosedur yang kami lakukan adalah sebagai berikut:</h6>

    <ol class="meto-list">
        <li>Lembaga-lembaga yang terdaftar di Layanan Mahasiswa Disabilitas (LMD)...</li>
        <li>Untuk memastikan keberagaman jenis disabilitas...</li>
        <li>Nama universitas, jenis layanan, dan lokasi regional dicantumkan...</li>
        <li>Istilah pencarian disesuaikan dengan berbagai istilah umum...</li>
        <li>Halaman web yang sesuai dengan kriteria pencarian...</li>
    </ol>

</section>

<!-- CATATAN -->
<section class="px-5 pb-5">
    <div class="note-wrapper text-center">

        <div class="note-title">
            CATATAN
        </div>

        <div class="note-box">
            Pengecekan oleh verifikator sudah dilakukan untuk memastikan informasi di laman tersebut relevan.
            Namun, IDEA hub tidak menjamin klaim universitas terkait layanan dan dukungan yang mereka sediakan
            untuk mahasiswa disabilitas.
        </div>

    </div>
</section>
@include('footer')
</body>
</html>