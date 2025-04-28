<x-layout title="Tentang Kami">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">
      <!-- Paw Print Kiri -->
    <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-25 top-1/4 w-16 md:w-30 opacity-90">
    <!-- Paw Print Kanan -->
    <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-20 top-1/6 w-16 md:w-40 transform scale-x-[1]">  
      <div class="p-2 w-[16%] mx-auto font-semibold flex justify-center items-center space-x-1 mb-1">
           <p>TENTANG KAMI</p>
        </div>         

        <div class="max-w-5xl mx-auto text-center px-4">
          <!-- Heading -->
          <h1 class="text-5xl font-['Inter'] font-semibold text-gray-900 mb-6">
            Perawatan Hewan lebih Praktis dengan Sistem Reservasi dan Rekam Medis Digital
          </h1>
          <p class="font-['Inter'] text-gray-700 mb-10">
            Tempat terbaik untuk merawat dan menjaga kesehatan hewan kesayanganmu.
          </p>
        </div>
      </section>

      <div class="grid place-items-center bg-[#234bd2] p-8 mt-20 font-['Inter']">
        <!-- Heading Section -->
        <div class="text-center">
          <h3 class="text-white uppercase text-sm font-bold mb-3">Mengapa Pilih Kami?</h3>
          <h1 class="text-3xl font-semibold text-white mb-10">Keunggulan Kami</h1>
        </div>
        
        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
          <!-- Card 1 -->
          <div class="relative grid place-items-center rounded-2xl w-[300px] bg-white p-6 border border-gray-200 shadow-xl overflow-hidden group">
            <!-- Gradasi Hover -->
            <div class="absolute top-0 left-0 w-full h-1/3 bg-gradient-to-b from-blue-300 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            <!-- Content -->
            <div class="mb-4 z-10">
              <img src="{{ asset('images/quality.svg') }}" alt="Icon Mudah & Cepat" class="h-12 w-12">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2 z-10 font-['Inter']">Kualitas Layanan</h3>
            <p class="text-center text-gray-600 z-10 font-['Inter']">Memberikan kemudahan reservasi online untuk layanan kesehatan hewan. Dengan sistem yang efisien,
                pemilik hewan dapat menjadwalkan kunjungan tanpa antrean panjang.
            </p>
          </div>
          
          <!-- Card 2 -->
          <div class="relative grid place-items-center rounded-2xl w-[300px] bg-white p-6 border border-gray-200 shadow-xl overflow-hidden group">
            <!-- Gradasi Hover -->
            <div class="absolute top-0 left-0 w-full h-1/3 bg-gradient-to-b from-blue-300 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            <!-- Content -->
            <div class="mb-4 z-10">
              <img src="{{ asset('images/skill.svg') }}" alt="Icon Transparan" class="h-12 w-12">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2 z-10">Keahlian Medis</h3>
            <p class="text-center text-gray-600 z-10">Ditangani oleh dokter hewan profesional dengan pengalaman dalam berbagai perawatan
                dan pengobatan hewan. Klinik ini juga menyediakan rekam medis digital untuk pemantauan kesehatan.</p>
          </div>
          
          <!-- Card 3 -->
          <div class="relative grid place-items-center rounded-2xl w-[300px] bg-white p-6 border border-gray-200 shadow-xl overflow-hidden group">
            <!-- Gradasi Hover -->
            <div class="absolute top-0 left-0 w-full h-1/3 bg-gradient-to-b from-blue-300 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            <!-- Content -->
            <div class="mb-4 z-10">
              <img src="{{ asset('images/pelayanan.svg') }}" alt="Icon Detail" class="h-12 w-12">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2 z-10">Pelayanan Ramah</h3>
            <p class="text-center text-gray-600 z-10">Kami berkomitmen untuk memberikan perawatan terbaik dengan pendekatan yang ramah dan penuh
                perhatian, memastikan hewan peliharaan mendapatkan pengalaman yang nyaman dan menyenangkan.</p>
          </div>
        </div>
      </div>

      <div class="container mx-auto p-4 mt-40">
        <h1 class="text-4xl font-bold text-gray-900 mb-4 text-center font-['Inter']">
          Dokter Profesional Kami
        </h1>
        <p class="text-gray-700 mb-10 text-center font-['Inter']">
          Kenali dokter-dokter profesional kami yang berdedikasi
          <span class="block">untuk kesehatan hewan kesayanganmu.</span>
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-6">
            <!-- Card 1 -->
            @foreach ($dokters as $dokter)
        <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
            <img class="w-full h-[460px] object-cover" src="{{ asset($dokter->gambar) }}" alt="Profile Image">
            <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                <div class="flex justify-between items-center font-['Inter']">
                    <h5 class="text-lg font-bold mb-3">{{ $dokter->nama }}</h5>
                    <a href="#" class="text-white">
                        <img src="{{ asset('images/arrow-up-right.svg') }}" alt="Arrow" class="w-5 h-5" />
                    </a>
                </div>
                <p class="text-sm font-bold">Dokter Hewan</p>
                <p class="text-xs mt-1 text-expand">{{ $dokter->deskripsi }}</p>
            </div>
        </div>
    @endforeach
      </div>


      <div class="flex flex-col items-center justify-center min-h-screen p-2 mt-30">
        <h1 class="text-4xl font-bold text-gray-900 mb-4 text-center font-['Inter']">
          Pengalaman Pelanggan
        </h1>
        <p class="text-gray-700 mb-15 text-center font-['Inter']">
          Pengalaman pelanggan yang telah mempercayakan hewan kesayangannya
          <span class="block">kepada medvet animal clinic.</span>
        </p>
      <div id="gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/review1.svg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('images/review2.svg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/review3.svg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('images/review4.png') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
          </div>
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/review5.png') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
      </div>      
</x-layout>