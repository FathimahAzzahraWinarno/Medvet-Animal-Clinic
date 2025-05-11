<x-layout title="Reservasi">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
        <!-- Paw Print Kiri -->
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <!-- Paw Print Kanan -->
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
            <div class="max-w-5xl mx-auto text-center px-4">
                <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Jadwalkan Sekarang!</h1>
                <p class="text-gray-700 mb-10 font-['Inter']">Temukan perawatan terbaik untuk hewan kesayanganmu.</p>
                <div class="mt-6 mb-20 flex items-center justify-center">
                  </div>
                </div>
        </section>

        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] font-['Inter'] mb-20 relative">
            <!-- promo -->
            @if($promo)
            <div class="md:col-span-2 mb-3">
                <label class="block text-gray-700 font-semibold">Promo</label>
                <input type="text" disabled placeholder="Masukkan promo" value="{{ $promo }}"
                    class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
            </div>
            @endif
            <!-- Data Peliharaan -->
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Data Peliharaan</h2>
            
            <!-- Dropdown Trigger -->
            <div class="flex justify-between items-center mb-5">
                <!-- Tombol Dropdown Pilih Hewan -->
              <div>
                <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewanmu</label>
                <select id="hewan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
                    <option>Hewan Baru</option>
                   <option>Miu</option>
                   <option>Bili</option>
                   <option>Bucil</option>
               </select>
              </div>
                <!-- Tombol Tambah Hewan di kanan -->
                <button onclick="tambahFormHewan()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg 
                    text-sm px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700">
                    Tambah Hewan
                </button>
            </div>
        
           
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 mb-6">
                <!-- Nama Peliharaan -->
                <div class="md:col-span-2">
                    <label class="block text-gray-700">Nama Peliharaan</label>
                    <input type="text" placeholder="Masukkan nama peliharaan" name="hewan[0][nama]"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <!-- Jenis Kelamin -->
                <div>
                    <label class="block text-gray-700">Jenis Kelamin</label>
                    <input type="text" placeholder="Masukkan Jenis Kelamin" name="kelamin[0][kelamin]"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <!-- Spesies -->
                <div>
                    <label class="block text-gray-700">Spesies</label>
                    <input type="text" placeholder="Masukkan Spesies" name="spesies[0][spesies]"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <!-- Ras -->
                <div>
                    <label class="block text-gray-700">Ras</label>
                    <input type="text" placeholder="Masukkan Ras" name="ras[0][ras]"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            </div>
        
            <!-- Data Pemilik -->
            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Data Pemilik</h2>

            @if(Auth::check())
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Nama Pemilik</label>
                    <input type="text" value="{{ Auth::user()->name }}" readonly
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                </div>

                <div>
                    <label class="block text-gray-700">Nomor Telepon</label>
                    <input type="text" value="{{ Auth::user()->telepon }}" readonly
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                </div>

                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" value="{{ Auth::user()->email }}" readonly
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                </div>

                <div>
                    <label class="block text-gray-700">Alamat</label>
                    <input type="text" value="{{ Auth::user()->alamat }}" readonly
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg text-gray-700">
                </div>
            </div>
            @else
            <script>
                alert('Silakan login terlebih dahulu untuk melakukan reservasi.');
                window.location.href = "{{ route('login') }}?redirect_reservasi=true";
            </script>
            @endif


        
            <!-- Kedatangan -->
            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Kedatangan</h2>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Perawatan</label>
                    <select id="treatmentSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                        <option>Pilih perawatan</option>
                        <option {{ $perawatan == 'vaksinasi' ? 'selected':'' }} >Vaksinasi</option>
                        <option {{ $perawatan == 'operasi-minor-mayor' ? 'selected':'' }}>Operasi minor & mayor</option>
                        <option {{ $perawatan == 'cek-darah' ? 'selected':'' }}>Cek Darah</option>
                        <option {{ $perawatan == 'cek-mikroskopis' ? 'selected':'' }}>Cek Mikroskopis</option>
                        <option {{ $perawatan == 'rawat-inap' ? 'selected':'' }}>Rawat Inap</option>
                        <option {{ $perawatan == 'usg' ? 'selected':'' }}>USG</option>
                        <option {{ $perawatan == 'pengobatan' ? 'selected':'' }}>Pengobatan</option>
                    </select>
                </div>
        
                <div>
                    <label class="block text-gray-700">Tanggal</label>  
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input datepicker id="default-datepicker" type="text" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-10 w-104 py-2 mt-1  dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal">
                    </div>
                </div>
        
                <div>
                    <label class="block text-gray-700">Waktu</label>
                    <select id="timeSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                        <option>Pilih waktu</option>
                        <option>08:00 - 10:00</option>
                        <option>10:00 - 12:00</option>
                        <option>13:00 - 15:00</option>
                    </select>
                </div>
        
                <div>
                    <label class="block text-gray-700">Dokter</label>
                    <select id="doctorSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                        <option>Pilih dokter</option>
                        <option>Drh. Siti</option>
                        <option>Drh. Andi</option>
                        <option>Drh. Rina</option>
                    </select>
                </div>
        
                <div class="md:col-span-2">
                    <input class="block text-gray-700">Pesan</input>
                    <textarea type="text" placeholder="Masukkan Pesan"
                        class="w-full row-2 mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200"></textarea>
                </div>
            </div>
        
            <!-- Tombol -->
            <div class="flex justify-end space-x-4 mt-6">
                <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg">Kirim</button>
                <button class="px-6 py-2 bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium rounded-lg">Batal</button>
            </div>
        </div>
        
</x-layout>