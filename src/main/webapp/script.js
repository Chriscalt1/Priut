document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            entry.target.classList.toggle('visible', entry.isIntersecting);
        });
    }, {
        rootMargin: '0px',
        threshold: 0.1
    });
    const blocks = document.querySelectorAll('.container1, .pet.block');
    blocks.forEach(block => {
        observer.observe(block);
    });

});

