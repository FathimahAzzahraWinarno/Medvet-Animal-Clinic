<x-layout-admin title="Kelola Promo">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-promo></x-popup-promo>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Promo</h1>

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
                              <x-popup-card-promo :promo="$promo" />
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
    </div>
</x-layout-admin>