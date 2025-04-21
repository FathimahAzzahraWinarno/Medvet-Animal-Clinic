@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Rekam Medis</title>

<x-sidebar-user></x-sidebar-user>
  <div class="flex-1 h-screen overflow-y-auto" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
      <div class="bg-blue-700 rounded-t-lg shadow-md">
        <div class="p-6">
          <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
        </div>
      </div>
    
      <!-- Gambar gradasi -->
      <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
      <div class="ml-10">
          <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewan</label>
          <select id="hewan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
             <option>Miu</option>
             <option>Bili</option>
             <option>Bucil</option>
             <option>Hewan Baru</option>
         </select>
        </div>
      <!-- Formulir (readonly) -->
      <div class="m-10 mt-5 p-6 mb-10 bg-white rounded-lg shadow-md">
        <form class="space-y-6">
          <div>
            <label class="block text-gray-600 mb-1 font-medium">Nama Hewan Peliharaan</label>
            <input 
              type="text" 
              placeholder="Miu" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
            />
          </div>
    
          <div>
            <label class="block text-gray-600 mb-1 font-medium">Spesies</label>
            <input 
              type="text" 
              placeholder="Anjing" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
            />
          </div>
    
          <div>
            <label class="block text-gray-600 mb-1 font-medium">Ras</label>
            <input 
              type="text" 
              placeholder="Bulldog" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
            />
          </div>
    
          <div>
            <label class="block text-gray-600 mb-1 font-medium">Jenis Kelamin</label>
            <input 
              type="text" 
              placeholder="Jantan" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-800 placeholder:text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-200 cursor-not-allowed"                  readonly 
            />
          </div>
        </form>
      </div>
    </div>
    

    <div class="relative m-30 rounded-lg border border-blue-50 shadow-[0px_0px_10px_rgba(59,130,246,0.3)]">
        <div class="bg-blue-700 rounded-t-lg shadow-md">
          <div class="p-6">
            <h1 class="text-white text-2xl font-bold">Informasi Hewan Peliharaan</h1>
          </div>
        </div>
        <!-- Gambar gradasi -->
        <div class="h-1 bg-gradient-to-r from-red-500 via-blue-700 to-blue-900 h-2 mb-3 rounded-b"></div>
    
        
        <div class="flex justify-between items-center p-5">
          <!-- Tombol Dropdown Pilih Hewan -->
        <div>
          <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewan</label>
          <select id="hewan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-105 px-4 py-2">
             <option>Miu</option>
             <option>Bili</option>
             <option>Bucil</option>
             <option>Hewan Baru</option>
         </select>
        </div>
      </div>
      
      <!-- Tabel -->
      <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 text-center shadow-md rounded-b-lg overflow-hidden">
          <thead>
            <tr class="bg-blue-800 text-white">
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3">Detail Rekam Medis</th>
              <th class="px-4 py-3">Dokter</th>
              <th class="px-4 py-3">Diagnosa</th>
              <th class="px-4 py-3">Tes</th>
              <th class="px-4 py-3">Hasil Tes</th>
              <th class="px-4 py-3">Tindakan</th>
              <th class="px-4 py-3">Pesan</th>
            </tr>
          </thead>
          <tbody class="bg-gray-50 text-gray-700">
            <!-- Data rows bisa kamu isi di sini -->
            <tr>
              <td class="px-4 py-4 border-t">19/01/2025</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
              <td class="px-4 py-4 border-t">Aroza</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
              <td class="px-4 py-4 border-t">Terkena virus karna terlalu sering bermain ditempat kotor</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
