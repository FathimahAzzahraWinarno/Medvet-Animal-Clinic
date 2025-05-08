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
  
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center justify-center font-semibold gap-2 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-50">
          Keluar
          <img src="{{asset('images/keluar.svg')}}" class="w-5 h-5">
       </button>
      </form>
      
    
    </aside>
  