<x-layout title="Contact Us">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')"> 
      <!-- Paw Print Kiri -->
    <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-35 top-1/4 w-16 md:w-30 opacity-90">
    <!-- Paw Print Kanan -->
    <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-25 top-1/6 w-16 md:w-40 transform scale-x-[1]">        
        <div class="max-w-5xl mx-auto text-center px-4">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Contact Us!</h1>
            <p class="text-gray-700 mb-10 font-['Inter']">Praktik Dokter Hewan MedVet Animal Klinik
              berlokasi di Tj. Sari, Kota Medan. Klinik ini mudah diakses dan menyediakan layanan
              kesehatan hewan yang lengkap.</p>
            <div class="mt-6 mb-20 flex items-center justify-center">
              </div>
            </div>
    </section>

    <div class="max-w-5xl mx-auto items-center p-4 font-['Inter'] mt-10 mb-20">
      <!-- Google Maps Image with Link -->
      <a href="https://maps.app.goo.gl/TutyamUrYE6zdpFC7" target="_blank">
          <img src="images/maps.png" alt="Lokasi Klinik di Google Maps" 
          class="w-full max-w-5xl rounded-xl shadow-md mb-15">
      </a>
  
      <!-- Cards Section -->
      <div class="flex flex-col md:flex-row justify-center gap-6 mt-6">
          <!-- Card 1: Our Clinic -->
          <div class="flex flex-col items-center p-4 w-full md:w-1/3 bg-white shadow-md rounded-[16px] border border-blue-300 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
              <img src="images/location.svg" alt="Location Icon" class="w-10 h-10 mb-3">
              <h3 class="text-lg font-semibold">Our Clinic</h3>
              <p class="text-sm text-gray-600 text-center">Jl. Arteri Ring Road No.19, Tj. Sari, Kec. Medan Selayang, Kota Medan.</p>
          </div>
  
          <!-- Card 2: Phone -->
          <div class="flex flex-col items-center p-4 w-full md:w-1/3 bg-white shadow-md rounded-[16px] border border-blue-300 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
              <img src="images/phone.svg" alt="Phone Icon" class="w-9 h-9 mb-3">
              <h3 class="text-lg font-semibold">Phone</h3>
              <p class="text-sm text-gray-600 text-center">+62 812 9992 0231</p>
              <p class="text-sm text-gray-600 text-center">Instagram: @medvet_animal_clinic</p>
          </div>
  
          <!-- Card 3: Email -->
          <div class="flex flex-col items-center p-4 w-full md:w-1/3 bg-white shadow-md rounded-[16px] border border-blue-300 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
              <img src="images/email.svg" alt="Email Icon" class="w-10 h-10 mb-3">
              <h3 class="text-lg font-semibold">Email</h3>
              <p class="text-sm text-gray-600 text-center">MedvetAnimalClinic@gmail.com</p>
          </div>
      </div>
  </div>
  
</x-layout>