@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>

<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>profile</title>

<x-sidebar-user></x-sidebar-user>

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
        <h2 class="text-2xl font-bold">{{ Auth::user()->name }}</h2>
        <p class="text-gray-500 mb-2">{{ Auth::user()->email }}</p>
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
        <div class="md:col-span-2">
          <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
          <input type="text" id="nama" name="nama" value="{{ Auth::user()->name }}" 
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50" 
                 required>
        </div>

        <div class="md:col-span-2">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" 
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50" 
                 required>
        </div>

        <!-- Placeholder for phone number and address input -->
        <div class="md:col-span-2">
          <label for="phone" class="block text-sm font-medium text-gray-700">Telepon</label>
          <input type="text" id="phone" name="phone" placeholder="123-456-7890" 
                 pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
        </div>
        
        <div class="md:col-span-2">
          <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
          <textarea type="text" id="alamat" name="alamat" placeholder="Jl. Mawar" rows="3"
                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-300 focus:ring-opacity-50"></textarea>
        </div>
      </div>
    </div>
  </div> 
</div>

  