<x-layout-admin title="Kelola Promo">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-promo></x-popup-promo>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Promo</h1>
        @if(session('success'))
            <div id="alertDeletePromo" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertDeletePromo">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif
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

<script>
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alertDeletePromo');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik
</script>