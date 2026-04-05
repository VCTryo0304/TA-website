<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>IDEA – Cari Kampus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: 'Poppins', sans-serif;
    background: #fdf6e3;
}

.hero {
    padding: 80px 0;
}

.hero h1 {
    font-weight: 800;
}

.search-box {
    position: relative;
}

.search-box input {
    padding-right: 40px;
}

.search-box i {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}
:focus {
    outline: 3px solid #f5c76b;
    outline-offset: 3px;
}
.filter-section {
    margin-top: -40px;
}

.filter-card {
    background: #222;
    color: #fff;
    padding: 25px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 600;
}

.filter-card:hover {
    background: #2f2f2f;
}

.filter-card i:first-child {
    font-size: 22px;
    color: #ff4d4d;
}

.filter-card i:last-child {
    color: #f5c76b;
}

.filter-dropdown {
    background: #222;
    color: white;
    padding: 15px 25px;
    border-radius: 0 0 10px 10px;
}

.filter-dropdown p {
    margin: 5px 0;
    cursor: pointer;
}

.filter-dropdown p:hover {
    color: #f5c76b;
}
.filter-dropdown-full {
    background: #222;
    color: white;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    gap: 50px;
    width: 100%;
}


.campus-section {
    position: relative;
    padding: 60px 0;
}

.campus-card {
    background: #222;
    color: #fff;
    padding: 20px;
    border-radius: 18px;
    border-radius: 18px;
    overflow: hidden; /* PENTING agar gambar ikut radius */
    display: flex;
    flex-direction: column;
}

.campus-card img {
     width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
}
.card-body {
    padding: 25px;
    text-align: center;
}

.campus-card .icons i {
    background: #f5c76b;
    color: #000;
    padding: 10px;
    border-radius: 50%;
    margin: 4px;
    cursor: pointer;
}

/* Container Utama Legend */
.legend-panel {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 250px;
    background: white;
    padding: 20px;
    border-radius: 15px 0 0 15px;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease-in-out;
    z-index: 1000;
}

/* Panel saat tersembunyi (geser ke kanan) */
.legend-panel.hide {
    transform: translateY(-50%) translateX(100%);
}

/* Tombol X */
.close-btn {
    position: absolute;
    left: -40px; /* Posisi tombol X sedikit keluar dari panel */
    top: 50%;
    transform: translateY(-50%);
    background: white;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 5px 0 0 5px;
    box-shadow: -2px 0 5px rgba(0,0,0,0.1);
    cursor: pointer;
}

/* Tab Legend (Gambar kedua) */
.legend-tab {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    background: white;
    padding: 10px 20px;
    border-radius: 10px 0 0 10px;
    cursor: pointer;
    box-shadow: -2px 0 5px rgba(0,0,0,0.1);
    display: none; /* Awalnya sembunyi */
    z-index: 999;
}

footer {
    background: #222;
    color: #fff;
    padding: 40px;
}

.footer-wrapper {
    display: flex;
    justify-content: space-between;
}
.skip-link {
    position: absolute;
    left: -999px;
    top: 10px;
    background: #000;
    color: #fff;
    padding: 10px 15px;
    z-index: 2000;
    text-decoration: none;
    border-radius: 5px;
}

.skip-link:focus {
    left: 10px;
}
/* ===== TOOLTIP ICON KAMPUS ===== */

.campus-card .icons {
    position: relative;
}

.campus-card .icons i {
    position: relative;
    cursor: pointer;
}

/* Base tooltip */
.icon-tooltip {
    position: absolute;
    background: #f5c76b;
    color: #000;
    padding: 6px 10px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.2s ease;
    z-index: 9999;
}

/* Arah */
.icon-tooltip.top {
    bottom: 120%;
    left: 50%;
    transform: translateX(-50%);
}

.icon-tooltip.bottom {
    top: 120%;
    left: 50%;
    transform: translateX(-50%);
}

.icon-tooltip.left {
    right: 120%;
    top: 50%;
    transform: translateY(-50%);
}

.icon-tooltip.right {
    left: 120%;
    top: 50%;
    transform: translateY(-50%);
}

/* Tampilkan */
.campus-card .icons i.active .icon-tooltip {
    opacity: 1;
}
</style>
<body>
<a href="#mainContent" class="skip-link">Lewati ke Konten Utama</a>
<!-- ================= NAVBAR ================= -->
 <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4"
         role="navigation"
         aria-label="Navigasi Utama">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="D:\projek proposal corwdsource fund info\logokampus\logo.webp" class="img-fluid" style="max-width:150px;" alt="Ideahub">
           
        </a>

        <ul class="navbar-nav ms-auto gap-3">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Metodologi</a></li>
        </ul>
    </div>
</nav>
<!-- ================= SEARCH TOP RIGHT ================= -->
<div class="d-flex justify-content-end position-relative mb-5">

    <input 
        type="text"
        id="searchInput"
        class="form-control w-50 p-3"
        placeholder="Cari kampus..."
    >

    <i class="fa fa-search position-absolute"
       style="right: 26%; top: 50%; transform: translateY(-50%);">
    </i>

