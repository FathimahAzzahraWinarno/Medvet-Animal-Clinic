<x-layout-admin title="Kelola Perawatan">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-perawatan></x-popup-perawatan>
    </div>
        <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Perawatan & Layanan</h1>
        <div class="overflow-x-auto m-20 font-semibold">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-24">
                <!-- Card 1 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/vaksinasi.svg') }}" alt="Vaksinasi" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        vaksinasi
                    </button>
                </div>
                
        
                <!-- Card 2 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/operasi.svg') }}" alt="operasi" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        operasi
                    </button>
                </div>
        
                <!-- Card 3 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/pengobatan.svg') }}" alt="pengobatan" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        pengobatan
                    </button>
                </div>
        
                <!-- Card 4 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/cekDarah.svg') }}" alt="cek darah" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        cek darah
                    </button>
                </div>
        
                <!-- Card 5 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/mikroskop.svg') }}" alt="mikroskop" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        cek mikroskopis
                    </button>
                </div>
        
                <!-- Card 6 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/rawatInap.svg') }}" alt="rawat inap" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        rawat inap
                    </button>
                </div>
        
                <!-- Card 7 -->
                <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] relative">
                    <x-popup-card-perawatan></x-popup-card-perawatan>
                    <img src="{{ asset('images/usg.svg') }}" alt="usg" class="w-28 h-28 mb-4 mt-4">
                    <button class="bg-[#234bd2] text-white uppercase px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                        usg
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>