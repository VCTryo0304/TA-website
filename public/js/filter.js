// Filter berdasarkan kategori negeri atau swasta juga area kampus
function setKategori(kategori) {
    selectedKategori = kategori;
    applyFilter();
}

function setArea(area) {
    window.selectedArea = area;
    applyFilter();
}

function setLayanan(layanan) {
    window.selectedLayanan = layanan;
    applyFilter();
}

function applyFilter() {
    window.cards = document.querySelectorAll(".campus-section [data-kategori]");

    cards.forEach(card => {
        window.kategori = card.getAttribute("data-kategori") || "";
        window.area = card.getAttribute("data-area") || "";
        window.layanan = card.getAttribute("data-layanan") || "";

        window.layananArray = layanan.split(",").map(l => l.trim());

        window.matchKategori = (window.selectedKategori === "all" || kategori === window.selectedKategori);
        window.matchArea = (window.selectedArea === "all" || area === window.selectedArea);
        window.matchLayanan = (window.selectedLayanan === "all" || layananArray.includes(selectedLayanan));

        card.style.display = (matchKategori && matchArea && matchLayanan) ? "block" : "none";
           
    });
    updateIcons(); // 🔥 TAMBAH INI
}
// ================= UPDATE ICON =================
function updateIcons() {
    window.cards = document.querySelectorAll(".campus-card");

    cards.forEach(card => {
        window.layananAttr = card.getAttribute("data-layanan") || "";
        window.layananCard = layananAttr.split(",").map(l => l.trim());

        window.icons = card.querySelectorAll(".icons i");

        icons.forEach(icon => {
            window.iconLayanan = icon.getAttribute("data-layanan");

            if (!iconLayanan) return;

            if (window.selectedLayanan === "all") {
                icon.classList.remove("disabled","active");
            } 
            else if (layananCard.includes(iconLayanan)) {
                if (iconLayanan === window.selectedLayanan) {
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