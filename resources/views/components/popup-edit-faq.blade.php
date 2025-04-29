@props(['faq'])

<!-- Modal toggle -->
<div class="flex mt-4 justify-end gap-3">
    <!-- Tombol Edit -->
    <button data-modal-target="edit-modal-{{ $faq->id }}" data-modal-toggle="edit-modal-{{ $faq->id }}" class="block text-white" type="button">
        <img src="{{ asset('images/edit.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
    </button>

      <button data-modal-target="delete-modal-{{ $faq->id }}" data-modal-toggle="delete-modal-{{ $faq->id }}" class="block text-white" type="button">
        <img src="{{ asset('images/delete.svg') }}" alt="delete" class="w-5 h-5 cursor-pointer">
    </button>
</div>
  
<div id="edit-modal-{{ $faq->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-800">
                    Edit FAQ
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal-{{ $faq->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

                <!-- Form Edit -->
            <form method="POST" action="{{ route('updateFaq', $faq->id) }}">
                @csrf
                @method('PUT')

                <!-- Pertanyaan -->
                <div class="m-5">
                    <label for="title-{{ $faq->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Pertanyaan</label>
                    <input type="text" id="title-{{ $faq->id }}" name="title" value="{{ $faq->title }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>

                <!-- Deskripsi -->
                <div class="m-5">
                    <label for="detail-{{ $faq->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Deskripsi</label>
                    <textarea id="detail-{{ $faq->id }}" name="detail" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        maxlength="300">{{ $faq->detail }}</textarea>
                </div>

                <!-- Footer Modal -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    <button data-modal-hide="edit-modal-{{ $faq->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border font-semibold border-gray-300 hover:bg-gray-100 hover:text-blue-700">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


    
<div id="delete-modal-{{ $faq->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal-{{ $faq->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus perawatan ini?</h3>
                
                <!-- Form Delete -->
                <form action="{{ route('deleteFaq', ['id' => $faq->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white mb-3 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, saya yakin
                    </button>
                </form>
                
                
                <button data-modal-hide="delete-modal-{{ $faq->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100
                    dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Tidak, batal
                </button>
            </div>
        </div>
    </div>
</div>

    
    