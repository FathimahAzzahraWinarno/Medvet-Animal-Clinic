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
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center font-['Inter']">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm font-bold">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm font-bold">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm font-bold">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group col-span-4 font-['Inter']">
                <img class="w-full h-[460px] object-cover" src="{{ asset('images/karyawan.jpeg') }}" alt="Profile Image">
                <div class="absolute inset-x-0 bottom-0 bg-[#234bd2] text-white border border-white p-4 hover-expand overflow-hidden m-5 rounded-[10px]">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-bold mb-3">Alisa Hester</h5>
                        <a href="#" class="text-white"><img src="{{ asset('images/arrow-up-right.svg') }}" alt="Money" class="w-5 h-5" /></a>
                    </div>
                    <p class="text-sm font-bold">PM, Hourglass</p>
                    <p class="text-xs mt-1 text-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <div class="flex space-x-3 mt-3">
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/xIcon.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/linkedin.svg') }}" alt="Money" class="w-5 h-5" /></a>
                      <a href="#" class="hover:text-gray-300"><img src="{{ asset('images/ball.svg') }}" alt="Money" class="w-5 h-5" /></a>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="flex flex-col items-center justify-center min-h-screen p-6">
        <h1 class="text-4xl font-bold text-gray-900 mb-4 text-center font-['Inter']">
          Pengalaman Pelanggan
        </h1>
        <p class="text-gray-700 mb-30 text-center font-['Inter']">
          Pengalaman pelanggan yang telah mempercayakan hewan kesayangannya
          <span class="block mb-20">kepada medvet animal clinic.</span>
        </p>
      <div class="relative w-full max-w-4xl flex justify-center mt-10 mb-30">
          <div id="cardContainer" class="relative flex items-center">
              <!-- Kartu pertama -->
              <div class="card scale-90 -translate-x-24" onclick="moveToCenter(this)">
                  <p class="text-sm">⭐️⭐️⭐️⭐️⭐️</p>
                  <p>Masih jadi klinik andalan buat berobat anabul karna pelayanannya bagus.
                    Area kliniknya bersih & terawat. Dokternya ramah & komunikatif.
                  </p>
                  <img src="{{ asset('images/review1.svg') }}" alt="Review Image" class="h-100 w-100">
              </div>
  
              <!-- Kartu utama (tengah) -->
              <div class="card active" onclick="moveToCenter(this)">
                  <p class="text-sm">⭐️⭐️⭐️⭐️⭐️</p>
                  <p>Tempatnya nyaman buat anabul dan majikan, dokter dan perawatanya ramah dan sabar banget sama
                    anabul yang rewel, top deh pokoknya sangat rekomendasi apalagi adanya promo untuk steril,
                    bakalan menjadi klinik andalan untuk anabul saya. Bintang 100 untuk kliniknya seribu jempol.
                  </p>
                  <img src="{{ asset('images/review2.svg') }}" alt="Review Image" class="h-100 w-100">
              </div>
  
              <!-- Kartu ketiga -->
              <div class="card scale-90 translate-x-24" onclick="moveToCenter(this)">
                  <p class="text-sm">⭐️⭐️⭐️⭐️⭐️</p>
                  <p>Klinik hewan yang bagus, bersih, ramah, dokter dan perawatnya ramah dan baik, kucing saya steril dan
                    rawat inap disini Alhamdullilah sehat, tempatnya steril dan selalu mengabari kucing kita, topp deh kliniknya
                    InsyAllah sudah menjadi langgangan kalau kucing mau vaksin, steril ataupun berobat.
                  </p>
                  <img src="{{ asset('images/review3.svg') }}" alt="Review Image" class="h-100 w-100">
              </div>
          </div>
      </div>
      </div>      
</x-layout>