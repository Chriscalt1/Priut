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
    <title>Поиск дома для животных</title>
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
<div class="animalseaching">
    <div class="container">
        <h2>Поисковик питомцев</h2>
        <p>Каждый питомец заслуживает счастья! Найдите питомца под Ваши предпочтения и нужды.</p>
    </div>
</div>
<h1>Поисковик</h1>

<label for="query">Найди своего будущего друга!</label>

<form id="searchForm">
    <input type="text" id="searchQuery" name="query" placeholder="Введите имя или вид">
    <button type="submit">Поиск</button>
</form>
<div id="results"></div>

<script src="search.js"></script>
<script src="prokrutka.js"></script>

<?php
require 'config.php';?>

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
