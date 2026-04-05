      // --- 1. INISIALISASI VARIABEL GLOBAL ---
const panel = document.getElementById("accessibilityPanel");
const wrapper = document.getElementById("zoomWrapper");
let zoomLevel = 1;
let idleTimer;
//let speech = new SpeechSynthesisUtterance();
//speech.lang = "id-ID";
let isMutedManually = false; //Penanda  agar tidak langsung dibaca lagi saat stop 

// --- 2. LOGIKA PANEL & UI ---
function togglePanel() {
    panel.classList.toggle("hide");
}

function closePanel() {
    panel.classList.add("hide");
}

// --- 3. LOGIKA TTS (Text to Speech) ---

// Berhenti membaca total
function stopRead() {
    window.speechSynthesis.cancel();
    clearTimeout(idleTimer);
    isMutedManually = true; //kunci suara otomatis
}

// Fungsi pembantu bicara (agar tidak antre)
function speakText(text) {
    if(isMutedManually) return; //jika sudah stop manual, jangan langsung baca lagi
    window.speechSynthesis.cancel(); 
    const msg = new SpeechSynthesisUtterance(text);
    msg.lang = "id-ID";
    // Reset status mute jika sudah selesai bicara (opsional)
    msg.onend = () => { isMutedManually = false; };
    window.speechSynthesis.speak(msg);
}

// Tombol manual "Baca Halaman"
function startRead() {
    isMutedManually = false; // Buka kunci saat tombol baca ditekan
    speakText(document.body.innerText);
}

// Fitur 1: Baca seluruh halaman jika diam 3 detik
function resetIdleTimer() {
    clearTimeout(idleTimer);
    if (isMutedManually) return;
    idleTimer = setTimeout(() => {
       speakText(document.body.innerText);
    }, 3000); 
}

// Hover Event
document.addEventListener("mouseover", (e) => {
    if (panel.contains(e.target) || !e.target.innerText || isMutedManually) return;
    
    let text = e.target.innerText.trim();
    if (text.length > 2) {
        window.speechSynthesis.cancel();
        const msg = new SpeechSynthesisUtterance(text);
        msg.lang = "id-ID";
        window.speechSynthesis.speak(msg);
    }
});

// Interaksi User untuk Reset Status "Mute"
// Jika user klik apapun di luar panel, kita anggap mereka ingin fitur TTS aktif kembali
document.addEventListener("click", (e) => {
    if (!panel.contains(e.target)) {
        isMutedManually = false;
    }
});

// Reset timer saat ada aktivitas
document.addEventListener("mousemove", () => {
    // Kami tidak memanggil stopRead() di sini agar suara tidak terputus-putus saat kursor gerak
    resetIdleTimer();
});

resetIdleTimer();

// --- 3. LOGIKA ZOOM ---
function applyZoom() {
    wrapper.style.transform = `scale(${zoomLevel})`;
    wrapper.style.transformOrigin = "top left";
    
    // Mencegah overflow horizontal
    wrapper.style.width = zoomLevel > 1 ? (100 / zoomLevel) + "%" : "100%";
}

function zoomIn() {
    if (zoomLevel < 2.0) {
        zoomLevel += 0.2;
        applyZoom();
    }
}

function zoomOut() {
    if (zoomLevel > 0.6) {
        zoomLevel -= 0.2;
        applyZoom();
    }
}

function resetZoom() {
    zoomLevel = 1;
    applyZoom();
}
// ================= MAGNIFIER =================
let magnifierActive = false;

function toggleMagnifier() {
    magnifierActive = !magnifierActive;
    const lens = document.getElementById("magnifierLens");

    if (magnifierActive) {
        lens.style.display = "block";
        document.addEventListener("mousemove", moveMagnifier);
    } else {
        lens.style.display = "none";
        document.removeEventListener("mousemove", moveMagnifier);
    }
}

function moveMagnifier(e) {
    const lens = document.getElementById("magnifierLens");
    
    // Posisikan lensa di tengah kursor
    let x = e.clientX;
    let y = e.clientY;

    lens.style.left = (x - 75) + "px";
    lens.style.top = (y - 75) + "px";
}
// --- 4. FITUR AKSESIBILITAS LAINNYA ---
// ================= VOICE COMMAND PRO =================
let recognition;
let isListening = false;

// TOGGLE (ON / OFF)
function toggleVoice() {
    if (isListening) {
        stopVoice();
        speakFeedback("Voice dimatikan");
    } else {
        startVoice();
        speakFeedback("Voice diaktifkan");
    }
}

