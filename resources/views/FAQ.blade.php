<x-layout title="FAQ">
    <section class="py-16 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/bg.svg')">
    <!-- Paw Print Kiri -->
    <img src="/images/paw1.svg" alt="Paw Left" class="absolute left-50 top-1/4 w-16 md:w-30 opacity-90">
    <!-- Paw Print Kanan -->
    <img src="/images/paw2.svg" alt="Paw Right" class="absolute right-50 top-1/6 w-16 md:w-40 transform scale-x-[1]">  
        <div class="p-2 w-[16%] mx-auto font-medium flex justify-center items-center space-x-1 mb-1 font-semibold font-['Inter']">
            <p>FAQs</p>
        </div>         
    
        <div class="max-w-5xl mx-auto text-center px-4">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 font-['Inter']">Frequently Asked Questions</h1>
            <p class="text-gray-700 mb-10 font-['Inter']">Temukan jawaban dari berbagai pertanyaan yang sering diajukan</p>
            <div class="mt-6 mb-20 flex items-center justify-center">
              </div>
            </div>
    </section>
    
    <div class="bg-white p-6 font-['Inter']">
       <div class="bg-white p-6 font-['Inter']">
    <div class="max-w-2xl mx-auto p-4 mt-10 mb-20">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
        <p class="text-gray-600 mb-12">Apapun yang kamu ingin tahu tentang Medvet Animal Clinic, dan tidak menemukan jawaban?</p>
        <div class="border-t border-gray-200">
            @foreach ($faqs as $faq)
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
</x-layout>