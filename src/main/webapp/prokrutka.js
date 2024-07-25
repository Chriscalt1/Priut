 let offset = 0;
    const limit = 9; // Number of records to fetch per request
    let loading = false; // Flag to prevent multiple requests
    let allDataLoaded = false; // Flag to indicate all data has been loaded

    window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100 && !loading && !allDataLoaded) {
    loadMoreCards();
}
});

    function loadMoreCards() {
    loading = true;
    fetch(`config.php?limit=${limit}&offset=${offset}`)
    .then(response => response.json())
    .then(data => {
    if (data.length > 0) {
    offset += limit;
    appendCards(data);
} else {
    allDataLoaded = true;
}
    loading = false;
})
    .catch(error => {
    console.error('Error fetching data:', error);
    loading = false;
});
}
    loadMoreCards();
