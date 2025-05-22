@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>

<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>profile</title>

<div class="flex min-h-screen font-['Inter']">
<x-sidebar-user></x-sidebar-user>

 <!-- Main content -->
<div class="flex-1">
  <!-- Header -->
  <div class="bg-gradient-to-r from-blue-100 to-purple-200 p-28 relative">
    <!-- Foto kiri bawah -->
    <div class="absolute left-0 ml-10 -bottom-12">
      <img src="{{ asset('images/avatar.jpg') }}" class="w-40 h-40 rounded-full border-4 border-white shadow" />
    </div>
  </div>

  <!-- Content -->
  <div class="mt-20 px-10">
    <!-- Nama & Tombol Ganti Foto -->
    <div class="flex flex-col md:flex-row md:items-start md:justify-between">
      <div>
        <h2 class="text-2xl font-bold">{{ Auth::user()->name }}</h2>
        <p class="text-gray-500 mb-2">{{ Auth::user()->email }}</p>
      </div>
    </div>
    @if(session('success'))
    <div id="alertberhasil" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 w-100 ml-10 transition-opacity duration-500" role="alertberhasil">
        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
    </div>
@endif
    <!-- Info Pribadi -->
    <h3 class="font-semibold text-lg mt-6 mb-1 flex items-center gap-3">
      Info Pribadi
      <!-- Tombol Edit -->
      <x-popup-profile></x-popup-profile> <!-- Komponen popup yang sudah kamu buat -->
  </h3>
    
    <p class="text-sm text-gray-500 mb-6">Perbarui fotomu dan detail pribadimu</p>

    <div class="bg-white mb-5 p-6 rounded-xl border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="md:col-span-2">
          <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
          <input type="text" id="nama" name="nama" value="{{ Auth::user()->name }}" 
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50" 
                 readonly>
        </div>

        <div class="md:col-span-2">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" 
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50" 
                 readonly>
        </div>

        <!-- Placeholder for phone number and address input -->
        <div class="md:col-span-2">
          <label for="phone" class="block text-sm font-medium text-gray-700">Telepon</label>
          <input type="text" id="phone" name="phone" value="{{ Auth::user()->telepon }}"
                 pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                 readonly>
        </div>
        
        <div class="md:col-span-2">
          <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
          <textarea id="alamat" name="alamat" rows="3"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
          readonly>{{ Auth::user()->alamat }}</textarea>
      
        </div>
      </div>
    </div>
  </div> 
</div>
</div>
<script>
  // Hilangkan alert setelah 3 detik
  setTimeout(() => {
      const alert = document.getElementById('alertberhasil');
      if (alert) {
          alert.classList.add('opacity-0');
          setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
      }
  }, 3000); // 3000ms = 3 detik
</script>
  