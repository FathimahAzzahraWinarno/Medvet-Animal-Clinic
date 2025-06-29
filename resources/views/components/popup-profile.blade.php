<button data-modal-target="modal-edit" data-modal-toggle="modal-edit" class="text-white flex items-center gap-2" type="button">
    <img src="{{ asset('images/edit.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
    Edit
</button>

<div id="modal-edit" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-800">
                    Edit Profile
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-edit">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

                <!-- Form Edit -->
                <form action="{{ route('update.profile', ['id' => auth()->user()->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="m-5">
                        <label for="nama" class="block mb-2 text-sm font-semibold text-gray-800">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama', auth()->user()->name) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                    </div>
                
                    <div class="m-5">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-800">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                    </div>
                
                    <div class="m-5">
                        <label for="telepon" class="block mb-2 text-sm font-semibold text-gray-800">Telepon</label>
                        <input type="number" id="telepon" name="telepon" value="{{ old('telepon', auth()->user()->telepon) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                    </div>
                
                    <div class="m-5">
                        <label for="alamat" class="block mb-2 text-sm font-semibold text-gray-800">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300">{{ old('alamat', auth()->user()->alamat) }}</textarea>
                    </div>
                
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Simpan</button>
                        <button data-modal-hide="modal-edit" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 hover:text-blue-700 rounded-lg">Batal</button>
                    </div>
                </form>   
        </div>
    </div>
</div>
