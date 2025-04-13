<x-layout-admin title="Riwayat Reservasi">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Riwayat Reservasi</h1>
        <div class="overflow-x-auto m-20">
            <div class="justify-between items-center">
                <!-- Tombol Dropdown Filter-->
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" 
                    class="text-gray-700 m-3 focus:ring-1 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                    border border-blue-400 hover:bg-blue-200 dark:focus:ring-blue-300" 
                    type="button">
                    Filter
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

            <div id="dropdown" class="z-10 hidden bg-white font-semibold divide-y divide-blue-200 rounded-lg shadow-sm w-44 border border-blue-300">
                <ul class="py-2 text-sm text-gray-200 dark:text-gray-700" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-blue-600 dark:hover:text-white">Terbaru</a>
                    <div class="border-b border-blue-300"></div>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-blue-600 dark:hover:text-white">Terlama</a>
                    <div class="border-b border-blue-300"></div>
                </li>
                <li>
                    <a href="#hewanBaru" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-blue-600 dark:hover:text-white">Hewan Baru</a>
                </li>
                </ul>
            </div>

            <table class="w-full text-sm text-left text-gray-600 mt-3">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
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
                    <tr class="border-b border-gray-300">
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
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3">4</td>
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
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3">5</td>
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
                </tbody>
            </table>
        </div>


    </div>
</x-layout-admin>