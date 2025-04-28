<x-layout-admin title="Kelola FAQ">
    <div class="bg-white p-6 font-['Inter']" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-faq></x-popup-faq>
        <div class="max-w-2xl mx-auto p-4 mt-20">
            @if(session('success'))
            <div id="alertDelete" class="mb-4 flex items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 shadow-md z-10 transition-opacity duration-500" role="alertDelete">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
            <p class="text-gray-600 mb-12">Apapun yang kamu ingin tahu tentang Medvet Animal Clinic, dan tidak menemukan jawaban?</p>
            <div class="border-t border-gray-200">
                    @foreach ($faqs as $faq)
                    <div class="border-t border-gray-200">
                        <x-popup-edit-faq :faq="$faq" />
                        <details class="py-4 mb-3">
                            <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                                <span>{{ $faq->title }}</span>
                                <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                            </summary>
                            <div class="mt-2 text-gray-600 text-justify">
                                {{ $faq->detail }}
                            </div>
                        </details>
                    </div>
                    @endforeach
            </div>
            </div>
        </div>

        <script>
            const plusIcon = "{{ asset('images/plus-circle.svg') }}";
            const minusIcon = "{{ asset('images/minus-circle.svg') }}";
        </script>

</x-layout-admin>

<script>
    // Hilangkan alert setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('alertDelete');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500); // Tunggu transisi selesai sebelum remove
        }
    }, 3000); // 3000ms = 3 detik
</script>

