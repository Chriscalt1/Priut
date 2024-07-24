<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/css/src/style.css">
    <title>Найди своего хвостика!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


<header>
    <div class="container">
        <div class="container">
            <div id="branding">
                <h1><img src="resources/images/logo.png"
                         alt="Логотип" class="logo">Усы, лапы и хвосты</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.html">О нас</a></li>
                    <li><a href="anim.php">Хвостики</a></li>
                    <li><a href="vet.html">Ветеринарные клиники</a></li>
                    <li><a href="blog.html">Блог</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                    <li><a href="help.html">Как нам помочь</a></li>
                </ul>
            </nav>
        </div>
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

<?php
require 'config.php';?>

</body>
</html>

