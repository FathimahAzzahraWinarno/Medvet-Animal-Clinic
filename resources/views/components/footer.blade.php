
<div class="bg-[#234bd2] text-white py-10 font-['Inter']">
    <div class="bg-[#234bd2] max-w-7xl mx-auto px-11 text-white p-6 mb-20">
        <p class="text-[#96c2fa] font-semibold mb-4">Medvet Animal Clinic</p>
        <h1 class="text-2xl font-bold py-2 mb-2">Bantu Kami Lebih Baik, Beri Pendapatmu!</h1>
        <p>Kami selalu siap menerima masukan untuk meningkatkan layanan klinik  .</p>
    </div>
    <div class="flex justify-between max-w-7xl mx-auto px-6">
        <!-- Contact Info Section -->
        <div class="max-w-screen-lg ml-5">
            <!-- Support Info -->
            <div class="items-start space-x-3 ">
                <div class="flex space-x-10">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" class="w-10 h-10">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" class="w-10 h-10">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/dribbble.png" class="w-10 h-10">
                </div>
            </div>
            
             <!-- Jam Operasional -->
             <div class="mt-10">
                <p class="mb-2"><strong>Senin - Rabu:</strong> 9.00 pagi - 21.00 malam</p>
                <p class="mb-2"><strong>Kamis:</strong> 12.00 siang - 20.00 malam</p>
                <p><strong>Jumat - Minggu:</strong> 9.00 pagi - 21.00 malam</p>
            </div>

            <div class="flex flex-col items-center mt-48">
                <img src="{{ asset('images/logo2.png') }}" alt="logo" class="w-[120px] py-4">
                <div class="flex space-x-4">
                    <a href="/" class="rounded-md px-3 py-2 text-sm font-medium">Beranda</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Perawatan</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Promo</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Reservasi</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Produk</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">FAQ</a>
                </div>
            </div>
        </div>
        

        <!-- Form Section -->
        <div class="bg-white text-black rounded-[16px] py-12 px-12 shadow-lg w-[30rem]">
            <form>
                <div class="mb-4">
                    <label for="nama" class="block text-sm mb-1">Nama Lengkap</label>
                    <input id="nama" type="text" placeholder="Masukkan nama anda" class="border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] rounded-[8px] p-2 w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm mb-1">Email</label>
                    <input id="email" type="email" placeholder="you@company.com" class="border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] rounded-[8px] p-2 w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-sm mb-1">Pesan</label>
                    <textarea id="pesan" placeholder="" class="border border-blue-200 shadow-[0px_0px_10px_rgba(59,130,246,0.3)] rounded-[8px] p-2 w-full h-[100px] shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div class="flex items-center mb-4">
                    <input type="checkbox" class="mr-2">
                    <span>You agree to our friendly <a href="#" class="text-blue-600 underline">privacy policy</a></span>
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-[8px] w-full">Kirim pesan</button>
            </form>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="flex flex-col items-center mt-20 w-full space-y-4">
        <div class="w-[85%] border-t border-white my-6"></div>
        <div class="flex justify-between w-[85%] text-sm">
            <span>© 2025 Medvet Animal Clinic - All rights reserved.</span>
            <div class="flex space-x-4">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </div>
</div>
</div>