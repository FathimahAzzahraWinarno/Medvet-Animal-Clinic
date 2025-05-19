<x-layout-dokter title="Rekam Medis">
    <div class="flex-1 h-screen overflow-y-auto"
        style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Daftar Reservasi Anda
        </h1>

        <div class="overflow-x-auto mt-20 me-20 ms-20">
            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                        <tr class="bg-blue-800 text-white text-center">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama Pemilik</th>
                            <th class="px-4 py-3">Nama Hewan</th>
                            <th class="px-4 py-3">Tanggal</th>
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
                                <td class="px-4 py-3 text-sm text-red-500 font-medium">
                                    {{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}
                                </td>
                                <td class="px-4 py-3">
                                    <button type="button" data-modal-target="dokter-modal"
                                        data-modal-toggle="dokter-modal"
                                        onclick="selectReservasi('{{ $reservasi->id }}')"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg 
                text-sm px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700">
                                        Tambah Rekam Medis
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-gray-500">Belum ada reservasi untuk
                                    hari ini.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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


            <!--popup-->
            <div id="dokter-modal" data-modal-backdrop="dokter" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
                        <!-- Modal header -->
                        <div
                            class="flex items-center font-extrabold justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-2xl font-semibold text-gray-800">
                                Tambah Rekam Medis
                            </h3>
                            <button type="button"
                                class="text-blue-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-blue-500 dark:hover:text-white"
                                data-modal-hide="dokter-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <form method="POST" action="{{ route('createRekamMedis') }}" class="p-4 md:p-5 space-y-6">
                            @csrf
                            {{-- Tampilkan error validasi --}}
                            @if ($errors->any())
                                <div class="text-red-600 mb-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <input type="hidden" name="reservasi_id" id="reservasi_id">

                            <div>
                                <label for="tanggal"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                            </div>

                            <div>
                                <label for="dokter"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Dokter</label>
                                <textarea id="dokter" name="dokter" rows="3" placeholder="Nama dokter"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="perawatan"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Perawatan</label>
                                <textarea id="perawatan" name="perawatan" rows="3" placeholder="Masukan Perawatan"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="detail" class="block mb-2 text-sm font-semibold text-gray-800">Detail
                                    Rekam Medis</label>
                                <textarea id="detail" name="detail" rows="3" placeholder="Masukan detail"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="diagnosa"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Diagnosa</label>
                                <textarea id="diagnosa" name="diagnosa" rows="3" placeholder="Masukan diagnosa"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="hasil_tes" class="block mb-2 text-sm font-semibold text-gray-800">Hasil
                                    Tes</label>
                                <textarea id="hasil_tes" name="hasil_tes" rows="3" placeholder="Masukan hasil tes"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="tindakan"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Tindakan</label>
                                <textarea id="tindakan" name="tindakan" rows="3" placeholder="Masukan Tindakan"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            <div>
                                <label for="pesan"
                                    class="block mb-2 text-sm font-semibold text-gray-800">Pesan</label>
                                <textarea id="pesan" name="pesan" rows="3" placeholder="Masukan pesan"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    maxlength="300" required></textarea>
                            </div>

                            {{-- Modal Footer --}}
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center">
                                    Simpan
                                </button>
                                <button data-modal-hide="dokter-modal"
                                    class="py-2.5 px-5 ms-3 text-sm font-semibold text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:ring-gray-100">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


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
</script>
