// Set footer year
const yearEl = document.getElementById("year");
if (yearEl) yearEl.textContent = new Date().getFullYear();

// Mobile menu toggle
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const menuIcon = document.getElementById("menuIcon");

if (menuBtn && mobileMenu && menuIcon) {
    // pastikan menu tertutup dari awal
    window.addEventListener("load", () => {
        if (window.innerWidth < 768) {
            mobileMenu.classList.add("hidden");
            menuBtn.setAttribute("aria-expanded", "false");
        }
    });

    menuBtn.addEventListener("click", () => {
        const isHidden = mobileMenu.classList.toggle("hidden");
        const open = !isHidden;

        menuBtn.setAttribute("aria-expanded", open);

        // Ganti ikon (hamburger <-> X)
        menuIcon.innerHTML = open
            ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>'
            : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
    });

    // Tutup otomatis saat resize ke layar besar
    window.addEventListener("resize", () => {
        if (
            window.innerWidth >= 768 &&
            !mobileMenu.classList.contains("hidden")
        ) {
            mobileMenu.classList.add("hidden");
            menuIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
        }
    });
}

// Scroll shadow on navbar
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
    if (window.scrollY > 6) {
        navbar.classList.add("shadow-md");
    } else {
        navbar.classList.remove("shadow-md");
    }
});

// Search / filter services (live)
const searchService = document.getElementById("searchService");
const serviceCards = document.querySelectorAll("#serviceList .service-card");
if (searchService) {
    searchService.addEventListener("input", (e) => {
        const q = e.target.value.trim().toLowerCase();
        serviceCards.forEach((card) => {
            const text = card.innerText.toLowerCase();
            card.style.display = text.includes(q) ? "" : "none";
        });
    });
}

// Chat widget toggle & simple reply
const openChat = document.getElementById("openChat");
const chatBox = document.getElementById("chatBox");
const chatInput = document.getElementById("chatInput");
const sendChat = document.getElementById("sendChat");
const chatContent = document.getElementById("chatContent");

openChat &&
    openChat.addEventListener("click", () => {
        const isHidden = chatBox.classList.toggle("hidden");
        openChat.setAttribute("aria-expanded", !isHidden);
    });

sendChat &&
    sendChat.addEventListener("click", () => {
        const msg = chatInput.value.trim();
        if (!msg) return;
        const pUser = document.createElement("p");
        pUser.className = "text-sm text-slate-800";
        pUser.innerHTML = "<strong>Anda:</strong> " + escapeHtml(msg);
        chatContent.appendChild(pUser);
        chatContent.scrollTop = chatContent.scrollHeight;
        chatInput.value = "";

        // Simple canned reply (tanpa WA)
        setTimeout(() => {
            const pBot = document.createElement("p");
            pBot.className = "text-sm text-slate-700";
            pBot.innerHTML =
                '<strong>Bot:</strong> Hai! 😊 Terima kasih sudah mengirim pesan. Untuk bantuan langsung, kamu bisa menghubungi <a href="https://wa.me/6281234567890" target="_blank" class="text-[#3BAFDA] font-semibold hover:underline">Admin kami di WhatsApp</a>.';
            chatContent.appendChild(pBot);
            chatContent.scrollTop = chatContent.scrollHeight;
        }, 700);
    });

// Utility: escape HTML
function escapeHtml(unsafe) {
    return unsafe.replace(/[&<"'>]/g, function (m) {
        return {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#039;",
        }[m];
    });
}
