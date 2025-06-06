@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Riwayat Reservasi</title>

<div class="flex min-h-screen">
<x-sidebar-user></x-sidebar-user>

<div class="flex-1" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
  <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi</h1>

  <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
    <!-- Tabel -->
    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 text-center shadow-md rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-blue-800 text-white">
            <th class="px-4 py-3">No</th>
            <th class="px-4 py-3">Nama Pemilik</th>
            <th class="px-4 py-3">Nama Hewan</th>
            <th class="px-4 py-3">Jenis Kelamin</th>
            <th class="px-4 py-3">Spesies</th>
            <th class="px-4 py-3">Perawatan</th>
            <th class="px-4 py-3">Promo</th>
            <th class="px-4 py-3">Tanggal</th>
            <th class="px-4 py-3">Jam</th>
            <th class="px-4 py-3">Pesan</th>
          </tr>
        </thead>
        <tbody class="bg-gray-50 text-gray-700">
          @forelse($reservasis as $index => $reservasi)
            <tr>
              <td class="px-4 py-4 border-t">{{ $index + 1 }}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->user->name }}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->hewan->nama ?? '-'}}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->hewan->jenis_kelamin ?? '-'}}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->hewan->spesies ?? '-'}}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->perawatan->nama }}</td>
              <td class="px-4 py-4 border-t">
                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ $reservasi->promo ? $reservasi->promo->id : '-' }}</pre></span>
              </td>
              <td class="px-4 py-4 border-t">{{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d/m/Y') }}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->waktu }}</td>
              <td class="px-4 py-4 border-t">{{ $reservasi->pesan ?? '-' }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="9" class="px-4 py-6 border-t text-center text-gray-500">
                Belum ada reservasi hari ini.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
