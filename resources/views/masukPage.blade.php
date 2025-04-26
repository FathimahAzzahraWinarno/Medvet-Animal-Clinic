@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Masuk</title>
<div class="flex items-center justify-center min-h-screen bg-cover bg-center bg-gray-900/70 bg-blend-darken font-['Inter']" style="background-image: url('/images/bgAnimal.jpg')">
    
    <div class="relative w-full max-w-md px-4">
        {{-- Alert sukses --}}
        @if(session('success'))
            <div id="alert" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 transition-opacity duration-500" role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif
    
        <!-- Form login -->
        <div class="w-full px-8 pt-4 pb-4 bg-gray-400/80 rounded-xl shadow-lg backdrop-blur-md">
            <a href="/"><img src="{{ asset('images/logo2.png') }}" alt="logo" class="w-20 h-20 mb-2 ml-2"></a>
            <h2 class="text-2xl font-semibold text-white text-left mt-0" id="form-title">Masuk</h2>
            <p class="text-sm text-gray-300 text-left mb-6">Selamat datang di Medvet Animal Clinic.</p>
    
            {{-- Tampilkan pesan error --}}
            @if (session('error-login'))
                <div class="text-red-600 text-sm mb-2">{{ session('error-login') }}</div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf {{-- penting untuk keamanan form --}}
    
                <div class="relative mb-5">
                    <input type="email" name="email" id="Email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="Email" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:text-blue-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Masukan Email<span class="text-red-500">*</span></label>
                </div>
    
                <div class="relative mb-1">
                    <input type="password" name="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="password" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:text-blue-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Masukan Password<span class="text-red-500">*</span></label>
                </div>
                <p class="text-xs text-gray-700 mt-1 mb-2">Minimal 8 karakter</p>
    
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-md transition">Masuk</button>
            </form>
    
            <p class="text-center text-gray-600 text-sm mt-4">
                <span id="toggle-text">Belum punya akun?</span>
                <a href="/daftar-page" id="toggle-link" class="text-blue-800 hover:underline">Daftar</a>
            </p>
        </div>
    </div>
    

<script>
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alert');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik
</script>