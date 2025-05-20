<x-layout-admin title="Pelanggan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Pelanggan Medvet Animal Clinic</h1>

        <div class="overflow-x-auto m-20 rounded-2xl shadow-2xl">
            <table class="w-full text-sm text-center text-gray-600">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 border-b border-gray-200">
                    <tr class="bg-blue-800 text-white">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Tanggal Akun Terdaftar</th>
                        <th class="px-4 py-3">Nama Pemilik</th>
                        <th class="px-4 py-3">Nama Hewan</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Total Reservasi</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-semibold">
                    @forelse ($users as $index => $user)
                        <tr class="border-b border-gray-300">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</td>
                            <td class="px-4 py-3">
                                <div>{{ $user->name }}</div>
                                <div class="text-xs text-gray-400">{{ str_pad($user->id, 2, '1', STR_PAD_RIGHT) }}</div>
                            </td>
                            <td class="px-4 py-3">-</td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $user->email }}</span>
                            </td>
                           <td class="px-4 py-3">
                            {{ $user->reservasis->count() > 0 ? $user->reservasis->count() : '0' }}
                        </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">Belum ada data pelanggan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>
