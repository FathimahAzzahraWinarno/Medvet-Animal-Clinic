@vite('resources/css/app.css')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<title>Daftar</title>
<div class="flex items-center justify-center min-h-screen bg-cover bg-center bg-gray-900/70 bg-blend-darken font-['Inter']" style="background-image: url('/images/bgAnimal.jpg')">
    <div class="w-full max-w-md px-8 pt-4 pb-4 bg-gray-400/80 rounded-xl shadow-lg backdrop-blur-md">
        <a href="/">
        <img src="{{ asset('images/logo2.png') }}" alt="logo" class="w-20 h-20 mb-2 ml-2"></a>
        <h2 class="text-2xl font-semibold text-white text-left mt-0" id="form-title">Daftar</h2>
        <p class="text-sm text-gray-300 text-left mb-6">Selamat datang di Medvet Animal Clinic.</p>
        
        <form>
            <div id="name-field" class="mb-4">
                <label class="block text-gray-300 text-sm mb-2">Nama<span class="text-red-500">*</span></label>
                <input type="text" class="w-full p-3 rounded-md bg-gray-500 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama kamu">
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 text-sm mb-2">Email<span class="text-red-500">*</span></label>
                <input type="email" class="w-full p-3 rounded-md bg-gray-500 text-white focus:outline-none focus:ring focus:ring-blue-200" placeholder="Masukkan email kamu">
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 text-sm mb-2">Password<span class="text-red-500">*</span></label>
                <input type="password" class="w-full p-3 rounded-md bg-gray-500 text-white focus:outline-none focus:ring focus:ring-blue-200" placeholder="Buat kata sandi">
                <p class="text-xs text-gray-700 mt-1">Minimal 8 karakter</p>
            </div>

            <button id="submit-button" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-md transition">Masuk</button>
        </form>

        <p class="text-center text-gray-600 text-sm mt-4">
            <span id="toggle-text">Sudah punya akun?</span>
            <a href="/masuk-page" id="toggle-link" class="text-blue-800 hover:underline">Masuk</a>
        </p>
    </div>
</div>