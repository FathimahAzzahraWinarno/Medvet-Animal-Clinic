    <!-- Modal toggle -->
    <div class="flex justify-end">
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="bg-blue-700 m-6 text-white flex items-center font-semibold px-5 py-2 rounded-lg hover:bg-blue-800 text-md">
            <img src="{{ asset('images/plus.svg') }}" alt="Plus Icon" class="w-5 h-5 mr-1">
            Perawatan
        </button>
  <!-- Main modal -->
  <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
              <!-- Modal header -->
              <div class="flex items-center font-extrabold justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                  <h3 class="text-2xl font-semibold text-gray-800">
                      Tambah Perawatan
                  </h3>
                  <button type="button" class="text-blue-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-blue-500 dark:hover:text-white" data-modal-hide="static-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="p-4 md:p-5 space-y-6">
                <!-- Input File Gambar -->
                <div>
                    <label for="foto" class="block mb-2 text-sm font-medium font-semibold text-gray-800 ">Foto Perawatan</label>
                    <input type="file" id="foto" name="foto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                </div>

                <!-- Input Nama Perawatan -->
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium font-semibold text-gray-800">Nama Perawatan</label>
                    <input type="text" id="nama" name="nama" value="Vaksinasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-gray" required>
                </div>

                <!-- Input Deskripsi -->
                <div>
                    <label for="deskripsi" class="block mb-2 text-sm font-medium font-semibold text-gray-800">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:text-gray"
                        maxlength="300">Vaksinasi hewan adalah langkah pencegahan untuk melindungi hewan dari penyakit menular dengan merangsang sistem kekebalan tubuh.</textarea>
                    <p class="mt-1 text-sm text-gray-500">275 characters left</p>
                </div>
            </form>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                  <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border font-semibold border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-300 dark:text-gray-700 dark:border-gray-300 dark:hover:text-white dark:hover:bg-gray-400">Batal</button>
              </div>
          </div>
      </div>
  </div>