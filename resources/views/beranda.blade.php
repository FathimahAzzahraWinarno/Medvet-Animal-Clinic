<x-layout title="Beranda">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bgHome.svg')">
        <div class="bg-blue-100 rounded-[50px] p-1 w-[20%] mx-auto flex justify-center items-center space-x-1 mb-2">
          <span class="border border-blue-600 text-blue-800 font-semibold text-xs px-2 p-1 rounded-full bg-white font-['Inter'] mr-1">
            Medvet
          </span>
          <a href="perawatan" 
             class="text-blue-800 font-medium text-xs font-['Inter'] flex items-center space-x-1">
            <span>Cek perawatan yang tersedia</span>
            <img src="{{ asset('images/arrow-right-blue.svg') }}" alt="Arrow" class="w-4 h-4" />
          </a>
        </div>   
  
          <div class="max-w-5xl mx-auto text-center px-4">
            <!-- Heading -->
            <h1 class="text-4xl font-bold text-gray-900 mb-4 font-['Inter']">
              Sayangi Hewanmu, Rawat dengan Cinta di
              <span class="block font-['Inter']">Medvet!</span>
            </h1>
            <div class="flex justify-center space-x-10 mb-20">
              <img src="{{ asset('images/doggy.svg') }}" alt="doggy" class="w-60 h-60">
              <img src="{{ asset('images/kitten.svg') }}" alt="kitten" class="w-60 h-60">
          </div>
        </section>

        <div class="bg-[#234bd2] text-white p-6 text-center font-['Inter']">
          <h1 class="text-2xl font-bold py-4 mt-10">Tentang Kami</h1>
          <p>Praktik Dokter Hewan MedVet Animal Klinik berdiri tahun 2022, berlokasi di Tj. Sari, Medan, Indonesia. MedVet Animal Klinik bergerak di 
              <span class="block"> bidang Pelayanan Kesehatan Hewan, meliputi pemeriksaan, vaksinasi, dan lainnya.</span>
          </p>
          <div class="flex justify-center mt-8">
            <a 
              href="tentang_kami" 
              class="inline-flex items-center gap-2 bg-blue-100 text-blue-900 backdrop-blur-sm font-semibold rounded-lg px-4 py-2.5 text-sm hover:bg-blue-200 transition-colors duration-300">
              Baca Selengkapnya
              <img src="{{ asset('images/arrow-up-right-blue.svg') }}" alt="Arrow" class="w-4 h-4" />
            </a>
          </div>
      </div>

      <div class="max-w-5xl mx-auto p-4 font-['Inter']">
        <h1 class="text-2xl text-center font-semibold text-gray-900 mt-16 mb-10 font-['Inter']">
              Cari perawatan terbaik untuk hewanmu!
            </h1>
      
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
        </div>
      
        <div class="text-center mt-6 mb-20">
          <a href="perawatan" class="text-[#234bd2] font-semibold flex items-center justify-center gap-1">
            Lihat lebih banyak
            <img src="{{ asset('images/arrow-up-right-blue.svg') }}" alt="Arrow" class="w-6 h-6">
          </a>
        </div>
      </div>      
      
</x-layout>