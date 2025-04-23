<x-layout-admin title="Kelola Perawatan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-perawatan></x-popup-perawatan>
    </div>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Perawatan & Layanan</h1>
        <div class="overflow-x-auto m-20 font-semibold">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24">
                <!-- Card 1 -->
                @foreach ($perawatans as $perawatan)
                    <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                        <x-popup-card-perawatan :perawatan="$perawatan" />
                        <img src="{{ asset($perawatan->gambar) }}" alt="{{ $perawatan->nama }}" class="w-28 h-28 mb-4">
                        <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                            {{ strtoupper($perawatan->nama) }}
                        </button>
                    </div>
                @endforeach
            
            </div>
        </div>
    </div>
</x-layout-admin>