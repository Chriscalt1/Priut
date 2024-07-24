document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const query = document.getElementById('searchQuery').value;

    fetch('search.php?query=' + encodeURIComponent(query))
        .then(response => response.json())
        .then(data => displayResults(data))
        .catch(error => console.error('Error:', error));
});

function displayResults(data) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    if (data.length === 0) {
        resultsDiv.innerHTML = 'Нет результатов по вашему запросу.';
        return;
    }

    // Скрыть все существующие карточки
    const cards = document.getElementsByClassName('card');
    for (let card of cards) {
        card.style.display = 'none';
    }

    // Создание контейнера для карточек
    const cardContainer = document.createElement('div');
    cardContainer.className = 'card-container';

    data.forEach(item => {
        const card = document.createElement('div');
        card.className = 'card';
        card.style = `
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            font-family: Arial, sans-serif;
        `;
        card.innerHTML = `
            <img src="${item.изображение}" alt="Image" style="border-radius: 10px; width: 100%; height: auto;">
            <h2 style="font-size: 1.5em; margin: 10px 0;">Имя: ${item.имя}</h2>
            <p style="color: #666; margin: 10px 0;">Возраст: ${item.возраст}</p>
            <p style="color: #666; margin: 10px 0;">Вид: ${item.вид}</p>
            <p style="color: #666; margin: 10px 0;">${item.краткое_описание}</p>
            <p style="margin: 10px 0; color: ${item.здоров ? 'green' : 'red'};">Здоров: ${item.здоров ? 'Да' : 'Нет'}</p>
        `;
        cardContainer.appendChild(card);
    });

    resultsDiv.appendChild(cardContainer);
}

