@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Rekam Medis</title>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const selectHewan = document.getElementById("hewan");
        const namaHewan = document.getElementById("namaHewan");
        const spesiesHewan = document.getElementById("spesiesHewan");
        const rasHewan = document.getElementById("rasHewan");
        const kelaminHewan = document.getElementById("kelaminHewan");

        function updateForm() {
            const selectedOption = selectHewan.options[selectHewan.selectedIndex];
            namaHewan.value = selectedOption.getAttribute('data-nama');
            spesiesHewan.value = selectedOption.getAttribute('data-spesies');
            rasHewan.value = selectedOption.getAttribute('data-ras');
            kelaminHewan.value = selectedOption.getAttribute('data-kelamin');
        }

        selectHewan.addEventListener("change", updateForm);
        updateForm(); // Set default saat pertama kali load
    });
</script>

<div class="flex min-h-screen">
<x-sidebar-user></x-sidebar-user>
<div class="flex-1 h-screen overflow-y-auto"
    style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
        <div class="bg-blue-700 rounded-t-lg shadow-md">
            <div class="p-6">
                <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
            </div>
        </div>

        <!-- Gambar gradasi -->
        <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
        <div class="ml-10">
            <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewan</label>
            <select id="hewan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
                @foreach ($reservasis as $reservasi)
                    <option value="{{ $reservasi->id }}" data-nama="{{ $reservasi->hewan->nama ?? '-' }}"
                        data-spesies="{{ $reservasi->hewan->spesies ?? '-' }}"
                        data-ras="{{ $reservasi->hewan->ras ?? '-' }}"
                        data-kelamin="{{ $reservasi->hewan->jenis_kelamin ?? '-' }}">
                        {{ $reservasi->hewan->nama ?? 'Nama Hewan Tidak Ada' }}
                    </option>
                @endforeach
            </select>
        </div>
        <!-- Formulir (readonly) -->
        <div class="m-10 mt-5 p-6 mb-10 bg-white rounded-lg shadow-md">
            <form class="space-y-6">
                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Nama Hewan Peliharaan</label>
                    <input type="text" id="namaHewan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                        readonly />
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Spesies</label>
                    <input type="text" id="spesiesHewan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                        readonly />
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Ras</label>
                    <input type="text" id="rasHewan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                        readonly />
                </div>

                <div>
                    <label class="block text-gray-600 mb-1 font-medium">Jenis Kelamin</label>
                    <input type="text" id="kelaminHewan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                        readonly />
                </div>
            </form>
        </div>
    </div>


    <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
        <div class="bg-blue-700 rounded-t-lg shadow-md">
            <div class="p-6">
                <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
            </div>
        </div>
        <!-- Gambar gradasi -->
        <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>

        <form method="GET" action="{{ route('rekamMedis') }}">
            <div class="flex justify-between items-center p-5">
                <div>
                    <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewan</label>
                    <select name="nama_hewan" id="hewan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2"
                        onchange="this.form.submit()">
                        
                        <option value="semua" {{ ($selectedHewan == 'semua' || $selectedHewan == null) ? 'selected' : '' }}>Semua Hewan</option>

                        @foreach ($namaHewanUnik as $namaHewan)
                            <option value="{{ $namaHewan }}" {{ $selectedHewan == $namaHewan ? 'selected' : '' }}>
                                {{ $namaHewan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
                <thead>
                    <tr class="bg-blue-800 text-white">
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Detail Rekam Medis</th>
                        <th class="px-4 py-3">Dokter</th>
                        <th class="px-4 py-3">Diagnosa</th>
                        <th class="px-4 py-3">Perawatan</th>
                        <th class="px-4 py-3">Hasil Tes</th>
                        <th class="px-4 py-3">Tindakan</th>
                        <th class="px-4 py-3">Catatan</th>
                    </tr>
                </thead>
                @forelse ($rekamMedis as $rekam)
                    <tr>
                        <td class="px-4 py-4 border-t">
                            {{ \Carbon\Carbon::parse($rekam->created_at)->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-4 border-t">{{ $rekam->detail }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->dokter ?? 'Tidak diketahui' }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->diagnosa }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->perawatan }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->hasil_tes }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->tindakan }}</td>
                        <td class="px-4 py-4 border-t">{{ $rekam->catatan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-4 py-4 border-t text-gray-500">Belum ada data rekam medis.</td>
                    </tr>
                @endforelse



            </table>
        </div>
    </div>
</div>
