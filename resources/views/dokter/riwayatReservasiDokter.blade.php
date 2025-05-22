<x-layout-dokter title="Riwayat Reservasi">
    <div class="flex-1 min-h-screen overflow-y-auto" 
         style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">

        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Riwayat Reservasi</h1>

        <div class="max-w-6xl mx-auto px-4 mb-12">
            <!-- Filter Dropdown -->
            <div class="flex justify-end mb-4">
                <div class="relative">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-gray-700 focus:ring-1 focus:outline-none focus:ring-blue-300 
                        font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                        border border-blue-400 hover:bg-blue-200" type="button">
                        Filter
                        <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="dropdown"
                        class="z-10 hidden bg-white font-semibold divide-y divide-blue-200 rounded-lg shadow-sm w-44 border border-blue-300 mt-2 absolute right-0">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li class="border-b">
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}"
                                    class="block px-4 py-2 hover:bg-blue-100 {{ request('sort') == 'desc' ? 'bg-blue-100 font-bold' : '' }}">
                                    Terbaru
                                </a>
                            </li>
                            <li>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}"
                                    class="block px-4 py-2 hover:bg-blue-100 {{ request('sort') == 'asc' ? 'bg-blue-100 font-bold' : '' }}">
                                    Terlama
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tabel Reservasi -->
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="text-xs text-white uppercase bg-blue-800">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama Pemilik</th>
                            <th class="px-4 py-3">Nama Hewan</th> 
                            <th class="px-4 py-3">Jenis Kelamin</th> 
                            <th class="px-4 py-3">Spesies</th>
                            <th class="px-4 py-3">Perawatan</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Jam</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white font-semibold text-center">
                        @forelse($reservasis as $index => $reservasi)
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                <div>{{ $reservasi->user->name }}</div>
                                <div class="text-xs text-gray-400">{{ $reservasi->user->kode ?? '-' }}</div>
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
                                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">{{ $reservasi->perawatan->nama }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-red-500 font-medium">{{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}</td>
                            <td class="px-4 py-3">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">{{ $reservasi->waktu }}</span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-gray-500 py-6">Belum ada riwayat reservasi.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout-dokter>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }

    // Optional: hide dropdown when click outside
    window.addEventListener('click', function (e) {
        const button = document.getElementById('dropdownDefaultButton');
        const dropdown = document.getElementById('dropdown');
        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>

