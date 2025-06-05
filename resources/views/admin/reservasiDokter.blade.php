<x-layout-admin title="Reservasi Hari Ini">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi</h1>
   @if(session('success'))
            <div id="alertEmail" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertEmail">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="overflow-x-auto m-20 rounded-2xl shadow-2xl">
            <table class="w-full text-sm text-center text-gray-600">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
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
                        <th class="px-4 py-3">Pengingat</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-semibold text-center">
                    @forelse ($reservasis as $index => $reservasi)
                        <tr class="border-b border-gray-300">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                <div>{{ $reservasi->user->name ?? '-' }}</div>
                                <div class="text-xs text-gray-400">{{ str_pad($reservasi->user->id ?? 0, 2, '0', STR_PAD_LEFT) }}</div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $reservasi->hewan->nama ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $reservasi->hewan->jenis_kelamin ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $reservasi->hewan->spesies ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ $reservasi->perawatan->nama ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ $reservasi->promo ? $reservasi->promo->id : '-' }}</pre></span>
                            </td>
                            <td class="px-4 py-3 text-sm text-red-500 font-medium">
                                {{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">{{ $reservasi->waktu }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <form action="{{ route('reservasi.dokter.kirimEmail', $reservasi->id) }}" method="POST" onsubmit="return confirm('Kirim email ke {{ $reservasi->user->email }}?')">
                                    @csrf
                                    <button type="submit"
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-sm transition duration-200">
                                        Kirim Email
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-6 text-gray-500">Belum ada reservasi hari ini</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>
<script>
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alertEmail');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik
</script>