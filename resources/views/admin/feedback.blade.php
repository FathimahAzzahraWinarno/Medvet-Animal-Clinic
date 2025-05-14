<x-layout-admin title="Feedback Pelanggan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Feedback Pelanggan</h1>
        <div class="overflow-x-auto m-20 rounded-xl shadow-2xl">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-500 text-center uppercase bg-gray-50 border-b border-gray-200">
                    <tr class="bg-blue-800 text-white">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Pesan</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-semibold">
                    @foreach ($feedbacks as $feedback)
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 text-center">
                            <div>{{ $feedback->nama }}</div>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">{{ $feedback->email }}</span>
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-800 font-medium text-center">
                            {{ $feedback->pesan }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>
