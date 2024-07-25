<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Блог</title>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><img src="resources/images/logo.png" alt="Логотип" class="logo">Усы, лапы и хвосты</h1>
        </div>
        <nav>
            <ul>
                <li class="current"><a href="index.html">О нас</a></li>
                <li><a href="anim.php">Хвостики</a></li>
                <li><a href="vet.html">Ветеринарные клиники</a></li>
                <li><a href="blog.php">Блог</a></li>
                <li><a href="contacts.html">Контакты</a></li>
                <li><a href="help.html">Как нам помочь</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="blog-container">
    <h1>Наш блог</h1>
    <p>Дорогие читатели! Здесь мы публикуем новости и отчеты о нашей работе. Рекламные материалы размещаем только от партнеров — ветеринарных клиник!</p>

    <div class="links-container" id="news-container">
        <div class="link-block current">
            <a href="otchetjune2024.html">Отчет за июнь 2024</a>
        </div>
        <div class="link-block">
            <a href="belolapka.html">Срочная помощь для нашей подруги Белолапки из приюта "Свет маяка"</a>
        </div>
        <div class="link-block">
            <a href="lapki.html">Ветеринарная клиника "Лапки"</a>
        </div>
        <div class="link-block">
            <a href="15june.html">Праздник 15 июня: Юннатское движение</a>
        </div>
    </div>
    <div class="navigation-arrows">
        <span class="arrow-left" onclick="previousSlide()">&larr;</span>
        <span class="arrow-right" onclick="nextSlide()">&rarr;</span>
    </div>
</div>
<script src="news.js"></script>
<script src="scriptd.js"></script>
<div id="popup-container"></div>
<div class="overlay"></div>

<script>
    fetch('popup.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('popup-container').innerHTML = data;
            document.dispatchEvent(new Event('DOMContentLoaded'));
        })
        .catch(error => console.error('Error loading popup:', error));
</script>

<footer>
    <p>&copy; 2024 Приют для животных "Лучший друг"</p>
</footer>
</body>
</html>