<x-layout title="Perawatan & Layanan">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">         
    <!-- Paw Print Kiri -->
    <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-70 top-1/4 w-16 md:w-30 opacity-90">
    <!-- Paw Print Kanan -->
    <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-70 top-1/6 w-16 md:w-40 transform scale-x-[1]">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Layanan & Perawatan</h1>
            <p class="text-gray-700 mb-10 font-['Inter']">Temukan perawatan terbaik untuk hewan kesayanganmu.</p>
            <div class="mt-6 mb-20 flex items-center justify-center">
              </div>
            </div>
    </section>

    <div class="max-w-5xl mx-auto p-4 font-['Inter'] mt-20 mb-20">
        <h1 class="text-2xl text-center font-semibold text-gray-900 mt-16 mb-5 font-['Inter']">
            Cari perawatan terbaik untuk hewanmu!
        </h1>
        <img src="{{ asset('images/rectangle.svg') }}" alt="Garis Dekoratif" class="mx-auto w-120 mb-20">
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24">
            <!-- Card 1 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/vaksinasi.svg') }}" alt="Vaksinasi" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    VAKSINASI
                </button>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/operasi.svg') }}" alt="Operasi" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    OPERASI MINOR & MAYOR
                </button>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/pengobatan.svg') }}" alt="Pengobatan" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    PENGOBATAN
                </button>
            </div>
    
            <!-- Card 4 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/cekDarah.svg') }}" alt="cekDarah" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    CEK DARAH
                </button>
            </div>
    
            <!-- Card 5 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/mikroskop.svg') }}" alt="mikroskop" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    CEK MIKROSKOPIS
                </button>
            </div>
    
            <!-- Card 6 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/rawatInap.svg') }}" alt="Rawat Inap" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    RAWAT INAP
                </button>
            </div>
    
            <!-- Card 7 -->
            <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                <img src="{{ asset('images/usg.svg') }}" alt="usg" class="w-28 h-28 mb-4">
                <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                    USG
                </button>
            </div>
        </div>
    </div>
    
    
</x-layout>