const clinics = [
    { name: "Ветеринарная клиника А", rating: 4.5, url: "http://clinic-a.com" },
    { name: "Ветеринарная клиника Б", rating: 4.7, url: "http://clinic-b.com" },

];

function createClinicCard(clinic) {
    const card = document.createElement('div');
    card.className = 'clinic-card';
    card.innerHTML = `
        <h3>${clinic.name}</h3>
        <p>Рейтинг: ${clinic.rating}</p>
        <a href="${clinic.url}" target="_blank">Посетить сайт</a>
    `;
    return card;
}

const container = document.getElementById('clinics-container');
clinics.forEach(clinic => {
    container.appendChild(createClinicCard(clinic));
});