document.addEventListener('DOMContentLoaded', function () {
    var openButton = document.getElementById('openButton');
    var popupForm = document.getElementById('popupForm');
    var closeButton = document.getElementById('closeButton');

    openButton.addEventListener('click', function () {
        popupForm.classList.remove('hidden');
    });

    closeButton.addEventListener('click', function () {
        popupForm.classList.add('hidden');
    });

    window.addEventListener('click', function (event) {
        if (event.target == popupForm) {
            popupForm.classList.add('hidden');
        }
    });
});
