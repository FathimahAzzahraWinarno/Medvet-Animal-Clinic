@props(['promo'])

<!-- Modal toggle -->
<div>
    <button data-modal-target="modal-edit-{{ $promo->id }}" 
        data-modal-toggle="modal-edit-{{ $promo->id }}" 
        type="button">
        <img src="{{ asset('images/edit.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
    </button>
    
      <button data-modal-target="promo-delete-{{ $promo->id }}" data-modal-toggle="promo-delete-{{ $promo->id }}" type="button">
        <div class="top-4 right-3">
            <img src="{{ asset('images/delete.svg') }}" alt="edit" class="w-5 h-5 cursor-pointer">
            
        </div>
        </button>
    
</div>

  <!-- Main modal -->
  <div id="promo-delete-{{ $promo->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="promo-delete-{{ $promo->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus promo ini?</h3>
                <form action="{{ route('deletePromo', ['id' => $promo->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white mb-3 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, saya yakin
                    </button>
                </form>
                <button data-modal-hide="promo-delete-{{ $promo->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100
                 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batal</button>
            </div>
        </div>
    </div>
</div> 
  
 <!-- Main modal -->
<!-- Modal Edit Promo -->
<div id="modal-edit-{{ $promo->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Edit Promo</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-edit-{{ $promo->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('updatePromo', ['id' => $promo->id]) }}" method="POST"  class="p-4 md:p-5">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name-{{ $promo->id }}" class="block mb-2 text-sm font-medium text-gray-800">Nama Promo</label>
                        <input type="text" name="nama" id="name-{{ $promo->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="Type product name" value="{{ $promo->nama }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price-{{ $promo->id }}" class="block mb-2 text-sm font-medium text-gray-800">Harga</label>
                        <input type="number" name="harga" id="price-{{ $promo->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="Rp" value="{{ $promo->harga }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="diskon-{{ $promo->id }}" class="block mb-2 text-sm font-medium text-gray-800">Diskon</label>
                        <input type="text" name="diskon" id="diskon-{{ $promo->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="35%" value="{{ $promo->diskon }}">
                    </div>
                </div>
                <div class="flex items-center p-2 md:p-3 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-edit-{{ $promo->id }}" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    <button data-modal-hide="modal-edit-{{ $promo->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border font-semibold border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-300 dark:text-gray-700 dark:border-gray-300 dark:hover:text-white dark:hover:bg-gray-400">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
