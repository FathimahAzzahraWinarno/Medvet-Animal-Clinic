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
            <div class="relative mb-5">
                <input type="text" id="Email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="Email" class="absolute text-sm text-gray-500 dark:text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-blue-800 peer-focus:dark:text-blue-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukan Email<span class="text-red-500">*</span></label>
            </div>

            <div class="relative mb-5">
                <input type="text" id="nama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="nama" class="absolute text-sm text-gray-500 dark:text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-blue-800 peer-focus:dark:text-blue-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukan Nama<span class="text-red-500">*</span></label>
            </div>

            <div class="relative">
                <input type="text" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="password" class="absolute text-sm text-gray-500 dark:text-gray-700 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-blue-800 peer-focus:dark:text-blue-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukan Password<span class="text-red-500">*</span></label>
            </div>
            <p class="text-xs text-gray-700 mt-1 mb-2">Minimal 8 karakter</p>

            <button id="submit-button" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-md transition">Masuk</button>
        </form>

        <p class="text-center text-gray-600 text-sm mt-4">
            <span id="toggle-text">Sudah punya akun?</span>
            <a href="/masuk-page" id="toggle-link" class="text-blue-800 hover:underline">Masuk</a>
        </p>
    </div>
</div>