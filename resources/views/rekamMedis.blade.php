<x-layout title="Rekam Medis">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
        <!-- Paw Print Kiri -->
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <!-- Paw Print Kanan -->
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
            <div class="max-w-5xl mx-auto text-center px-4">
                <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Rekam Medis Hewan Peliharaan</h1>
                <p class="text-gray-700 mb-3 font-['Inter']">Jl.Arteri Ring Road No.19, Tj.Sari, Kec.Medan Selayang, Kota Medan</p>
                <p class="text-gray-700 mb-10 font-['Inter']">Telf: +62 0812 9992 0231 Email: Clinic@gmail.com</p>
                <div class="mt-6 mb-20 flex items-center justify-center">
                  </div>
                </div>
        </section>

        <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
          <div class="bg-blue-700 rounded-t-lg shadow-md">
            <div class="p-6">
              <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
            </div>
          </div>
        
          <!-- Gambar gradasi -->
          <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
        
          <!-- Formulir (readonly) -->
          <div class="m-10 mt-12 p-6 mb-10 bg-white rounded-lg shadow-md">
            <form class="space-y-6">
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Nama Hewan Peliharaan</label>
                <input 
                  type="text" 
                  placeholder="Miu" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
                />
              </div>
        
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Spesies</label>
                <input 
                  type="text" 
                  placeholder="Anjing" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
                />
              </div>
        
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Ras</label>
                <input 
                  type="text" 
                  placeholder="Bulldog" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
                />
              </div>
        
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Jenis Kelamin</label>
                <input 
                  type="text" 
                  placeholder="Jantan" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
                />
              </div>
            </form>
          </div>
        </div>
        

        {{-- <div class="relative m-20 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
            <div class="bg-blue-700 rounded-t-lg shadow-md">
              <div class="p-6">
                <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
              </div>
            </div>
            <!-- Gambar gradasi -->
            <img src="{{ asset('images/rectangle.svg') }}" alt="gradasi" class="w-full h-2 object-cover" />
         
        
          <!-- Formulir -->
          <div class="max-w-7xl mx-auto mt-12 p-6 mb-10 bg-white rounded-lg shadow-md">
            <form class="space-y-6">
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Alergi</label>
                <input type="text" placeholder="Kulit" class="w-full px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-100" />
              </div>
        
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Kondisi yang ada</label>
                <input type="text" placeholder="Gatal" class="w-full px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-100" />
              </div>
        
              <div>
                <label class="block text-gray-600 mb-1 font-medium">Dokter Hewan</label>
                <input type="text" placeholder="Aroza" class="w-full px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-100" />
              </div>
            </form>
          </div>
        </div> --}}

        <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
            <div class="bg-blue-700 rounded-t-lg shadow-md">
              <div class="p-6">
                <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
              </div>
            </div>
            <!-- Gambar gradasi -->
            <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
        
            
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" 
                class="text-gray-700 mb-4 ml-3 font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                    dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-blue-800" type="button">Pilih catatan medis hewanmu <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
          </button>
          
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Miu</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Billy</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hewan Baru</a>
            </li>
            </ul>
        </div>
  

          <!-- Tabel -->
          <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
              <thead>
                <tr class="bg-blue-800 text-white">
                  <th class="px-4 py-3">Tanggal</th>
                  <th class="px-4 py-3">Detail Rekam Medis</th>
                  <th class="px-4 py-3">Dokter</th>
                  <th class="px-4 py-3">Diagnosa</th>
                  <th class="px-4 py-3">Tes</th>
                  <th class="px-4 py-3">Hasil Tes</th>
                  <th class="px-4 py-3">Tindakan</th>
                  <th class="px-4 py-3">Pesan</th>
                </tr>
              </thead>
              <tbody class="bg-gray-50 text-gray-700">
                <!-- Data rows bisa kamu isi di sini -->
                <tr>
                  <td class="px-4 py-4 border-t">19/01/2025</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                  <td class="px-4 py-4 border-t">Aroza</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                  <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
</x-layout>