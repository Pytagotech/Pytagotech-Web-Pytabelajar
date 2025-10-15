<div id="chatWidget" class="fixed right-5 bottom-5 z-50">
  <button id="openChat" class="flex items-center gap-3 px-4 py-3 rounded-full bg-gradient-to-r from-[#3BAFDA] to-[#2A7EA3] text-white font-semibold shadow-lg hover:translate-y-[-2px] transition">
    💬 Chat
  </button>

  <div id="chatBox" class="hidden mt-3 w-80 sm:w-96 bg-white rounded-xl shadow-2xl overflow-hidden">
    <div class="px-4 py-3 bg-gradient-to-r from-[#3BAFDA] to-[#2A7EA3] text-white font-semibold">Konsultasi Cepat</div>
    <div id="chatContent" class="p-3 max-h-48 overflow-y-auto text-sm text-slate-700">
      <p><strong>Bot:</strong> Halo! Mau tanya seputar kelas di Pytabelajar?</p>
    </div>
    <div class="p-3 border-t">
      <div class="flex gap-2">
        <input id="chatInput" type="text" placeholder="Ketik pesan..." class="flex-1 px-3 py-2 rounded-lg border border-slate-200 focus:ring-2 focus:ring-[#3BAFDA]">
        <button id="sendChat" class="px-3 py-2 rounded-lg bg-[#3BAFDA] text-white font-semibold">Kirim</button>
      </div>
    </div>
  </div>
</div>
