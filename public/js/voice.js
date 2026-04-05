//4================TTS===============   
let speech;

function startRead() {
    stopRead();

    const content = document.getElementById("mainContent");
    if (!content) return;

    const text = content.innerText.substring(0, 2000);
    if (!text) {
        alert("Tidak ada teks untuk dibaca");
        return;
    }

    speech = new SpeechSynthesisUtterance(text);
    speech.onstart = () => console.log("Mulai baca");
    speech.onend = () => console.log("Selesai");
    speech.onerror = (e) => console.error("Error:", e);
    function setVoice() {
        const voices = speechSynthesis.getVoices();
         const indoVoice = voices.find(v => v.lang.toLowerCase().includes("id"));
        if (indoVoice) {
            speech.voice = indoVoice;
        } else {
            speech.lang = "id-ID";
        }

        window.speechSynthesis.speak(speech);
    }
    

    if (speechSynthesis.getVoices().length === 0) {
        speechSynthesis.onvoiceschanged = setVoice;
    } else {
        setVoice();
    }
}
function stopRead() {
    window.speechSynthesis.cancel();
}

// 5.================= VOICE COMMAND MODE=================
let recognition;
let isListening = false;

function startVoice() {
    if (!('webkitSpeechRecognition' in window)) {
        alert("Browser tidak mendukung voice command");
        return;
    }

    recognition = new webkitSpeechRecognition();
    recognition.lang = "id-ID";
    recognition.continuous = true;
    recognition.interimResults = false;

    recognition.onstart = () => {
        isListening = true;
        console.log("🎤 Voice aktif");
    };

    recognition.onend = () => {
        isListening = false;
        console.log("🎤 Voice berhenti");
    };

    recognition.onresult = function(event) {
        let transcript = event.results[event.results.length - 1][0].transcript.toLowerCase();
        console.log("Perintah:", transcript);

        handleCommand(transcript);
    };

    recognition.start();
}

function stopVoice() {
    if (recognition) recognition.stop();
}
function handleCommand(command) {

    // 🔍 SEARCH
    if (command.includes("cari")) {

    let keyword = command
        .replace("cari", "")
        .replace(/[^\w\s]/gi, "")
        .toLowerCase()
        .trim();

    console.log("Keyword bersih:", keyword);

    let input = document.getElementById("searchInput");

    input.value = keyword;
    input.dispatchEvent(new Event('input'));

    speakFeedback("Mencari " + keyword);
}
    // ⬇️ SCROLL
    else if (command.includes("scroll bawah")) {
        window.scrollBy({ top: 500, behavior: 'smooth' });
    }
    else if (command.includes("scroll atas")) {
        window.scrollBy({ top: -500, behavior: 'smooth' });
    }

    // 📂 FILTER
    else if (command.includes("buka filter")) {
        document.getElementById("filterCollapse")?.classList.add("show");
        speakFeedback("Filter dibuka");
    }

    // ♿ PANEL AKSESIBILITAS
    else if (command.includes("aksesibilitas")) {
        togglePanel();
        speakFeedback("Panel aksesibilitas dibuka");
    }

    // 🔊 TTS
    else if (command.includes("baca")) {
        startRead();
    }
    else if (command.includes("stop")) {
        stopRead();
    }

    else {
        speakFeedback("Perintah tidak dikenali");
    }
}
function speakFeedback(text) {
    let msg = new SpeechSynthesisUtterance(text);
    msg.lang = "id-ID";
    window.speechSynthesis.speak(msg);
}