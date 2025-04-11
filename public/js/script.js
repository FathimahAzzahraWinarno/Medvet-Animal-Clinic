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

