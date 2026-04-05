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