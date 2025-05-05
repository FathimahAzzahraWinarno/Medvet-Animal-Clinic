@props(['produk'])

<x-layout-admin title="Kelola Produk">
    <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-produk></x-popup-produk>
    </div>
    <h1 class="text-4xl font-semibold text-center mt-20 text-gray-900 mb-6 font-['Inter']">Produk</h1>
    @if(session('success'))
    <div id="alertDeleteProduk" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertDeleteProduk">
        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
    </div>
@endif
    <div class="flex flex-wrap gap-10 justify-center mt-10 mb-10">
        @foreach ($produks as $produk)
            <div class="md:w-[20%] bg-white border border-blue-100 rounded-lg shadow-sm">
                <x-popup-card-produk :produk="$produk" />
                <img class="rounded-t-lg h-114" src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama }}" />
                <div class="p-5">
                    <h5 class="text-xl font-semibold text-gray-700 mb-3">{{ $produk->nama }}</h5>
                    <p class="mb-3 font-normal text-gray-600">{{ $produk->detail }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout-admin>