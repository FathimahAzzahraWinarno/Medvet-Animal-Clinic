<x-layout-admin title="Kelola FAQ">
    <div class="bg-white p-6 font-['Inter']" style="background-image: url('/images/bgAdmin.svg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <x-popup-faq></x-popup-faq>
        <div class="max-w-2xl mx-auto p-4 mt-20">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
            <p class="text-gray-600 mb-12">Apapun yang kamu ingin tahu tentang Medvet Animal Clinic, dan tidak menemukan jawaban?</p>
            <div class="border-t border-gray-200">
                    @foreach ($faqs as $faq)
                    <x-popup-edit-faq></x-popup-edit-faq>
                    <details class="py-4 border-t border-gray-200 mb-3">
                        <summary class="cursor-pointer text-gray-800 font-semibold flex items-center justify-between">
                            <span>{{ $faq->title }}</span>
                            <img src="{{ asset('images/plus-circle.svg') }}" alt="Plus" class="w-5 h-5" />
                        </summary>
                        <div class="mt-2 text-gray-600 text-justify">
                            {{ $faq->detail }}
                        </div>
                    </details>
                    @endforeach
            </div>
            </div>
        </div>

        <script>
            const plusIcon = "{{ asset('images/plus-circle.svg') }}";
            const minusIcon = "{{ asset('images/minus-circle.svg') }}";
        </script>

</x-layout-admin>