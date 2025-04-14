@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>profile</title>

<div class="flex min-h-screen font-['Inter']">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-300 p-6 flex flex-col justify-between">
      <div>
        <a href="/">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo Medvetco" class="h-10 mb-12" /></a>
        <div class="flex items-center gap-3 mb-12">
          <a href="profile">
          <img src="{{ asset('images/karyawan.jpeg') }}" class="w-10 h-10 rounded-full" />
          <div>
            <p class="font-semibold">Olivia Rhye</p>
            <p class="text-sm text-gray-500">olivia@untitledui.com</p>
          </a>
          </div>
        </div>
  
        <nav class="space-y-6">
          <a href="jadwal-reservasi" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/reservasi.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Reservasi Hari Ini</span>
          </a>
          <a href="riwayat-reservasi" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/riwayat.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Riwayat Reservasi</span>
          </a>
          <a href="rekam-medis" class="flex items-center text-gray-700 hover:text-blue-600">
            <img src="{{ asset('images/writing.svg') }}" class="w-6 h-6 rounded-full" />
             <span class="ml-3">Rekam Medis</span>
          </a>
        </nav>
      </div>
  
      <button class="flex items-center justify-center gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
        ⎋ Keluar
      </button>
    </aside>
  
    <!-- Main content -->
    <div class="flex-1">
  <!-- Header -->
  <div class="bg-gradient-to-r from-blue-100 to-purple-200 p-28 relative">
    <!-- Foto kiri bawah -->
    <div class="absolute left-0 ml-10 -bottom-12">
      <img src="{{ asset('images/karyawan.jpeg') }}" class="w-40 h-40 rounded-full border-4 border-white shadow" />
    </div>
  </div>

  <!-- Content -->
  <div class="mt-20 px-10">
    <!-- Nama & Tombol Ganti Foto -->
    <div class="flex flex-col md:flex-row md:items-start md:justify-between">
      <div>
        <h2 class="text-2xl font-bold">Olivia Rhye</h2>
        <p class="text-gray-500 mb-2">olivia@untitledui.com</p>
      </div>
      <div class="mt-4 md:mt-0 flex gap-3">
        <button class="px-4 py-2 font-semibold border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">Hapus foto</button>
        <button class="px-4 py-2 font-semibold bg-[#234bd2] text-white rounded-lg hover:bg-blue-600">Ganti foto</button>
      </div>
    </div>
  
    <!-- Info Pribadi -->
    <h3 class="font-semibold text-lg mt-6 mb-1">Info Pribadi</h3>
    <p class="text-sm text-gray-500 mb-6">Perbarui fotomu dan detail pribadimu</p>
  
    <div class="bg-white mb-5 p-6 rounded-xl border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">First name</label>
          <input type="text" value="Oliva" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 bg-gray-100" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
          <input type="text" value="Rhye" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 bg-gray-100" />
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <div class="relative">
            <span class="absolute left-3 top-2.5 text-gray-500">📧</span>
            <input type="email" value="olivia@untitledui.com" class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2 text-gray-800 bg-gray-100"/>
          </div>
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Telp</label>
          <div class="relative">
            <span class="absolute left-3 top-2.5 text-gray-500">📱</span>
            <input type="text" value="0812-9456-9877" class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2 text-gray-800 bg-gray-100" />
          </div>
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
          <div class="relative">
            <input type="text" value="Jl.Nuri Blok A43 No.2" class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2 text-gray-800 bg-gray-100" />
          </div>
        </div>
      </div>
  
      <!-- Buttons -->
      <div class="mt-6 flex justify-end gap-3">
        <button class="px-4 py-2 font-semibold border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">Cancel</button>
        <button class="px-4 py-2 font-semibold bg-[#234bd2] text-white rounded-lg hover:bg-blue-600">Save changes</button>
      </div>
    </div>
  </div>
  
</div>

      
  </div>
  