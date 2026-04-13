<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
            <title>IDEA – Cari Kampus</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Bootstrap -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- font change dyslecsyc-->
                <link href="https://cdn.jsdelivr.net/npm/opendyslexic@1.0.3/opendyslexic.min.css" rel="stylesheet">

                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

                <!-- Custom CSS -->
                <link rel="stylesheet" href="{{ asset('css/headerTA.css') }}">
                <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
                <link rel="stylesheet" href="{{ asset('css/aksesibilitas.css') }}">
        
    </head>
 
    <body>
        <a href="#mainContent" class="skip-link">Lewati ke Konten Utama</a>
        <!-- ================= NAVBAR ================= -->
        <header role="banner">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4"
                role="navigation"
                aria-label="Navigasi Utama">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="{{ asset('logo-univ/logo.webp') }}" class="img-fluid" style="max-width:150px;" alt="Ideahub" aria-hidden="true">
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
        </header>
        <!-- ================= SEARCH TOP RIGHT ================= -->
        <div class="d-flex justify-content-end position-relative mb-5">

            <!-- Label untuk screen reader -->
            <label for="searchInput" class="visually-hidden">Cari Kampus</label>
            <input 
                type="text"
                id="searchInput"
                class="form-control w-50 p-3"
                placeholder="Cari kampus...">

            <i class="fa fa-search position-absolute"
                style="right: 26%; top: 50%; transform: translateY(-50%);">
            </i>

        </div>
        <!-- ================= HERO ================= -->
        <main id="mainContent" tabindex="-1" role="main">
            <section class="hero" aria-labelledby="heroTitle" role="region">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 id="heroTitle">CARI KAMPUS</h1>
                            <p>
                                Telusuri direktori penyedia pendidikan tinggi Indonesia
                                yang menawarkan sedikit lebih banyak dukungan kepada
                                siswa yang membutuhkannya.
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/stickerideahub.png') }}" class="img-fluid" alt="stikerideahub">
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================= FILTER ================= -->
            <section class="filter-section"  aria-label="Filter  Kampus" role="region">
                <div class="container">
                    <!-- ROW CARD -->
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="filter-card" 
                                tabindex="0"
                                role="button"
                                aria-label="Filter kategori kampus"
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
                        <p onclick="setKategori('swasta')">Swasta</p>
                        <p onclick="setKategori('negeri')">Negeri</p>
                        <p onclick="setKategori('internasional')">Internasional</p>
                    </div>
                </div>
                <div class="collapse mt-3" id="AreaCollapse">
                    <div class="filter-dropdown-full">
                        <p onclick="setArea('sumatra')">Sumatra</p>
                        <p onclick="setArea('jawa')">Jawa</p>
                        <p onclick="setArea('kalimantan')">Kalimantan</p>
                        <p onclick="setArea('sulawesi')">Sulawesi</p>
                        <p onclick="setArea('bali')">Bali & Nusa Tenggara</p>
                    </div>
                </div>
                <div class="collapse mt-3" id="LayananCollapse">
                    <div class="filter-dropdown-full">
                        <p onclick="setLayanan('pusat')">
                            <i class="fa-solid fa-comments"></i>Pusat Layanan
                        </p>
                        <p onclick="setLayanan('karir')">
                            <i class="fa fa-briefcase"></i>Dukungan Karir
                        </p>
                        <p onclick="setLayanan('admisi')">
                            <i class="fa fa-graduation-cap disabled"></i>Jalur Admisi
                        </p>
                        <p onclick="setLayanan('sosial')">
                            <i class="fa fa-heart"></i>Dukungan Sosial
                        </p>
                        <p onclick="setLayanan('kesehatan')">
                            <i class="fa fa-location-dot disabled"></i>Layanan Kesehatan Mental
                        </p>
                        <p onclick="setLayanan('aksesbilitas')">
                            <i class="fa fa-wheelchair"></i>Aksesbilitas
                        </p>
                        <p onclick="setLayanan('akomodasi')">
                            <i class="fa fa-house disabled"></i>Akomodasi
                        </p>
                    </div>
                </div>
            </section>
            <!-- ================= KAMPUS LIST ================= -->
            <section class="campus-section" aria-label="Daftar Kampus" role="region">
                <div class="container">
                    <div class="row g-4">
                        <!-- Card -->
                        @include('kampus.UI')
                        @include('kampus.UIM')
                        @include('kampus.ULM')
                        @include('kampus.UNJ')
                        @include('kampus.USD')
                        @include('kampus.UNY')
                        @include('kampus.USA')
                        @include('kampus.UNISMA')
                        @include('kampus.UNAND')
                        @include('kampus.UHAMZAN')
                        @include('kampus.JAYABAYA')
                        @include('kampus.UPI')
                        @include('kampus.IBNUKHALDUN')
                        @include('kampus.AL-AZHAR')
                        @include('kampus.BINUS')
                        @include('kampus.JUANDA')
                        @include('kampus.AIRLANGGA')
                        @include('kampus.UM')
                        @include('kampus.UNM')
                        @include('kampus.PAMULANG')
                        @include('kampus.UB')
                        @include('kampus.LANCANGKUN')
                        @include('kampus.SURABAYA')
                        @include('kampus.UIN')
                        @include('kampus.EDINBURGH')
                        @include('kampus.TELKOM')
                        <!-- Legend Panel -->
                        <div id="legendPanel" class="legend-panel hide" role="complementary" aria-label="Keterangan ikon layanan">
                            <!-- Tombol Close -->
                            <button class="close-btn" onclick="toggleLegend()" aria-label="Tutup legend">✖</button>
                            <div class="legend-content">
                                <h5>Legend</h5>
                                <ul>
                                    <li><i class="fa-solid fa-comments" data-layanan="pusat"></i> Pusat Layanan</li>
                                    <li><i class="fa fa-briefcase" data-layanan="karir"></i> Dukungan Karir</li>
                                    <li><i class="fa fa-graduation-cap" data-layanan="admisi"></i> Jalur Admisi</li>
                                    <li><i class="fa fa-heart" data-layanan="sosial"></i> Dukungan Sosial</li>
                                    <li><i class="fa fa-location-dot" data-layanan="kesehatan"></i> Layanan Kesehatan Mental</li>
                                    <li><i class="fa fa-wheelchair" data-layanan="aksesbilitas"></i> Aksesibilitas</li>
                                    <li><i class="fa fa-house" data-layanan="akomodasi"></i> Akomodasi</li>

                                </ul>
                            </div>
                        </div>
                        <!-- Legend Tab -->
                        <div id="legendTab" class="legend-tab" onclick="toggleLegend()">
                            Legend
                        </div>
                    </div>
                </section>
        </main>
        <!-- ================= FOOTER ================= -->
        @include('footer')
        <!-- ================= javascript legend ================= -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function toggleLegend() {
            const panel = document.getElementById('legendPanel');
            panel.classList.toggle('hide');
            }

            // Inisialisasi saat halaman pertama kali dibuka
            document.addEventListener("DOMContentLoaded", function() {
                const panel = document.getElementById('legendPanel');
                const tab = document.getElementById('legendTab');
            });

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

            document.querySelectorAll(".filter-dropdown-full p").forEach(p => {
                p.addEventListener("click", function() {
                    this.parentElement.querySelectorAll("p").forEach(el => el.classList.remove("active"));
                    this.classList.add("active");
                });
            });
            //update icon layanan kampus setelah filter

            function updateIcons() {
                let cards = document.querySelectorAll(".campus-card");

                cards.forEach(card => {
                    let layananCard = card.getAttribute("data-layanan").split(",");

                    let icons = card.querySelectorAll(".icons i");

                    icons.forEach(icon => {
                        let iconLayanan = icon.getAttribute("data-layanan");

                    if (selectedLayanan === "all") {
                        icon.classList.remove("disabled");
                        icon.classList.remove("active");
                    } 
                    else if (layananCard.includes(iconLayanan)) {
                        if (iconLayanan === selectedLayanan) {
                            icon.classList.add("active");   // kuning
                            icon.classList.remove("disabled");
                        } else {
                            icon.classList.remove("active");
                            icon.classList.add("disabled"); // abu
                        }
                    } 
                    else {
                        icon.classList.remove("active");
                        icon.classList.add("disabled");
                    }
                });
            });
        }

