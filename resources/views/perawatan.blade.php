<x-layout title="Perawatan & Layanan">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
        
        <div class="max-w-5xl mx-auto text-center px-4">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Layanan & Perawatan</h1>
            <p class="text-gray-700 mb-10 font-['Inter']">Temukan perawatan terbaik untuk hewan kesayanganmu.</p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto p-4 font-['Inter'] mt-20 mb-20">
        <h1 class="text-2xl text-center font-semibold text-gray-900 mt-16 mb-5">Cari perawatan terbaik untuk hewanmu!</h1>
        <img src="{{ asset('images/rectangle.svg') }}" alt="Garis Dekoratif" class="mx-auto w-120 mb-20">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24 relative">
            @foreach ($perawatans as $perawatan)
                <div x-data="{ open: false }" class="relative bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200">
                <img src="{{ asset($perawatan->gambar) }}" alt="{{ $perawatan->nama }}" class="w-28 h-28 mb-4">

                <!-- Tombol Hover -->
                <a href="{{ "/reservasi?perawatan=$perawatan->slug"}}"
                    @mouseenter="open = true"
                    @mouseleave="open = false"
                    class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm"
                >
                    {{ strtoupper($perawatan->nama) }}
                </a>

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
</x-layout>
