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
    
        <button data-modal-target="logout-dokter" data-modal-toggle="logout-dokter"
     class="flex items-center justify-center font-semibold gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
       Keluar
       <img src="{{asset('images/keluar.svg')}}" class="w-5 h-5">
    </button>

    <div id="logout-dokter" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-transparent">
    <div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Tombol close -->
      <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="logout-dokter">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Tutup</span>
      </button>
    
      <!-- Konten -->
          <div class="p-4 md:p-5 text-center">
            <img src="{{ asset('images/keluar.svg') }}" class="mx-auto mb-4 w-12 h-12" alt="Logout Icon">
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin ingin keluar?</h3>
            
            <!-- Tombol aksi -->
            <form method="POST" action="{{ route('logout') }}" class="inline">
              @csrf
              <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                Ya, logout
              </button>
            </form>
            <button data-modal-hide="logout-dokter" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
              Tidak, batal
            </button>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>