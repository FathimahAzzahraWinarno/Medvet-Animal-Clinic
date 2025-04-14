<div class="flex min-h-screen font-['Inter']">
<aside class="w-64 bg-white border-r border-gray-300 p-5 flex flex-col justify-between">
    <div>
      <a href="dashboard">
      <img src="{{ asset('images/logo.svg') }}" alt="Logo Medvetco" class="h-10 mb-12" /></a>
      <div class="flex items-center gap-3 mb-12">
        <img src="{{ asset('images/karyawan.jpeg') }}" class="w-13 h-13 rounded-full" />
        <div>
          <p class="font-semibold">Olivia Rhye</p>
          <p class="text-sm text-gray-500">olivia@untitledui.com</p>
        </div>
      </div>

      <nav class="space-y-6 font-semibold">
        <a href="dashboard" class="flex items-center text-gray-700 hover:text-blue-600">
          <img src="{{ asset('images/dashboard.svg') }}" class="w-6 h-6 rounded-full" />
           <span class="ml-3">Dashboard</span>
        </a>
        <a href="reservasi-dokter" class="flex items-center text-gray-700 hover:text-blue-600">
          <img src="{{ asset('images/reservasi.svg') }}" class="w-6 h-6 rounded-full" />
           <span class="ml-3">Reservasi Hari Ini</span>
        </a>
        <a href="reservasi-riwayat" class="flex items-center text-gray-700 hover:text-blue-600">
          <img src="{{ asset('images/riwayat.svg') }}" class="w-6 h-6 rounded-full" />
           <span class="ml-3">Riwayat Reservasi</span>
        </a>
        <a href="kelola-perawatan" class="flex items-center text-gray-700 hover:text-blue-600">
          <img src="{{ asset('images/perawatan.svg') }}" class="w-6 h-6 rounded-full" />
           <span class="ml-3">Kelola Perawatan</span>
          </a>
          <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/promo.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Kelola Promo</span>
          </a>
          <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/faq.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Kelola FAQ</span>
          </a>
          <a href="pelanggan" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/pelanggan.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Pelanggan</span>
          </a>
          <a href="feedback-pelanggan" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/feedback.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Feedback</span>
          </a>
      </nav>
    </div>

    <button class="flex items-center justify-center gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
      ⎋ Keluar
    </button>
  </aside>
</div>