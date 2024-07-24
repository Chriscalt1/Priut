document.addEventListener("DOMContentLoaded", function() {
    function showPopup() {
        document.querySelector('.popup').style.display = 'block';
        document.querySelector('.overlay').style.display = 'block';
    }

    function hidePopup() {
        document.querySelector('.popup').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }

    function showForm() {
        document.querySelector('.popup-form').style.display = 'block';
        document.querySelector('.overlay').style.display = 'block';
    }

    function hideForm() {
        document.querySelector('.popup-form').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }

    document.querySelector('.popup .close-btn').addEventListener('click', hidePopup);
    document.querySelector('.popup-form .close-btn').addEventListener('click', hideForm);

    document.querySelector('.popup').addEventListener('click', function() {
        hidePopup();
        showForm();
    });

    setTimeout(showPopup, 2000);
});
