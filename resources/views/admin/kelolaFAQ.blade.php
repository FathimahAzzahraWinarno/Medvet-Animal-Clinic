<x-layout-admin title="Kelola FAQ">
    <div class="bg-white p-6 font-['Inter']" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-faq></x-popup-faq>
        <div class="max-w-2xl mx-auto p-4 mt-20">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
            <p class="text-gray-600 mb-12">Apapun yang kamu ingin tahu tentang Medvet Animal Clinic, dan tidak menemukan jawaban?</p>
            <div class="border-t border-gray-200">
                <details class="py-4 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Apa saja yang tersedia di klinik ini?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Klinik ini menyediakan berbagai layanan kesehatan untuk hewan peliharaan,
                        termasuk operasi minor dan mayor, pengobatan, serta fasilitas rawat inap
                        bagi hewan yang membutuhkan perawatan lebih lanjut. Selain itu, tersedia
                        layanan pemeriksaan medis seperti cek darah, cek mikroskopis, dan USG untuk
                        mendiagnosis kondisi kesehatan hewan secara lebih mendetail. Klinik ini juga
                        menawarkan layanan vaksinasi guna mencegah berbagai penyakit menular pada hewan peliharaan.
                        Dengan layanan yang lengkap, klinik ini berkomitmen untuk memberikan perawatan terbaik demi
                        kesehatan dan kesejahteraan hewan kesayangan Anda.
                    </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Apakah bisa melakukan rawat inap untuk hewan yang sakit?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Klinik menyediakan fasilitas rawat inap bagi hewan yang membutuhkan perawatan lebih
                        lanjut. Hewan yang sedang sakit atau dalam masa pemulihan setelah operasi dapat dirawat
                        dengan pengawasan dokter hewan profesional, sehingga mendapatkan perawatan yang optimal
                        sesuai dengan kebutuhannya.                    
                    </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Apakah harus membuat janji terlebih dahulu sebelum datang?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Sebaiknya membuat janji terlebih dahulu sebelum datang ke klinik agar mendapatkan
                        pelayanan yang lebih cepat dan terjadwal. Namun, klinik juga menerima pasien yang
                        datang langsung tanpa janji temu, tetapi kemungkinan harus menunggu lebih lama karena
                        antrean bisa cukup panjang, terutama pada jam sibuk atau saat banyak pasien yang sudah
                        memiliki reservasi sebelumnya.                    
                    </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Bagaimana cara membuat janji temu?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Anda dapat membuat janji temu dengan melakukan reservasi melalui website klinik.
                        Dengan reservasi online, Anda bisa memilih jadwal yang tersedia dan menghindari
                        antrean panjang saat datang ke klinik.                   
                     </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Kapan waktu yang tepat untuk memvaksin hewan peliharaan saya?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Waktu yang tepat untuk memvaksin hewan peliharaan Anda tergantung pada jenis hewan dan vaksinnya.
                        Umumnya, vaksinasi pertama diberikan saat hewan berusia beberapa minggu, seperti anak anjing
                        atau anak kucing yang mulai divaksin pada usia 6–8 minggu, kemudian dilanjutkan dengan vaksin
                        booster sesuai jadwal yang direkomendasikan oleh dokter hewan. Untuk memastikan jadwal vaksinasi
                        yang tepat, Anda dapat berkonsultasi langsung dengan dokter hewan di klinik.                   
                    </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Apakah klinik menyimpan rekam medis hewan peliharaan pelanggan?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Klinik menyimpan rekam medis hewan peliharaan pelanggan dalam bentuk digital.
                        Dengan sistem rekam medis digital, riwayat kesehatan hewan dapat tercatat dengan rapi dan aman,
                        sehingga memudahkan dokter hewan dalam memberikan diagnosis serta perawatan yang sesuai pada setiap
                        kunjungan.                   
                     </div>
                </details>
                <details class="py-4 border-t border-gray-200 mb-3">
                    <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                        <span>Bagaimana saya mendapatkan rekam medis hewan saya?</span>
                        <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                    </summary>
                    <div class="mt-2 text-gray-600 text-justify">
                        Anda dapat mengakses rekam medis hewan peliharaan melalui akun pelanggan di website klinik.
                        Semua riwayat kesehatan, termasuk hasil pemeriksaan, vaksinasi, dan perawatan, akan tersimpan
                        secara digital dan dapat diakses kapan saja untuk memudahkan pemantauan kesehatan hewan Anda. 
                    </div>
                </details>
            </div>
        </div>

        <script>
            const plusIcon = "{{ asset('images/plus-circle.svg') }}";
            const minusIcon = "{{ asset('images/minus-circle.svg') }}";
        </script>

</x-layout-admin>