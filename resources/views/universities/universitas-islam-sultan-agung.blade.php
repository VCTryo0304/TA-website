<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UNIVERSITAS LAMBUNG MANGKURAT – Informasi Kampus</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #000;
        }

        header {
            background: #f2ff9c;
            padding: 30px 60px 50px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar img {
            height: 48px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        .navbar a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            color: #000;
        }

        .hero {
            text-align: center;
            margin-top: 40px;
        }

        .hero h1 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .hero h2 {
            font-size: 42px;
            font-weight: 800;
            color: #d23b3b;
            margin: 0;
        }

        .hero img {
            margin-top: 30px;
            max-width: 900px;
            width: 100%;
        }

        .footer-campus {
            max-width: 1200px;
            margin: 80px auto 40px;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 1.5fr 1fr;
            gap: 40px;
        }

        .footer-campus h3 {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .footer-campus p {
            font-size: 14px;
            line-height: 1.8;
            color: #333;
        }

        .info-item {
            margin-bottom: 14px;
        }

        .info-item b {
            display: block;
            font-weight: 700;
        }

        .social-icons a {
            font-size: 20px;
            margin-right: 12px;
            color: #000;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #d23b3b;
        }

        .logo-ui {
            width: 140px;
            margin-top: 20px;
        }

        
        .service-section {
            max-width: 900px;
            margin: 90px auto;
            padding: 0 20px;
            text-align: left; /* KUNCI RATA KIRI */
        }


        .service-item {
            margin-bottom: 55px;
        }

        .service-desc {
            margin-left: 0; 
        }

        .service-title {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .service-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f4e7c3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
             margin-top: 2px;
        }

        
        .service-title h3 {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            color: #d23b3b;
            text-transform: uppercase;
        }
        .service-question {
            font-weight: 600;
            margin-bottom: 4px;
            font-size: 16px;
    }

        .service-desc {
            font-size: 14px;
            line-height: 1.6;
            margin-left: 0; /* pastikan tidak ada indentasi */
        }


        footer {
            background: #222;
            color: #ccc;
            padding: 60px 20px;
        }

        .footer-wrapper {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        .footer-logo img {
            width: 140px;
        }

        .footer-contact h4 {
            color: #fff;
        }

        .footer-social a {
            font-size: 20px;
            margin-right: 12px;
            color: #ccc;
            text-decoration: none;
        }

        .footer-social a:hover {
            color: #d23b3b;
        }
    </style>
</head>

<body>

<header>
    <div class="navbar">
        <img src="D:\projek proposal corwdsource fund info\logokampus\logo.webp" class="img-fluid" style="max-width:150px;" alt="Ideahub">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Metodologi</a></li>
        </ul>
    </div>

    <div class="hero">
        <h1>UNY</h1>
        <h2>Universitas Negeri Yogyakarta</h2>
        <img src="D:\projek proposal corwdsource fund info\gambar kampus\UNY.webp" alt="Universitas Negeri Yogyakarta">
    </div>
</header>

<section class="footer-campus">

    <!-- Kolom 1 -->
    <div>
        <h3>Tentang Kampus</h3>
        <p>
        Universitas Negeri Yogyakarta (UNY) adalah perguruan tinggi negeri yang berlokasi di Yogyakarta, Indonesia. Universitas ini telah meraih akreditasi “A” dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), yang mengukuhkan keunggulannya dalam pendidikan dan penelitian. UNY dikenal dengan program-program unggulannya di bidang pendidikan, seni, olahraga, dan sains. Dengan tingkat penerimaan yang kompetitif, sekitar 20%, UNY menunjukkan proses seleksi mahasiswa yang ketat.
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
            https://www.uny.ac.id/
        </div>

        <div class="info-item">
            <b>Address</b>
          Jl. Colombo No.1 Karangmalang Yogyakarta 55281
        </div>

        <div class="info-item">
            <b>Email</b>
           humas@uny.ac.id
        </div>
    </div>

    <!-- Kolom 3 -->
    <div>
        <h3>Kontak</h3>

        <div class="info-item">
            <b>Telephone</b>
            0274-586168
        </div>

        <div class="info-item">
            <b>Social Media</b>
            <div class="social-icons">
                <a href="https://instagram.com" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://youtube.com" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://twitter.com" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>

        <img src="D:\projek proposal corwdsource fund info\logokampus\UNY.webp" alt="Logo UNY" class="logo-uim">
    </div>

</section>

<!-- ================= SERVICES ================= -->
<section class="service-section">
    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">🏠</div>
            <h3>Akomodasi Akademik</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Akomodasi Akademik?
        </div>
        <div class="service-desc">
            Tidak tersedia informasi mengenai akomodasi fasilitas untuk kegiatan akademik bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY).
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">💡</div>
            <h3>Layanan Kesehatan Mental</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Layanan Kesehatan Mental?
        </div>
        <div class="service-desc">
           Tidak tersedia informasi mengenai layanan kesehatan mental yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, UNY memiliki Unit Pelaksanaan Teknis Layanan Bimbingan Konseling (UPTLBK) bagi mahasiswa secara umum.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">♿</div>
            <h3>Aksesibilitas Kampus</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Aksesibilitas Kampus?
        </div>
        <div class="service-desc">
            Universitas Negeri Yogyakarta (UNY) menyediakan berbagai fasilitas aksesibilitas, antara lain ramp untuk pengguna kursi roda dan lift.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">&#128101;</div>
            <h3>Dukungan Sosial</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Dukungan Sosial?
        </div>
        <div class="service-desc">
           Tidak tersedia informasi mengenai layanan dukungan sosial di Universitas Negeri Yogyakarta (UNY).
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">&#127891;</div>
            <h3>Jalur Admisi & Beasiswa untuk Disabilitas</h3>
        </div>
        <div class="service-question">
            Apakah universitas ini memiliki Jalur Admisi & Beasiswa untuk Disabilitas?
        </div>
        <div class="service-desc">
          Tidak tersedia informasi mengenai jalur penerimaan yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, berdasarkan informasi yang ada, UNY menyediakan beasiswa khusus bagi mahasiswa penyandang disabilitas melalui program Afirmasi Pendidikan Tinggi (ADik) dan ADik Papua. Selain itu, UNY juga menawarkan berbagai beasiswa bagi mahasiswa secara umum, seperti Kartu Indonesia Pintar (KIP) Kuliah, beasiswa Peningkatan Prestasi Akademik (PPA), beasiswa Bantuan Belajar Mahasiswa (BBM), beasiswa Unggulan Kemendikbud, dan beasiswa lainnya.
        </div>
    </div>

    <div class="service-item">
        <div class="service-title">
            <div class="service-icon">&#128188;</div>
            <h3>Dukungan Karir</h3>
        </div>
        <div class="service-question">
        Apakah universitas ini memiliki Dukungan Karir?

        </div>
        <div class="service-desc">
        Tidak tersedia informasi mengenai layanan dukungan karier yang secara khusus ditujukan bagi mahasiswa penyandang disabilitas di Universitas Negeri Yogyakarta (UNY). Namun, UNY memiliki Subdirektorat Karier dan Alumni bagi mahasiswa secara umum.
    </div>

     
    <div class="service-item">
        <div class="service-title">
            <div class="icon icon-chat">
                <i class="fa-solid fa-comments-question"></i>
                <span class="badge-q">?</span>
            </div>
            <h3>Unit/Pusat Layanan Disabilitas</h3>
        </div>
        <div class="service-question">
       Apakah universitas ini memiliki Unit/Pusat Layanan Disabilitas? 
        </div>
        <div class="service-desc">
            Universitas Negeri Yogyakarta diketahui memiliki Pusat Studi Layanan Disabilitas. Namun, tidak tersedia informasi lebih lanjut mengenai layanan yang disediakan.
    </div>
</section>
 <!-- ================= FOOTER ================= -->
<footer>
    <div class="footer-wrapper">
        <div class="footer-logo">
            <img src="D:\projek proposal corwdsource fund info\logokampus\logo.webp" class="img-fluid" style="max-width:150px;" alt="Ideahub">
            <p>
                Indonesian Disability-Inclusion<br>
                for Education and Accessibility
            </p>
        </div>

        <div class="footer-contact">
            <h4>Kontak Kami</h4>
            <p>
                Jl. Telekomunikasi No.1, Terusan Buahbatu – Bojongsoang<br>
                Kabupaten Bandung, Jawa Barat 40257
            </p>
            <p>
                ideahub@ideahub.com<br>
                +62 21 2345 6789
            </p>
            <div class="footer-social">
                <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://youtube.com"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
            </div>
            
        </div>
    </div>
</footer>
</body>
</html>
