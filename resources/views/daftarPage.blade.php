@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Daftar</title>

<div class="relative flex items-center justify-center min-h-screen bg-cover bg-center bg-gray-900/70 bg-blend-darken font-['Inter']" style="background-image: url('/images/bgAnimal.jpg')">

    {{-- CARD FORM --}}
    <div class="w-full max-w-md px-8 pt-4 pb-4 bg-gray-400/80 rounded-xl shadow-lg backdrop-blur-md mt-10">
        <a href="/">
            <img src="{{ asset('images/logo2.png') }}" alt="logo" class="w-20 h-20 mb-2 ml-2">
        </a>
        <h2 class="text-2xl font-semibold text-white text-left mt-0" id="form-title">Daftar</h2>
        <p class="text-sm text-white text-left mb-6">Selamat datang di Medvet Animal Clinic.</p>

        @if (session('error'))
            <div  class="p-4 mb-4 text-sm text-red-800 bg-red-200 rounded-lg" role="alert">
                {{ session('error') }}
            </div>
        @endif

        
        
        <form method="POST" action="{{ route('daftar-page') }}">
            @csrf
            @error('email')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
            <div class="relative mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-blue-800">Email</label>
                <input type="email" name="email" id="email" class="bg-transparent border border-gray-200 text-white text-sm rounded-lg focus:border-blue-800 block w-full p-3 " placeholder="name@gmail.com" required />
            </div>
            
            @error('name')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
            <div class="relative mb-5">
                <label for="nama" class="block mb-2 text-sm font-medium text-blue-800">Nama</label>
                <input type="text" name="name" id="nama" class="bg-transparent border border-gray-200 text-white text-sm rounded-lg focus:border-blue-800 block w-full p-3 " placeholder="Masukan namamu" required />
            </div>

            <div class="relative mb-5">
                <label for="date" class="block mb-2 text-sm font-medium text-blue-800">
                    Tanggal akun terdaftar
                </label>
                <input 
                    type="date" 
                    id="date" 
                    class="bg-transparent border border-gray-200 text-white text-sm rounded-lg focus:border-blue-800 block w-full p-3" 
                    disabled
                />
            </div>
            
            @error('password')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
            <div class="relative mb-1">
                <label for="password" class="block mb-2 text-sm font-medium text-blue-800">Password</label>
                    <input type="password" name="password" id="password" placeholder="Masukan password" class="bg-transparent border border-gray-200 text-white text-sm rounded-lg focus:border-blue-800 block w-full p-3 " required />
            </div>
            <p class="text-xs text-gray-700 mt-1 mb-2">Minimal 8 karakter</p>

            <button type="submit" class="w-full bg-blue-800 hover:bg-blue-900 text-white font-semibold py-3 rounded-md transition">Daftar</button>
        </form>

        <p class="text-center text-gray-600 text-sm mt-4">
            Sudah punya akun?
            <a href="/masuk-page" class="text-blue-800 hover:underline">Masuk</a>
        </p>
    </div>
</div>

<script>
    setTimeout(() => {
        const alertError = document.getElementById('alert-error');
        if (alertError) alertError.remove();
    }, 3000);

    document.addEventListener("DOMContentLoaded", function () {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').value = today;
  });
</script>

