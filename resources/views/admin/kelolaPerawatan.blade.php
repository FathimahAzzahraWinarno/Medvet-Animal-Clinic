<x-layout-admin title="Kelola Perawatan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-perawatan></x-popup-perawatan>
    </div>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Perawatan & Layanan</h1>
        <div class="overflow-x-auto m-20 font-semibold">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24">
                <!-- Card 1 -->
               @foreach ($perawatans as $perawatan)
                <div x-data="{ open: false }" class="relative bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200">
                <x-popup-card-perawatan :perawatan="$perawatan"/>
                <img src="{{ asset($perawatan->gambar) }}" alt="{{ $perawatan->nama }}" class="w-28 h-28 mb-4">

                <!-- Tombol Hover -->
                <button
                    @mouseenter="open = true"
                    @mouseleave="open = false"
                    class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm"
                >
                    {{ strtoupper($perawatan->nama) }}
                </button>

                <!-- Popover Hover -->
                <div
                    x-show="open"
                    x-transition
                    class="absolute z-50 w-64 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg shadow-md mt-2 top-full left-1/2 -translate-x-1/2"
                >
                    <div class="px-4 py-3 border-b border-gray-200 bg-gray-100 font-semibold text-gray-900">
                        {{ $perawatan->nama }}
                    </div>
                    <div class="px-4 py-2">
                        <p>{{ $perawatan->deskripsi }}</p>
                        <p class="mt-2 font-semibold text-gray-800">Start From Rp{{ number_format($perawatan->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
                 </div>
            @endforeach
            
            </div>
        </div>
    </div>
</x-layout-admin>