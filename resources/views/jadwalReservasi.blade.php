@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Riwayat Reservasi</title>

<x-sidebar-user></x-sidebar-user>

  <div class="flex-1" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi Hari Ini</h1>
<div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
  <!-- Tabel -->
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
      <thead>
        <tr class="bg-blue-800 text-white">
          <th class="px-4 py-3">No</th>
          <th class="px-4 py-3">Nama Pemilik</th>
          <th class="px-4 py-3">Nama Hewan</th>
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
          <td class="px-4 py-4 border-t">Miu</td>
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