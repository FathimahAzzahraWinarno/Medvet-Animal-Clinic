<x-layout-admin title="Pelanggan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Pelanggan Medvet Animal Clinic</h1>
        <div class="overflow-x-auto m-20">
            <table class="w-full text-sm text-center text-gray-600">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Total Reservasi</th>
                        <th class="px-4 py-3">Reservasi Selesai</th>
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
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">fathwinarno@gmail.com</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">2</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">4</span>
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