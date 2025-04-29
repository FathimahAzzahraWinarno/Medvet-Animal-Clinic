<x-layout-admin title="Kelola Perawatan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-perawatan></x-popup-perawatan>
    </div>
    <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Perawatan & Layanan</h1>
    @if(session('success'))
            <div id="alertDeleteP" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertDeleteP">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="overflow-x-auto m-20 font-semibold">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24">
                <!-- Card 1 -->
               @foreach ($perawatans as $perawatan)
                <div x-data="{ open: false }" class="relative bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200">
                <x-popup-card-perawatan :perawatan="$perawatan"/>
                 @if ($perawatan->gambar)
                 <img src="{{ asset($perawatan->gambar) }}" alt="{{ $perawatan->nama }}" class="w-28 h-28 mb-4">
             @else
                 <div class="w-28 h-28 mb-4 flex items-center justify-center bg-gray-200 text-gray-500 rounded">
                     Tidak ada gambar
                 </div>
                 @endif

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

<script>
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alertDeleteP');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik
</script>