</div>

<!-- ================= HERO ================= -->
 <main id="mainContent"></main>
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>CARI KAMPUS</h1>
                <p>
                    Telusuri direktori penyedia pendidikan tinggi Indonesia
                    yang menawarkan sedikit lebih banyak dukungan kepada
                    siswa yang membutuhkannya.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="D:\projek proposal corwdsource fund info\logokampus\stickerideahub.png" class="img-fluid" alt="stikerideahub">
            </div>
        </div>
</section>
<!-- ================= FILTER ================= -->
<section class="filter-section">
    <div class="container">

        <!-- ROW CARD -->
        <div class="row g-3">

            <div class="col-md-4">
                <div class="filter-card" 
                tabindex="0"
                 role="button"
                aria-expanded="false"
                aria-controls="filterCollapse"
                data-bs-toggle="collapse"
                data-bs-target="#filterCollapse">
                    <i class="fa fa-th-large"></i>
                    <span>Kategori Kampus</span>
                    <i class="fa fa-plus ms-auto"></i>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="filter-card"
                tabindex="0"
                 role="button"
                aria-expanded="false"
                aria-controls="filterCollapse"
                data-bs-toggle="collapse"
                data-bs-target="#AreaCollapse">
                    <i class="fa fa-location-dot"></i>
                    <span>Area Kampus</span>
                    <i class="fa fa-plus ms-auto"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="filter-card" data-bs-toggle="collapse" data-bs-target="#LayananCollapse">
                    <i class="fa fa-wheelchair"></i>
                    <span>Layanan Kampus</span>
                    <i class="fa fa-plus ms-auto"></i>
                </div>
            </div>

        </div>

        <!-- DROPDOWN FULL WIDTH -->
        <div class="collapse mt-3" id="filterCollapse">
            <div class="filter-dropdown-full">
                <p>Swasta</p>
                <p>Negeri</p>
                <p>Internasional</p>
            </div>
        </div>

        <div class="collapse mt-3" id="AreaCollapse">
            <div class="filter-dropdown-full">
                <p>Sumatra</p>
                <p>Jawa</p>
                <p>Kalimantan</p>
                <p>Sulawesi</p>
                <p>Bali & Nusa Tenggara</p>
            </div>
        </div>

        <div class="collapse mt-3" id="LayananCollapse">
            <div class="filter-dropdown-full">
            <p>Pusat Layanan</p>
            <p>Dukungan Karir</p>
            <p>Jalur Admisi</p>
            <p>Dukungan Sosial</p>
            <p>Layanan Kesehatan Mental</p>
            <p>Aksesbilitas</p>
            <p>Akomodasi</p>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleLegend() {
    const panel = document.getElementById('legendPanel');
    const tab = document.getElementById('legendTab');
    
    // Toggle class 'hide' pada panel
    panel.classList.toggle('hide');
    
    // Logika muncul/hilang tab Legend
    if (panel.classList.contains('hide')) {
        setTimeout(() => { tab.style.display = 'block'; }, 300);
    } else {
        tab.style.display = 'none';
    }
    document.querySelectorAll('.campus-card .icons i').forEach(icon => {
    const tooltip = icon.querySelector('.icon-tooltip');
    if (!tooltip) return;

    icon.addEventListener('mouseenter', () => {
        icon.classList.add('active');
        tooltip.className = 'icon-tooltip'; // reset arah

        const rect = icon.getBoundingClientRect();
        const spaceTop = rect.top;
        const spaceBottom = window.innerHeight - rect.bottom;
        const spaceLeft = rect.left;
        const spaceRight = window.innerWidth - rect.right;

        if (spaceTop > 60) {
            tooltip.classList.add('top');
        } else if (spaceBottom > 60) {
            tooltip.classList.add('bottom');
        } else if (spaceRight > spaceLeft) {
            tooltip.classList.add('right');
        } else {
            tooltip.classList.add('left');
        }
    });

    icon.addEventListener('mouseleave', () => {
        icon.classList.remove('active');
    });
});
}

document.getElementById("searchInput").addEventListener("keyup", function() {

    let searchValue = this.value.toLowerCase();

    let campuses = document.querySelectorAll(".campus-item");

    campuses.forEach(function(campus){

        let name = campus.querySelector(".campus-name").textContent.toLowerCase();

        if(name.includes(searchValue)){
            campus.style.display = "block";
        } else {
            campus.style.display = "none";
        }
        let speech;

    function startRead() {
        stopRead();
        const text = document.getElementById("main-content").innerText;
        speech = new SpeechSynthesisUtterance(text);
        speech.lang = "id-ID";
        window.speechSynthesis.speak(speech);
    }

    function stopRead() {
        window.speechSynthesis.cancel();
    }
    });

});
</script>
</body>
</html>
