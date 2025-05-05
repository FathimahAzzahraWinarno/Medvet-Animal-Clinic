<x-layout-admin title="Kelola Produk">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-produk></x-popup-produk>
    </div>
    <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Produk</h1>
    <div class="flex flex-wrap gap-10 justify-center mt-10 mb-10">
        <!-- Card 1 -->
        <div class="md:w-[20%] bg-white border border-blue-100 rounded-lg shadow-sm">
            <x-popup-card-produk></x-popup-card-produk>    
            <img class="rounded-t-lg h-114" src="{{ asset('images/produk1.svg') }}" alt="produk 1" />
            <div class="p-5">
                <h5 class="text-xl font-semibold text-gray-700 mb-3"> Whiskas</h5>
                <p class="mb-3 font-normal dark:text-gray-600">Whiskas Dry Food dibuat dengan bahan-bahan berkualitas tinggi
                    dan teknologi modern untuk memastikan nutrisi yang tepat bagi kucing.
                </p>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="md:w-[20%] bg-white border border-blue-100 rounded-lg shadow-sm">    
            <img class="rounded-t-lg h-114" src="{{ asset('images/produk2.svg') }}" alt="produk 2" />
            <div class="p-5">
                <h5 class="text-xl font-semibold text-gray-700 mb-3"> Royal Canin</h5>
                <p class="mb-3 font-normal dark:text-gray-600">Royal Canin diformulasikan untuk mendukung hewan peliharaan selama masa pemulihan
                    dari penyakit atau cedera, dengan nutrisi tinggi dan energi mudah dicerna.
                </p>            
            </div>
        </div>
    
        <!-- Card 3 -->
        <div class="md:w-[20%] bg-white border border-blue-100 rounded-lg shadow-sm">
                <img class="rounded-t-lg h-114" src="{{ asset('images/produk3.svg') }}" alt="produk 3" />
            <div class="p-5">
                <h5 class="text-xl font-semibold text-gray-700 mb-3"> Meo</h5>
                <p class="mb-3 font-normal dark:text-gray-600">Meo mengandung nutrisi yang dibutuhkan oleh kucing, termasuk protein, lemak, vitamin dan mineral.
                    Makanan meo dirancang dengan bentuk kibble yang mudah dicerna oleh kucing.
                </p>
            </div>
        </div>
    </div>
</x-layout-admin>