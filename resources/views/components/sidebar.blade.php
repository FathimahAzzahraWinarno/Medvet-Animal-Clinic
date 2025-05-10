<div class="flex min-h-screen font-['Inter']">
    <aside class="w-64 bg-white border-r border-gray-300 p-5 flex flex-col justify-between">
        <div>
          <a href="dashboard-dokter">
          <img src="{{ asset('images/logo.svg') }}" alt="Logo Medvetco" class="h-10 mb-12" /></a>
          <div class="flex items-center gap-3 mb-12">
            <img src="{{ asset('images/karyawan.jpeg') }}" class="w-13 h-13 rounded-full" />
            <div>
              <p class="font-semibold">Olivia Rhye</p>
              <p class="text-sm text-gray-500">dokterMedvet</p>
                <p class="text-sm text-gray-500">@example.com</p>
            </div>
          </div>
    
          <nav class="space-y-6 font-semibold">
            <a href="dashboard-dokter" class="flex items-center text-gray-700 hover:text-blue-600">
              <img src="{{ asset('images/dashboard.svg') }}" class="w-6 h-6 rounded-full" />
               <span class="ml-3">Dashboard</span>
            </a>
            <a href="jadwal-reservasi-dokter" class="flex items-center text-gray-700 hover:text-blue-600">
              <img src="{{ asset('images/reservasi.svg') }}" class="w-6 h-6 rounded-full" />
               <span class="ml-3">Jadwal Reservasi</span>
            </a>
            <a href="input-rekam-medis" class="flex items-center text-gray-700 hover:text-blue-600">
              <img src="{{ asset('images/writing.svg') }}" class="w-6 h-6 rounded-full" />
               <span class="ml-3">Rekam Medis</span>
            </a>
          </nav>
        </div>
    
        <button class="flex items-center justify-center font-semibold gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
           Keluar
           <img src="{{asset('images/keluar.svg')}}" class="w-5 h-5">
        </button>
      </aside>
    </div>