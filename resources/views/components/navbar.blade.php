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
            <a href="/" class="text-sm font-medium text-gray-800 hover:text-blue-600">Beranda</a>
            <a href="perawatan" class="text-sm font-medium text-gray-800 hover:text-blue-600">Perawatan</a>
            <a href="promo" class="text-sm font-medium text-gray-800 hover:text-blue-600">Promo</a>
            <a href="reservasi" class="text-sm font-medium text-gray-800 hover:text-blue-600">Reservasi</a>
            <a href="produk" class="text-sm font-medium text-gray-800 hover:text-blue-600">Produk</a>
            <a href="contact" class="text-sm font-medium text-gray-800 hover:text-blue-600">Contact Us</a>
            <a href="FAQ" class="text-sm font-medium text-gray-800 hover:text-blue-600">FAQ</a>
          </div>
        </div>
    
        <!-- Right Section -->
        <div class="ml-auto flex items-center space-x-4 font-bold font-['Inter']">
          <a href="/masuk-page" class="text-sm font-medium text-gray-800 hover:text-blue-600">Masuk</a>
           {{-- <form action="/logout" method="POST">
              <button type="submit">logout</button>
            </form> --}}
          <a href="/daftar-page" class="text-sm font-medium bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
            Daftar
        </a>
        </div>
      </div>
    </div>
  </nav>