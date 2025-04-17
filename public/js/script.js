function moveToCenter(clickedCard) {
    let cards = document.querySelectorAll('.card');

    // Reset semua kartu ke ukuran kecil & layer belakang
    cards.forEach(card => {
        card.classList.remove("active");
        card.style.transform = "scale(0.9)";
        card.style.zIndex = "0";
    });

    // Perbesar kartu yang diklik & pindah ke layer atas
    clickedCard.classList.add("active");
    clickedCard.style.transform = "scale(1.05)";
    clickedCard.style.zIndex = "10";

    // Geser kartu sesuai posisi yang diklik
    let index = Array.from(cards).indexOf(clickedCard);
    let leftCard = cards[index - 1];
    let rightCard = cards[index + 1];

    if (leftCard) {
        leftCard.style.transform = "translateX(-30px) scale(0.9)";
    }
    if (rightCard) {
        rightCard.style.transform = "translateX(30px) scale(0.9)";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('details').forEach(detail => {
        detail.addEventListener('toggle', () => {
            const summaryImage = detail.querySelector('summary img');
            if (summaryImage) {
                summaryImage.src = detail.open ? minusIcon : plusIcon;
            }
        });
    });

    let cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener("click", function() {
            moveToCenter(card);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    function setupDropdown(selectId, iconId) {
        const selectElement = document.getElementById(selectId);
        const dropdownIcon = document.getElementById(iconId);

        selectElement.addEventListener("click", function () {
            dropdownIcon.classList.toggle("rotate-180");
        });

        document.addEventListener("click", function (event) {
            if (!selectElement.contains(event.target)) {
                dropdownIcon.classList.remove("rotate-180");
            }
        });
    }

    // Setup dropdown untuk Jenis Kelamin
    setupDropdown("genderSelect", "genderDropdownIcon");
    setupDropdown("treatmentSelect", "treatmentDropdownIcon");
    setupDropdown("timeSelect", "timeDropdownIcon");
    setupDropdown("doctorSelect", "doctorDropdownIcon");
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdownItems = document.querySelectorAll('#dropdown a');
    const dropdown = document.getElementById('dropdown');
  
    dropdownItems.forEach(item => {
      item.addEventListener('click', () => {
        dropdown.classList.add('hidden');
      });
    });
  });
    
        // Script Tambah Form Hewan
        function tambahFormHewan() {
            const container = document.createElement('div');
            container.className = "grid grid-cols-1 md:grid-cols-2 gap-4 mt-4";
        
            container.innerHTML = `
            <!-- Dropdown Manual -->
            <div class="md:col-span-2">
                <label for="hewan" class="block mb-2 text-sm font-medium text-gray-800">Pilih hewanmu</label>
                <div class="flex items-center">
                <select id="hewan" class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg px-5 py-2">
                    <option>Miu</option>
                    <option>Bili</option>
                    <option>Bucil</option>
                    <option>Hewan Baru</option>
                </select>
                <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="btn-hapus ml-auto bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-red-600 dark:hover:bg-red-700">
                    Hapus
                </button>
                </div>
            </div>
        
            <!-- Modal Delete -->
            <div id="delete-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus form ini?</h3>
                            <button id="confirmDelete" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya, saya yakin
                            </button>
                            <button id="cancelDelete" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batal</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Form inputan untuk hewan -->
            <div class="md:col-span-2">
                <label class="block text-gray-700">Nama Peliharaan</label>
                <input type="text" placeholder="Masukkan nama peliharaan"
                class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
            </div>
            <div>
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input type="text" placeholder="Masukkan Jenis Kelamin"
                class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
            </div>
            <div>
                <label class="block text-gray-700">Spesies</label>
                <input type="text" placeholder="Masukkan Spesies"
                class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
            </div>
            <div>
                <label class="block text-gray-700">Ras</label>
                <input type="text" placeholder="Masukkan Ras"
                class="w-full mt-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-blue-200">
            </div>
            `;
        
            // Sisipkan form ke halaman
            const formSection = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.gap-4.mt-4');
            formSection.parentNode.insertBefore(container, formSection.nextSibling);
        
            // Modal functionality
            const openModalButton = container.querySelector('[data-modal-toggle="delete-modal"]');
            const modal = container.querySelector('#delete-modal');
            const closeModalButtons = modal.querySelectorAll('[data-modal-hide="delete-modal"]');
            const confirmDeleteButton = modal.querySelector('#confirmDelete');
            const cancelDeleteButton = modal.querySelector('#cancelDelete');
        
            // Open modal when delete button is clicked
            openModalButton.addEventListener('click', function () {
                modal.classList.remove('hidden');
            });
        
            // Close modal when close buttons are clicked
            closeModalButtons.forEach(button => {
                button.addEventListener('click', function () {
                    modal.classList.add('hidden');
                });
            });
        
            // Function to remove the form
            confirmDeleteButton.addEventListener('click', function () {
                // Remove the container (form)
                container.remove();
                modal.classList.add('hidden'); // Close the modal
            });
        
            // Close modal without removing the form when cancel button is clicked
            cancelDeleteButton.addEventListener('click', function () {
                modal.classList.add('hidden');
            });
        }
        
        
        
