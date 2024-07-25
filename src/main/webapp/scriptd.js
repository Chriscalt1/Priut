document.addEventListener("DOMContentLoaded", function() {
    var popup = document.querySelector('.popup');
    var popupForm = document.getElementById('popupForm');
    var closeButtons = document.querySelectorAll('.close-btn');

    function showPopupForm() {
        popupForm.style.display = 'block';
    }
    function hidePopupForm() {
        popupForm.style.display = 'none';
    }
    function closePopup() {
        popup.style.display = 'none';
    }
    popup.addEventListener('click', function(event) {
        if (event.target !== popup.querySelector('.close-btn')) {
            showPopupForm();
        }
    });
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.stopPropagation();
            if (button.closest('.popup-form')) {
                hidePopupForm();
            } else {
                closePopup();
            }
        });
    });
});
