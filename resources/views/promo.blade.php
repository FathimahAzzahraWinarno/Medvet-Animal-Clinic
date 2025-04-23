<x-layout title="Promo">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
        <!-- Paw Print Kiri -->
        <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
        <!-- Paw Print Kanan -->
        <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
            <div class="max-w-5xl mx-auto text-center px-4">
                <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Promo Menarik Untukmu.</h1>
                <p class="text-gray-700 mb-10 font-['Inter']">Temukan perawatan terbaik untuk hewan kesayanganmu.</p>
                <div class="mt-6 mb-20 flex items-center justify-center">
                  </div>
                </div>
        </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 mb-6">
        <div class="md:col-span-2">
            <div class="flex flex-wrap justify-center gap-15 p-4">
                <!-- Card 1 -->
                @foreach ($promos as $promo)
                <div class="w-full md:w-[45%] bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                    <div class="flex justify-between relative">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-800">{{ $promo->nama }}</h5>
                        </div>
                    </div>
                    <ul class="mt-4 space-y-2 text-gray-700">
                        <li class="flex items-center gap-2 font-semibold">
                            <img src="{{ asset('images/promo.svg') }}" alt="promo" class="w-5 h-5">
                            {{ $promo->diskon }}% OFF
                        </li>
                        <li class="flex items-center font-semibold gap-2">
                            <img src="{{ asset('images/price.svg') }}" alt="price" class="w-5 h-5">
                            Start From Rp{{ number_format($promo->harga, 0, ',', '.') }}
                        </li>
                    </ul>
                </div>
            @endforeach
              </div>
        </div>
    </div>
</x-layout>