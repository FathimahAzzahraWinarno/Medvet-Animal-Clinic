<nav class="bg-white">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center">
        <!-- Logo dan Navigation Links -->
        <div class="flex items-center space-x-8">
          <!-- Logo -->
          <div class="flex items-center">
            <a href="/">
            <img class="h-8 w-auto mr-4" src="{{ asset('images/logo.svg') }}" alt="Your Company"></a>
          </div>
    
          <!-- Navigation Links -->
          <div class="flex space-x-8 font-bold font-['Inter']">
            <a href="perawatan" class="text-sm font-medium text-gray-800 hover:text-blue-600">Perawatan</a>
            <a href="promo" class="text-sm font-medium text-gray-800 hover:text-blue-600">Promo</a>
            <a href="reservasi" class="text-sm font-medium text-gray-800 hover:text-blue-600">Reservasi</a>
            <a href="produk" class="text-sm font-medium text-gray-800 hover:text-blue-600">Produk</a>
            <a href="tentang_kami" class="text-sm font-medium text-gray-800 hover:text-blue-600">Tentang Kami</a>
            <a href="contact" class="text-sm font-medium text-gray-800 hover:text-blue-600">Contact Us</a>
            <a href="FAQ" class="text-sm font-medium text-gray-800 hover:text-blue-600">FAQ</a>
            {{-- <a href="blog" class="text-sm font-medium text-gray-800 hover:text-blue-600">Blog</a> --}}
          </div>
        </div>
    
        <!-- Right Section -->
        <div class="ml-auto flex items-center space-x-4 font-bold font-['Inter']">
          <!-- before login -->
          @guest
          <a href="/masuk-page" class="text-sm font-medium text-gray-800 hover:text-blue-600">Masuk</a>
           {{-- <form action="/logout" method="POST">
              <button type="submit">logout</button>
            </form> --}}
          <a href="/daftar-page" class="text-sm font-medium bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
            Daftar
        </a>
        @endguest

              <!-- after login -->
    @auth
      <div class="relative">
        <!-- Button -->
        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-2 focus:ring-blue-300 cursor-pointer" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown">
          <span class="sr-only">Open user menu</span>
          <img src="{{ asset('images/karyawan.jpeg') }}" alt="user" class="w-11 h-11 rounded-full" />
        </button>

        <!-- Dropdown -->
        <div id="user-dropdown" class="z-50 hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200">
          <div class="px-4 py-3 text-sm text-gray-900 border-b border-gray-100">
            <div class="font-medium break-words">{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-500 break-words">{{ Auth::user()->email }}</div>
          </div>
          <ul class="py-2 text-sm text-gray-700">
            <li>
              <a href="{{ route('user.profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
              </form>
            </li>
          </ul>
        </div>
        
      </div>
    @endauth
        </div>
      </div>
    </div>
  </nav>