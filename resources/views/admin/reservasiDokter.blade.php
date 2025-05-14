<x-layout-admin title="Reservasi Hari Ini">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi Hari Ini</h1>

        <div class="overflow-x-auto m-20 rounded-2xl shadow-2xl">
            <table class="w-full text-sm text-center text-gray-600">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Pemilik</th>
                        <th class="px-4 py-3">Nama Hewan</th>
                        <th class="px-4 py-3">Spesies</th>
                        <th class="px-4 py-3">Perawatan</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Jam</th>
                        <th class="px-4 py-3">Rekam Medis</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-semibold">
                    @forelse ($reservasis as $index => $reservasi)
                        <tr class="border-b border-gray-300">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                <div>{{ $reservasi->user->name ?? '-' }}</div>
                                <div class="text-xs text-gray-400">usr{{ str_pad($reservasi->user->id ?? 0, 2, '0', STR_PAD_LEFT) }}</div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $reservasi->nama_hewan ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $reservasi->spesies ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ $reservasi->jenis_perawatan ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-red-500 font-medium">
                                {{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">{{ \Carbon\Carbon::parse($reservasi->jam)->format('H:i') }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="bg-gray-100 text-blue-600 text-xs px-3 py-1 rounded hover:underline">Lihat</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-6 text-gray-500">Tidak ada reservasi hari ini</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>
