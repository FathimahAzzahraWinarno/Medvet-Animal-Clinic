@php 
    use Illuminate\Support\Str; 
@endphp

<x-layout title="Promo">
    @guest('web')
        <div class="min-h-screen flex items-center justify-center text-center px-4">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Kamu belum login</h1>
                <p class="text-gray-600 mb-6">Silakan login sebagai pelanggan untuk melihat promo menarik kami.</p>
                <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Login Sekarang</a>
            </div>
        </div>
    @endguest

    @auth('web')
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
            <div class="flex flex-wrap justify-center gap-6 p-4">
                @foreach ($promos as $promo)
                    @php
                        $user = auth()->user();
                        $totalReservasi = $user->reservasis->count();
                        $isPelangganBaru = $user->created_at->diffInDays(now()) <= 7;

                        $canUse = true;
                        $reason = '';

                        if (Str::contains(strtolower($promo->nama), 'pelanggan baru') && !$isPelangganBaru) {
                            $canUse = false;
                            $reason = 'Promo hanya untuk pelanggan baru';
                        }

                        if (Str::contains(strtolower($promo->nama), '5 kali') && $totalReservasi < 5) {
                            $canUse = false;
                            $reason = 'Promo untuk pelanggan dengan minimal 5 reservasi';
                        }

                        if (Str::contains(strtolower($promo->nama), '10 kali') && $totalReservasi < 10) {
                            $canUse = false;
                            $reason = 'Promo untuk pelanggan dengan minimal 10 reservasi';
                        }
                    @endphp

                    <div class="w-full md:w-[45%] bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                        <div class="flex justify-between relative">
                            <h5 class="text-xl font-semibold text-gray-800">{{ $promo->nama }}</h5>
                        </div>
                        <ul class="mt-4 space-y-2 text-gray-700">
                            <li class="flex items-center gap-2 font-semibold">
                                <img src="{{ asset('images/promo.svg') }}" alt="promo" class="w-5 h-5">
                                {{ $promo->diskon }}% OFF
                            </li>
                            <li class="flex items-center font-semibold gap-2 mb-4">
                                <img src="{{ asset('images/price.svg') }}" alt="price" class="w-5 h-5">
                                Start From Rp{{ number_format($promo->harga, 0, ',', '.') }}
                            </li>

                            @if($canUse)
                                <a href="{{ url("/reservasi?promo=$promo->id") }}" class="text-sm font-medium bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                    Gunakan
                                </a>
                            @else
                                <button class="text-sm font-medium bg-gray-300 text-gray-500 px-4 py-2 rounded-md cursor-not-allowed" disabled>
                                    Gunakan
                                </button>
                                <p class="text-xs text-red-500 mt-2">{{ $reason }}</p>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endauth
</x-layout>