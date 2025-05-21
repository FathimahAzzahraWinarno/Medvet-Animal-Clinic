<x-layout-dokter title="Rekam Medis">
    <div class="flex-1 h-screen overflow-y-auto"
        style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Daftar Reservasi Anda
        </h1>

        <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
        <div class="bg-blue-700 rounded-t-lg shadow-md">
            <div class="p-6">
                <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
            </div>
        </div>

        <!-- Gambar gradasi -->
        <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
        <div class="m-10 mt-5 p-3 mb-10">

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach ($reservasis as $reservasi)
            <form action="{{ route('dokter.inputRekamMedis.create', ['id' => $reservasi->id]) }}" method="POST" class="space-y-6">
                @csrf

                <!-- Bagian 1: readonly -->
                <div class="p-6 mb-6 bg-white rounded-lg shadow-sm">
                        <div class="mb-4">
                            <label class="block text-gray-600 mb-1 font-medium">Nama Hewan Peliharaan</label>
                            <input type="text" value="{{ $reservasi->hewan->nama ?? '-' }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                                readonly />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-600 mb-1 font-medium">Spesies</label>
                            <input type="text" value="{{ $reservasi->hewan->spesies ?? '-' }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                                readonly />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-600 mb-1 font-medium">Jenis Kelamin</label>
                            <input type="text" value="{{ $reservasi->hewan->jenis_kelamin ?? '-' }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"
                                readonly />
                        </div>

                        {{-- Hidden Fields --}}
                        <input type="hidden" name="tanggal" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                        <input type="hidden" name="perawatan" value="{{ $reservasi->perawatan->nama ?? '-' }}">
                        <input type="hidden" name="pesan" value="{{ $reservasi->pesan }}">
                        <input type="hidden" name="reservasi_id" value="{{ $reservasi->id }}">
                   
                </div>

                <!-- Tombol Tambah Rekam Medis -->
                <button id="btnTambah" 
                    class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200">
                    Tambah Rekam Medis
                </button>

                <!-- Form inputan, awalnya disembunyikan -->
                <div id="formRekamMedis" class="p-6 bg-white rounded-lg shadow-sm mt-4" style="display: none;">
                    <div class="mb-4">
                        <label for="detailRekamMedis" class="block text-gray-600 mb-1 font-medium">Detail Rekam Medis</label>
                        <textarea id="detailRekamMedis" name="detail" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Masukkan data detail rekam medis"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="diagnosa" class="block text-gray-600 mb-1 font-medium">Diagnosa</label>
                        <input type="text" id="diagnosa" name="diagnosa" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Masukkan data diagnosa" />
                    </div>

                    <div class="mb-4">
                        <label for="hasilTes" class="block text-gray-600 mb-1 font-medium">Hasil Tes</label>
                        <textarea id="hasilTes" name="hasil_tes" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Masukkan data hasil tes"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="tindakan" class="block text-gray-600 mb-1 font-medium">Tindakan</label>
                        <textarea id="tindakan" name="tindakan" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500"
                            placeholder="Masukkan data tindakan"></textarea>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div id="btnSimpanWrapper" class="flex justify-end mt-2" style="display: none;">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                        Simpan Data
                    </button>
                </div>

            </form>
            @endforeach

        </div>

    </div>

        <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
            <div class="bg-blue-700 rounded-t-lg shadow-md">
                <div class="p-6">
                    <h1 class="text-white text-2xl font-bold">Informasi Rekam Medis</h1>
                </div>
            </div>
            <!-- Gambar gradasi -->
            <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>

            <!-- Tabel -->
            <div class="overflow-x-auto">
                @if (session('success-rm'))
                    <div id="success-rm"
                        class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-200 dark:border-blue-400 w-fit ms-8"
                        role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{ session('success-rm') }}</span>
                        </div>
                    </div>
                @endif
                <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-800 text-white">
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Dokter</th>
                            <th class="px-4 py-3">Perawatan</th>
                            <th class="px-4 py-3">Detail Rekam Medis</th>
                            <th class="px-4 py-3">Diagnosa</th>
                            <th class="px-4 py-3">Hasil Tes</th>
                            <th class="px-4 py-3">Tindakan</th>
                            <th class="px-4 py-3">Pesan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 text-gray-700">
                        @foreach ($rekamMedis as $rm)
                            <tr>
                                <td class="px-4 py-4 border-t">
                                    {{ \Carbon\Carbon::parse($rm->tanggal)->format('d/m/Y') }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->dokter }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->perawatan }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->detail }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->diagnosa }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->hasil_tes }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->tindakan }}</td>
                                <td class="px-4 py-4 border-t">{{ $rm->pesan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

</x-layout-dokter>

<script>
    function selectReservasi(reservasiId) {
        console.log(reservasiId);
        document.getElementById('reservasi_id').value = reservasiId;
    }
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('success-rm');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi 0.5s
        }
    }, 3000);

    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alertRm');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik

    const btnTambah = document.getElementById('btnTambah');
    const formRekamMedis = document.getElementById('formRekamMedis');
    const btnSimpanWrapper = document.getElementById('btnSimpanWrapper');

    btnTambah.addEventListener('click', () => {
        formRekamMedis.style.display = 'block';
        btnSimpanWrapper.style.display = 'flex';
        btnTambah.style.display = 'none'; // supaya tombol hanya muncul 1 kali
    });
</script>