// START VOICE
function startVoice() {
    if (!('webkitSpeechRecognition' in window)) {
        alert("Gunakan Google Chrome untuk fitur voice.");
        return;
    }

    recognition = new webkitSpeechRecognition();
    recognition.lang = "id-ID";
    recognition.continuous = true; // 🔥 penting
    recognition.interimResults = false;

    recognition.onstart = () => {
        isListening = true;
        console.log("🎤 Voice aktif");

        // indikator visual
        document.body.classList.add("voice-active");
    };

    recognition.onend = () => {
        isListening = false;
        console.log("🎤 Voice berhenti");

        document.body.classList.remove("voice-active");
    };

    recognition.onerror = (event) => {
        console.error("Error:", event.error);

        if (event.error === "not-allowed") {
            alert("Izinkan akses mikrofon!");
        }
    };

    recognition.onresult = (event) => {
        let command = event.results[event.results.length - 1][0].transcript.toLowerCase();
        //console.log("Perintah:", command);

        handleCommand(command);
    };

    recognition.start();
}

// STOP VOICE
function stopVoice() {
    if (recognition) {
        recognition.stop();
    }
}

// ================= COMMAND =================
function handleCommand(command) {

    // 🔍 SCROLL
    if (command.includes("scroll bawah") || command.includes("turun")) {
        window.scrollBy({ top: 500, behavior: 'smooth' });
        speakFeedback("Scroll ke bawah");
    }

    else if (command.includes("scroll atas") || command.includes("naik")) {
        window.scrollBy({ top: -500, behavior: 'smooth' });
        speakFeedback("Scroll ke atas");
    }

    // 🔊 BACA HALAMAN
    else if (command.includes("baca")) {
        startRead();
        speakFeedback("Membaca halaman");
    }

    else if (command.includes("stop") || command.includes("berhenti")) {
        stopRead();
        speakFeedback("Berhenti membaca");
    }

    // ♿ PANEL
    else if (command.includes("aksesibilitas")) {
        togglePanel();
        speakFeedback("Membuka aksesibilitas");
    }

    // 🔎 SEARCH (AMAN)
    else if (command.includes("cari")) {
        let keyword = command.replace("cari", "").trim();

        let input = document.getElementById("searchInput");

        if (input) {
            input.value = keyword;
            input.dispatchEvent(new Event('input'));
            speakFeedback("Mencari " + keyword);
        } else {
            speakFeedback("Fitur pencarian tidak tersedia di halaman ini");
        }
    }

    else {
        speakFeedback("Perintah tidak dikenali");
    }
}

// ================= SUARA FEEDBACK =================
function speakFeedback(text) {
    let msg = new SpeechSynthesisUtterance(text);

    const voices = speechSynthesis.getVoices();
    const indoVoice = voices.find(v => v.lang.toLowerCase().includes("id"));

    if (indoVoice) {
        msg.voice = indoVoice;
    } else {
        msg.lang = "id-ID";
    }

    window.speechSynthesis.speak(msg);
}

function toggleImages() { document.body.classList.toggle("hide-images"); }
//perbesar dan perkecil teks
let fontSize = 16;

function increaseFont() {
    fontSize += 2;
    document.body.style.fontSize = fontSize + "px";
}

function decreaseFont() {
    fontSize -= 2;
    document.body.style.fontSize = fontSize + "px";
}

function toggleContrast() { document.body.classList.toggle("high-contrast"); }
function toggleMono() { document.body.classList.toggle("monochrome"); }
function toggleCursor() { document.body.classList.toggle("big-cursor"); }
function toggleAnimation() { document.body.classList.toggle("pause-anim"); }

function setSpacing(val) {
    document.body.style.lineHeight = val;
    document.body.style.letterSpacing = val > 1.5 ? "1px" : "normal";
}

function setAlign(type) {
    const content = document.getElementById("main-content"); // Gunakan tanda hubung
    if (content) {
        content.style.textAlign = type;
    }
}

//=======================8 font change dyslecsic================
function setFont(type) {
    const content = document.getElementById("main-content");
    if (!content) return;

    // Hapus semua class font yang mungkin sudah ada sebelumnya
    content.classList.remove(
        "font-default",
        "font-sans",
        "font-serif",
        "font-dyslexic"
    );

    // Tambah class yang dipilih
    content.classList.add("font-" + type);
}
/// 9 spacing controls - PERBAIKAN ID
function setLineSpacing(value) {
    const content = document.getElementById("main-content");
    if (content) content.style.lineHeight = value;
}

function setLetterSpacing(value) {
    const content = document.getElementById("main-content");
    if (content) content.style.letterSpacing = value + "px";
}

function setWordSpacing(value) {
    const content = document.getElementById("main-content");
    if (content) content.style.wordSpacing = value + "px";
}

function resetSpacing() {
    const content = document.getElementById("main-content");

    if (content) {
        content.style.lineHeight = "1.5";
        content.style.letterSpacing = "0px";
        content.style.wordSpacing = "0px";
    }

    // Reset slider ke nilai awal
    const sliders = document.querySelectorAll("#accessibilityPanel input[type=range]");
    sliders.forEach(input => {
        input.value = input.getAttribute('value'); // Mengambil nilai default dari atribut HTML
    });
}


