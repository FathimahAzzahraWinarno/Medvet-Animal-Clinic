@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Riwayat Reservasi</title>

<div class="flex min-h-screen font-['Inter']">
<aside class="w-64 bg-white border-r border-gray-300 p-6 flex flex-col justify-between">
    <div>
      <a href="/">
      <img src="{{ asset('images/logo.svg') }}" alt="Logo Medvetco" class="h-10 mb-12" /></a>
      <div class="flex items-center gap-3 mb-12">
        <img src="{{ asset('images/karyawan.jpeg') }}" class="w-10 h-10 rounded-full" />
        <div>
          <p class="font-semibold">Olivia Rhye</p>
          <p class="text-sm text-gray-500">olivia@untitledui.com</p>
        </div>
      </div>

      <nav class="space-y-4">
        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
          📅 <span class="ml-3">Reservasi Hari Ini</span>
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
          📖 <span class="ml-3">Riwayat Reservasi</span>
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
          📚 <span class="ml-3">Rekam Medis</span>
        </a>
      </nav>
    </div>

    <button class="flex items-center justify-center gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
      ⎋ Keluar
    </button>
  </aside>

  <div class="flex-1" style="background-image: url('/images/bg.svg')">
    <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi Hari Ini</h1>
<div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
  <!-- Tabel -->
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
      <thead>
        <tr class="bg-blue-800 text-white">
          <th class="px-4 py-3">No</th>
          <th class="px-4 py-3">Nama</th>
          <th class="px-4 py-3">Tanggal </th>
          <th class="px-4 py-3">Waktu</th>
          <th class="px-4 py-3">Perawatan</th>
          <th class="px-4 py-3">Pesan</th>
          <th class="px-4 py-3">Status</th>
        </tr>
      </thead>
      <tbody class="bg-gray-50 text-gray-700">
        <!-- Data rows bisa kamu isi di sini -->
        <tr>
          <td class="px-4 py-4 border-t">1</td>
          <td class="px-4 py-4 border-t">Olivia Tryne</td>
          <td class="px-4 py-4 border-t">14/04/2025</td>
          <td class="px-4 py-4 border-t">13.00-13.30</td>
          <td class="px-4 py-4 border-t">Vaknisasi</td>
          <td class="px-4 py-4 border-t">-</td>
          <td class="px-4 py-4 border-t">-</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>