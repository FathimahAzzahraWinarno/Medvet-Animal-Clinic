@props(['perawatan'])

<!-- Modal toggle -->
<!-- Tombol Buka Modal -->
<button data-modal-target="modal-{{ $perawatan->id }}" data-modal-toggle="modal-{{ $perawatan->id }}" class="block text-white" type="button">
    <div class="absolute top-4 right-10">
        <img src="{{ asset('images/edit.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
    </div>
</button>

<!-- Modal -->
<div id="modal-{{ $perawatan->id }}" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center overflow-y-auto overflow-x-hidden">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-300">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t border-gray-200 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-800">
                    Edit Perawatan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-{{ $perawatan->id }}">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13"/></svg>
                </button>
            </div>

            <!-- Modal Body -->
            <form method="POST" action="{{ route('updatePerawatan', $perawatan->id) }}" enctype="multipart/form-data" class="p-4 space-y-4 text-left">
                @csrf
                @method('PUT')

                <!-- Gambar -->
                <div>
                    <label for="gambar-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Foto Perawatan</label>
                    <input type="file" id="gambar-{{ $perawatan->id }}" name="gambar"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                </div>

                <!-- Nama -->
                <div>
                    <label for="nama-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Nama Perawatan</label>
                    <input type="text" id="nama-{{ $perawatan->id }}" name="nama" value="{{ $perawatan->nama }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Slug</label>
                    <input type="text" id="slug-{{ $perawatan->id }}" name="slug" value="{{ $perawatan->slug }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Deskripsi</label>
                    <textarea id="deskripsi-{{ $perawatan->id }}" name="deskripsi" rows="4"
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        maxlength="300">{{ $perawatan->deskripsi }}</textarea>
                    <p class="mt-1 text-sm text-gray-500">Maksimal 300 karakter</p>
                </div>

                <!-- Harga -->
                <div>
                    <label for="harga-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Harga</label>
                    <input type="number" id="harga-{{ $perawatan->id }}" name="harga" value="{{ $perawatan->harga }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Diskon -->
                <div>
                    <label for="diskon-{{ $perawatan->id }}" class="block mb-2 text-sm font-semibold text-gray-800">Diskon</label>
                    <input type="number" id="diskon-{{ $perawatan->id }}" name="diskon" value="{{ $perawatan->diskon }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Checkbox Diskon Aktif -->
                <div class="flex items-center">
                    <input id="is_diskon-{{ $perawatan->id }}" type="checkbox" name="is_diskon" value="1" {{ $perawatan->is_diskon ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    <label for="is_diskon-{{ $perawatan->id }}" class="ml-2 text-sm font-medium text-blue-700">Diskon Aktif</label>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end pt-4 border-t border-gray-200">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700">
                        Simpan
                    </button>
                    <button type="button" data-modal-hide="modal-{{ $perawatan->id }}"
                        class="ml-3 py-2.5 px-5 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white" type="button">
    <div class="absolute top-4 right-3">
        <img src="{{ asset('images/delete.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
        
    </div>
    </button>
    
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
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
                   <form action="{{ route('deletePerawatan', ['id' => $perawatan->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white mb-3 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, saya yakin
                    </button>
                </form>
                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100
                     dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batal</button>
                </div>
            </div>
        </div>
    </div>

    
    