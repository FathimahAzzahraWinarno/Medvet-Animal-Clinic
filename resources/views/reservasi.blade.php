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

        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] font-['Inter'] mb-20">
            <!-- Data Peliharaan -->
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Data Peliharaan</h2>
            
            <!-- Dropdown Trigger -->
            <div class="flex justify-between items-center mb-5">
                <!-- Tombol Dropdown Pilih Hewan -->
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" 
                    class="text-gray-700 font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                    dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-blue-800" 
                    type="button">
                    Pilih Hewanmu
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
            
                <!-- Tombol Tambah Hewan di kanan -->
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg 
                    text-sm px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700">
                    Tambah Hewan
                </button>
            </div>
            
  
  <!-- Dropdown Menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Miu</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Billy</a>
                </li>
                <li>
                    <a href="#hewanBaru" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hewan Baru</a>
                </li>
                </ul>
            </div>
  
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama Peliharaan -->
                <div class="md:col-span-2">
                    <label class="block text-gray-700">Nama Peliharaan</label>
                    <input type="text" placeholder="Masukkan nama peliharaan"  id="hewanBaru"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <!-- Jenis Kelamin -->
                <div>
                    <label class="block text-gray-700">Jenis Kelamin</label>
                    <div class="relative">
                        <input type="text" placeholder="Masukkan Jenis Kelamin"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                    </div>
                </div>
        
                <!-- Spesies -->
                <div>
                    <label class="block text-gray-700">Spesies</label>
                    <input type="text" placeholder="Masukkan Spesies"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <!-- Ras -->
                <div>
                    <label class="block text-gray-700">Ras</label>
                    <input type="text" placeholder="Masukkan Ras"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            </div>
        
            <!-- Data Pemilik -->
            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Data Pemilik</h2>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Nama Pemilik</label>
                    <input type="text" placeholder="Masukkan nama pemilik"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <div>
                    <label class="block text-gray-700">Nomor Telepon</label>
                    <input type="text" placeholder="Masukkan nomor telepon"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <div class="block text-gray-700">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" placeholder="Masukkan email"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>

                <div class="block text-gray-700">
                    <label class="block text-gray-700">Alamat</label>
                    <input type="email" placeholder="Masukkan Alamat"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            </div>
        
            <!-- Kedatangan -->
            <h2 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Kedatangan</h2>
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Perawatan</label>
                    <div class="relative">
                        <select id="treatmentSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                            <option>Pilih perawatan</option>
                            <option>Vaksinasi</option>
                            <option>Operasi minor & mayor</option>
                            <option>Cek Darah</option>
                            <option>Cek Mikroskopis</option>
                            <option>Rawat Inap</option>
                            <option>USG</option>
                            <option>Pengobatan</option>
                        </select>
                    </div>
                </div>
        
                <div>
                    <label class="block text-gray-700">Tanggal</label>
                    <input type="date"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
        
                <div>
                    <label class="block text-gray-700">Waktu</label>
                    <div class="relative">
                        <select id="timeSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                            <option>Pilih waktu</option>
                            <option>08:00 - 10:00</option>
                            <option>10:00 - 12:00</option>
                            <option>13:00 - 15:00</option>
                        </select>
                    </div>
                </div>
        
                <div>
                    <label class="block text-gray-700">Dokter</label>
                    <div class="relative">
                        <select id="doctorSelect" class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200 appearance-none">
                            <option>Pilih dokter</option>
                            <option>Drh. Siti</option>
                            <option>Drh. Andi</option>
                            <option>Drh. Rina</option>
                        </select>
                    </div>
                </div>
        
                <div class="md:col-span-2">
                    <label class="block text-gray-700">Pesan</label>
                    <input type="text" placeholder="Masukkan Pesan"
                        class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
                </div>
            </div>
        
            <!-- Tombol -->
            <div class="flex justify-end space-x-4 mt-6">
                <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg">Kirim</button>
                <button class="px-6 py-2 bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium rounded-lg">Batal</button>
            </div>
        </div>  
</x-layout>