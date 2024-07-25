let currentIndex = 0;
const itemsPerPage = 2;
const newsContainer = document.getElementById('news-container');
const newsItems = newsContainer.children;
const totalPages = Math.ceil(newsItems.length / itemsPerPage);

function showItems() {
    for (let i = 0; i < newsItems.length; i++) {
        if (i >= currentIndex * itemsPerPage && i < (currentIndex + 1) * itemsPerPage) {
            newsItems[i].style.display = 'block';
        } else {
            newsItems[i].style.display = 'none';
        }
    }
}

function nextSlide() {
    if (currentIndex < totalPages - 1) {
        currentIndex++;
        showItems();
    }
}

function previousSlide() {
    if (currentIndex > 0) {
        currentIndex--;
        showItems();
    }
}
showItems();