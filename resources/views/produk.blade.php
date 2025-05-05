<x-layout title="Produk">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
        <!-- Paw Print Kiri -->
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <!-- Paw Print Kanan -->
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
            <div class="max-w-5xl mx-auto text-center px-4">
                <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Produk terbaik Untukmu.</h1>
                <p class="text-gray-700 mb-10 font-['Inter']">Temukan Makanan favorite hewan kesayanganmu.</p>
                <div class="mt-6 mb-20 flex items-center justify-center">
                  </div>
                </div>
        </section>

        <div class="flex flex-wrap gap-10 justify-center mt-10 mb-10">
            @foreach ($produks as $produk)
                <div class="md:w-[20%] bg-white border border-blue-100 rounded-lg shadow-sm">
                    <img class="rounded-t-lg h-114" src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama }}" />
                    <div class="p-5">
                        <h5 class="text-xl font-semibold text-gray-700 mb-3">{{ $produk->nama }}</h5>
                        <p class="mb-3 font-normal dark:text-gray-600">{{ $produk->detail }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        
</x-layout>