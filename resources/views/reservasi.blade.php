<x-layout title="Reservasi">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Jadwalkan Sekarang!</h1>
            <p class="text-gray-700 mb-10 font-['Inter']">Temukan perawatan terbaik untuk hewan kesayanganmu.</p>
        </div>
    </section>

    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf
        <div
            class="max-w-4xl mx-auto bg-white p-6 rounded-lg border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] font-['Inter'] mb-20 relative">
            @if ($promo)
                <div class="md:col-span-2 mb-3">
                    <label class="block text-gray-700 font-semibold">Promo</label>
                    <input type="text" disabled name="promo" placeholder="Masukkan promo"
                        value="{{ $promo }}"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            @endif

             @if(session('success'))
         <div id="alertReservasi" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertReservasi">
             <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
             </svg>
             <div class="ms-3 text-sm font-medium">
                 {{ session('success') }}
             </div>
         </div>
     @endif

            <h2 class="text-xl font-semibold text-gray-900 mb-4">Data Peliharaan</h2>

            <div class="flex justify-end items-center mb-5">
                {{-- <div>
                    <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewanmu</label>
                    <select id="hewan" name="hewan_pilihan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
                        <option>Hewan Baru</option>
                        <option>Miu</option>
                        <option>Bili</option>
                        <option>Bucil</option>
                    </select>
                </div> --}}
                <button onclick="tambahFormHewan()" type="button"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm px-4 py-2.5">
                    Tambah Hewan
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 mb-6">
                <div class="md:col-span-2">
                    <label class="block text-gray-700">Nama Peliharaan</label>
                    <input type="text" placeholder="Masukkan nama peliharaan" name="nama_peliharaan"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>

                <div>
                    <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-800">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
                        <option selected disabled>Pilih</option>
                        <option>Betina</option>
                        <option>Jantan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Spesies</label>
                    <input type="text" placeholder="Masukkan Spesies" name="spesies"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Data Pemilik</h2>

            @if (Auth::check())
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" value="{{ Auth::user()->name }}" readonly
                            class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                    </div>

                    <div>
                        <label class="block text-gray-700">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" value="{{ Auth::user()->telepon }}" readonly
                            class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                        @if (empty(Auth::user()->telepon))
                            <p class="text-red-600 text-sm mt-1">Silakan lengkapi nomor telepon Anda di halaman <a
                                    href="{{ route('user.profile') }}" class="underline text-blue-600">Profil</a>.</p>
                        @endif
                    </div>

                    <div>
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" readonly
                            class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                    </div>

                    <div>
                        <label class="block text-gray-700">Alamat</label>
                        <input type="text" name="alamat" value="{{ Auth::user()->alamat }}" readonly
                            class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                        @if (empty(Auth::user()->alamat))
                            <p class="text-red-600 text-sm mt-1">Silakan lengkapi alamat Anda di halaman <a
                                    href="{{ route('user.profile') }}" class="underline text-blue-600">Profil</a>.</p>
                        @endif
                    </div>
                </div>  
            @else
                <script>
                    alert('Silakan login terlebih dahulu untuk melakukan reservasi.');
                    window.location.href = "{{ route('login') }}?redirect_reservasi=true";
                </script>
            @endif

            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Kedatangan</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Perawatan</label>
                    <select id="treatmentSelect" name="perawatan"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                        <option value="">Pilih perawatan</option>
                        <option value="vaksinasi" {{ $perawatan == 'vaksinasi' ? 'selected' : '' }}>Vaksinasi</option>
                        <option value="operasi-minor-mayor"
                            {{ $perawatan == 'operasi-minor-mayor' ? 'selected' : '' }}>Operasi minor & mayor</option>
                        <option value="cek-darah" {{ $perawatan == 'cek-darah' ? 'selected' : '' }}>Cek Darah</option>
                        <option value="cek-mikroskopis" {{ $perawatan == 'cek-mikroskopis' ? 'selected' : '' }}>Cek
                            Mikroskopis</option>
                        <option value="rawat-inap" {{ $perawatan == 'rawat-inap' ? 'selected' : '' }}>Rawat Inap
                        </option>
                        <option value="usg" {{ $perawatan == 'usg' ? 'selected' : '' }}>USG</option>
                        <option value="pengobatan" {{ $perawatan == 'pengobatan' ? 'selected' : '' }}>Pengobatan
                        </option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Tanggal</label>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input id="datepicker" name="tanggal" type="text"
                            class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-10 w-104 py-2 mt-1 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Pilih tanggal">
                    </div>
                </div>

                @php
                    $startHour = 8;
                    $endHour = 17;
                @endphp

                <div>
                    <label for="waktu" class="block text-gray-700 mb-1">Waktu</label>
                    <select name="waktu" id="waktu"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 appearance-none">
                        <option value="">Pilih waktu</option>
                        @for ($hour = $startHour; $hour < $endHour; $hour++)
                            <option value="{{ sprintf('%02d:00', $hour) }}">{{ sprintf('%02d:00', $hour) }}</option>
                            <option value="{{ sprintf('%02d:30', $hour) }}">{{ sprintf('%02d:30', $hour) }}</option>
                        @endfor
                        <option value="{{ sprintf('%02d:00', $endHour) }}">{{ sprintf('%02d:00', $endHour) }}</option>
                    </select>
                </div>


                <div>
                    <label class="block text-gray-700">Dokter</label>
                    <select id="doctorSelect" name="dokter"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                        <option value="">Pilih dokter</option>
                        <option value="Muhammad Aroza">Muhammad Aroza</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-700">Pesan</label>
                    <textarea name="pesan" placeholder="Masukkan Pesan"
                        class="w-full row-2 mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200"></textarea>
                </div>
            </div>

            <div class="flex justify-end space-x-4 mt-6">
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg">Kirim</button>
                <button type="reset"
                    class="px-6 py-2 bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium rounded-lg">Batal</button>
            </div>
        </div>
    </form>
</x-layout>

<script>
   // Hilangkan alert setelah 3 detik
  setTimeout(() => {
      const alert = document.getElementById('alertReservasi');
      if (alert) {
          alert.classList.add('opacity-0');
          setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
      }
  }, 3000); // 3000ms = 3 detik
</script>
