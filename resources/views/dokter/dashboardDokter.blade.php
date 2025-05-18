<x-layout-dokter title="dashboard">
    <!-- Bagian Konten Dashboard (Bagian Kanan) -->
    <div class="flex-1 h-screen overflow-y-auto">
    <div class="bg-white p-10 shadow-md h-full">
        <div class="flex justify-between items-start mb-12">
            <div>
                <h1 class="text-4xl font-bold text-gray-800">Welcome back, Olivia</h1>
                <p class="text-sm font-semibold mt-2 text-gray-500">Even miracles take a little time</p>
            </div>

            @if(session('success-login'))
            <div id="success-login-dokter" class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-200 dark:border-blue-400 w-fit ms-8" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success-login') }}</span>
                </div>
            </div>
         @endif

        </div>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi Hari Ini</h1>
        <!-- Filter & Table -->
        <div class="flex justify-between items-center mb-4">
                <a href="jadwal-reservasi-dokter" class="flex text-sm items-center font-semibold bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800 text-sm cursor-pointer">
                    Jadwal Reservasi
                </a>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-xl">
            <table class="w-full text-sm text-left text-gray-600">
                 <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                        <tr class="bg-blue-800 text-white text-center">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama Pemilik</th>
                            <th class="px-4 py-3">Nama Hewan</th>
                            <th class="px-4 py-3">Jenis Kelamin</th>
                            <th class="px-4 py-3">Spesies</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Jam</th>
                            <th class="px-4 py-3">Perawatan</th>
                            <th class="px-4 py-3">Rekam Medis</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white font-semibold text-center">
                        @forelse($reservasis as $index => $reservasi)
                            <tr class="border-b border-gray-300">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-4 py-3">
                                    <div>{{ $reservasi->user->name ?? '-' }}</div>
                                    <div class="text-xs text-gray-400">{{ $reservasi->user->kode ?? '' }}</div>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">
                                        {{ $reservasi->hewan->nama ?? '-' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">
                                        {{ $reservasi->hewan->jenis_kelamin ?? '-' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">
                                        {{ $reservasi->hewan->spesies ?? '-' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm text-red-500 font-medium">
                                    {{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}
                                </td>
                                <td class="px-4 py-3">
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">
                                       {{ $reservasi->waktu }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">
                                        {{ $reservasi->perawatan->nama }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('dokter.inputRekamMedis', $reservasi->id) }}" class="bg-gray-100 text-blue-600 text-xs px-3 py-1 rounded hover:underline">
                                        Lihat
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-gray-500">Belum ada reservasi untuk hari ini.</td>
                            </tr>
                        @endforelse
                    </tbody>

            </table>
        </div>

        <div class="text-center mt-10">
            <a href="reservasi-dokter" class="text-[#234bd2] font-semibold flex items-center justify-center gap-1">
                Lihat lebih banyak
                <img src="{{ asset('images/arrow-up-right-blue.svg') }}" alt="Arrow" class="w-6 h-6">
            </a>
        </div>
    </div>
</div>

</x-layout-dokter>

<script>
// Hilangkan alert setelah 3 detik
  setTimeout(() => {
      const alert = document.getElementById('success-login-dokter');
      if (alert) {
          alert.classList.add('opacity-0');
          setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
      }
  }, 3000); // 3000ms = 3 detik
  </script>