<x-layout-admin title="Reservasi Hari Ini">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Reservasi Hari Ini</h1>
        <div class="overflow-x-auto m-20">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Pemilik</th>
                        <th class="px-4 py-3">Nama Hewan</th>
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
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">Miu</span>
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
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>