<x-layout-admin title="dashboard">
    <!-- Bagian Konten Dashboard (Bagian Kanan) -->
    <div class="flex-1 h-screen overflow-y-auto">
    <div class="bg-white p-10 shadow-md h-full">
        <div class="flex justify-between items-start mb-12">
            <div>
                <h1 class="text-4xl font-bold text-gray-800">Welcome back, Olivia</h1>
                <p class="text-sm font-semibold mt-2 text-gray-500">Even miracles take a little time</p>
            </div>
            <a href="kelola-perawatan" class="flex text-sm items-center font-semibold bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800 text-sm cursor-pointer">
                <img src="{{ asset('images/plus.svg') }}" alt="Plus Icon" class="w-4 h-4 mr-1">
                Perawatan
            </a>
        </div>

        <!-- Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-15">
            <div class="bg-gray-50 p-4 rounded-lg shadow">
                <p class="text-l font-bold text-gray-500">Total Pelanggan</p>
                <p class="text-3xl font-bold text-gray-800 mt-5 mb-5">289</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow">
                <p class="text-l font-bold text-gray-500">Reservasi Hari ini</p>
                <p class="text-3xl font-bold text-gray-800 mt-5 mb-5">15</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow">
                <p class="text-l font-bold text-gray-500">Data Dokter</p>
                <p class="text-3xl font-bold text-gray-800 mt-5 mb-5">4</p>
            </div>
        </div>

        <!-- Filter & Table -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-2">
                <button type="button" 
                        class="text-gray-800 
                        hover:text-white border border-gray-800 
                        hover:bg-gray-500 focus:ring-1 
                        focus:outline-none focus:ring-gray-300 
                        font-medium rounded-lg text-l px-4 py-2 
                        text-center me-2 mb-1 dark:border-gray-400 
                        dark:text-gray-800 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">semua</button>
                <button type="button" 
                        class="text-gray-800 
                        hover:text-white border border-gray-800 
                        hover:bg-gray-500 focus:ring-1 focus:outline-none 
                        focus:ring-gray-300 font-medium rounded-lg 
                        text-l px-4 py-2 text-center me-2 mb-1 
                        dark:border-gray-400 dark:text-gray-800 
                        dark:hover:text-white dark:hover:bg-gray-600 
                        dark:focus:ring-gray-800">Filter</button>
            </div>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-xl">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-500 uppercase border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Pasien</th>
                        <th class="px-4 py-3">Spesies</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Jam</th>
                        <th class="px-4 py-3">Update</th>
                        <th class="px-4 py-3">Rekam Medis</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-semibold">
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">
                            <div>Liras Ayun</div>
                            <div class="text-xs text-gray-400">LK01</div>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">Kucing</span>
                        </td>
                        <td class="px-4 py-3 text-sm text-red-500 font-medium">9-08-2025</td>
                        <td class="px-4 py-3">
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">10AM</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">✔</span>
                        </td>
                        <td class="px-4 py-3">
                            <button class="bg-gray-100 text-blue-600 text-xs px-3 py-1 rounded hover:underline">Lihat</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">
                            <div>Namya Isnah</div>
                            <div class="text-xs text-gray-400">LM02</div>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded-full">Anjing</span>
                        </td>
                        <td class="px-4 py-3 text-sm text-red-500 font-medium">9-08-2025</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">1PM</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">✔</span>
                        </td>
                        <td class="px-4 py-3">
                            <button class="bg-gray-100 text-blue-600 text-xs px-3 py-1 rounded hover:underline">Lihat</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">
                            <div>Sutya Restu</div>
                            <div class="text-xs text-gray-400">LK02</div>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">Kucing</span>
                        </td>
                        <td class="px-4 py-3 text-sm text-red-500 font-medium">10-08-2025</td>
                        <td class="px-4 py-3">
                            <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs">5PM</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">✔</span>
                        </td>
                        <td class="px-4 py-3">
                            <button class="bg-gray-100 text-blue-600 text-xs px-3 py-1 rounded hover:underline">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-10">
            <a href="reservasi-dokter" class="text-[#234bd2] font-semibold flex items-center justify-center gap-1">
                Lihat lebih banyak
                <img src="{{ asset('images/arrow-up-right-blue.svg') }}" alt="Arrow" class="w-6 h-6">
            </a>
        </div>
    </div>
</div>

</x-layout-admin>