// Filter berdasarkan kategori negeri atau swasta juga area kampus
let selectedKategori = "all";
let selectedArea = "all";
let selectedLayanan = "all";

function setKategori(kategori) {
    selectedKategori = kategori;
    applyFilter();
}

function setArea(area) {
    selectedArea = area;
    applyFilter();
}

function setLayanan(layanan) {
    selectedLayanan = layanan;
    applyFilter();
}

function applyFilter() {
    let cards = document.querySelectorAll(".campus-section [data-kategori]");

    cards.forEach(card => {
        let kategori = card.getAttribute("data-kategori") || "";
        let area = card.getAttribute("data-area") || "";
        let layanan = card.getAttribute("data-layanan") || "";

        let layananArray = layanan.split(",").map(l => l.trim());

        let matchKategori = (selectedKategori === "all" || kategori === selectedKategori);
        let matchArea = (selectedArea === "all" || area === selectedArea);
       //let layananArray = layanan.split(",");

        let matchLayanan = (selectedLayanan === "all" || layananArray.includes(selectedLayanan));

        if (matchKategori && matchArea && matchLayanan) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
    updateIcons(); // 🔥 TAMBAH INI
}

// ================= UPDATE ICON =================
function updateIcons() {
    let cards = document.querySelectorAll(".campus-card");

    cards.forEach(card => {
        let layananAttr = card.getAttribute("data-layanan") || "";
        let layananCard = layananAttr.split(",").map(l => l.trim());

        let icons = card.querySelectorAll(".icons i");

        icons.forEach(icon => {
            let iconLayanan = icon.getAttribute("data-layanan");

            if (!iconLayanan) return;

            if (selectedLayanan === "all") {
                icon.classList.remove("disabled");
                icon.classList.remove("active");
            } 
            else if (layananCard.includes(iconLayanan)) {
                if (iconLayanan === selectedLayanan) {
                    icon.classList.add("active");
                    icon.classList.remove("disabled");
                } else {
                    icon.classList.remove("active");
                    icon.classList.add("disabled");
                }
            } 
            else {
                icon.classList.remove("active");
                icon.classList.add("disabled");
            }
        });
    });
}
//=============SEARCH==============
document.getElementById("searchInput").addEventListener("input", function() {
    let searchValue = this.value.toLowerCase();
    let campusCards = document.querySelectorAll(".campus-section [data-kategori]");

    campusCards.forEach(card => {
        let name = card.querySelector("h5")?.textContent.toLowerCase() || "";
              if (name.includes(searchValue)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
            document.querySelector(".close-btn").addEventListener("click", () => {
    console.log("clicked");
});
</script>


<!--3 ACCESSIBILITY PANEL -->
<div id="accessibilityPanel" class="accessibility-panel" role="region" aria-label="Pengaturan Aksesibilitas">

   <button class="close-btn" onclick="event.stopPropagation(); APR_PANEL.toggle()">✖</button>

    <h5>Aksesibilitas</h5>
    @include('button-aksesibilitas')
    
    
    
</div>

<!-- TAB aksesibilitas  class="accessibility-tab"-->

<div id="accessibilityTab" class="accessibility-tab" onclick="APR_PANEL.toggle()">
    <i class="fa-solid fa-universal-access" style="color: red; font-size: 40px;"></i>
</div>
<!--tampilan bundle-->
<script src="https://cdn.jsdelivr.net/gh/VCTryo0304/aksesibilitas-plugin-1303223025@latest/bundle/tampilan.bundle.js"></script>
<!--teks bundle-->
<script src="https://cdn.jsdelivr.net/gh/VCTryo0304/aksesibilitas-plugin-1303223025@latest/bundle/teks.bundle.js"></script>
<!--aksesibilitas bundle-->
<script src="https://cdn.jsdelivr.net/gh/VCTryo0304/aksesibilitas-plugin-1303223025@latest/bundle/aksesibiltas.bundle.js"></script>
</body>
</html>
