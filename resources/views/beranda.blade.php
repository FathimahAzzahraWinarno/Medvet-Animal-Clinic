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

        @if(session('success-login'))
            <div id="success-login" class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-200 dark:border-blue-400 w-fit ms-8" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success-login') }}</span>
                </div>
            </div>
         @endif

         @if(session('success'))
         <div id="alertFeedback" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertFeedback">
             <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
             </svg>
             <div class="ms-3 text-sm font-medium">
                 {{ session('success') }}
             </div>
         </div>
     @endif
    

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
          <h1 class="text-2xl font-bold py-4">Tentang Kami</h1>
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
              @foreach ($perawatans as $perawatan)
                  <div class="bg-white p-6 shadow-md flex flex-col items-center text-center rounded-[16px] border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
                      <img src="{{ asset($perawatan->gambar) }}" alt="{{ $perawatan->nama }}" class="w-28 h-28 mb-4">
                      <button class="bg-[#234bd2] text-white px-4 py-2 rounded-lg text-sm flex items-center gap-1">
                          {{ strtoupper($perawatan->nama) }}
                      </button>
                  </div>
              @endforeach
          </div>
          
      
        <div class="text-center mt-6 mb-20">
          <a href="perawatan" class="text-[#234bd2] font-semibold flex items-center justify-center gap-1">
            Lihat lebih banyak
            <img src="{{ asset('images/arrow-up-right-blue.svg') }}" alt="Arrow" class="w-6 h-6">
          </a>
        </div>
      </div>      
      
</x-layout>

<script>
  // Hilangkan alert setelah 3 detik
  setTimeout(() => {
      const alert = document.getElementById('success-login');
      if (alert) {
          alert.classList.add('opacity-0');
          setTimeout(() => alert.remove(), 500); // Tunggu transisi 0.5s
      }
  }, 3000);

   // Hilangkan alert setelah 3 detik
  setTimeout(() => {
      const alert = document.getElementById('alertFeedback');
      if (alert) {
          alert.classList.add('opacity-0');
          setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
      }
  }, 3000); // 3000ms = 3 detik
</script>