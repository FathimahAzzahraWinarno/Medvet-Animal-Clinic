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

  const dropdownButton = document.getElementById('dropdownDefaultButton');
            const dropdownMenu = document.getElementById('dropdown');
        
            dropdownButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });
        
            document.addEventListener('click', function (event) {
                const isClickInside = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        // Script Tambah Form Hewan
    function tambahFormHewan() {
        const container = document.createElement('div');
        container.className = "grid grid-cols-1 md:grid-cols-2 gap-4 mt-4";

        container.innerHTML = `
            <button id="dropdownDefaultButton" 
                    class="text-gray-700 font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center 
                    dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-blue-800" 
                    type="button">
                    Pilih Hewanmu
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
        
            <!-- Dropdown Menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 absolute mt-1">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Miu</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Billy</a>
                    </li>
                    <li>
                        <a href="#hewanBaru" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hewan Baru</a>
                    </li>
                </ul>
            </div>

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

        // Sisipin ke container utama
        const formSection = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.gap-4.mt-4');
        formSection.parentNode.insertBefore(container, formSection.nextSibling);
    }
