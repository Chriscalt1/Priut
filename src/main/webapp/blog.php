<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
<div class="blog-container">
    <h1>Блог</h1>
    <p>Уважаемые будущие хозяева! Мы размещаем здесь все новости и отчеты по нашей деятельности. Рекламу мы размещаем только от наших партнеров-ветеринарных клиник!</p>

    <div class="latest-posts">
        <h2>Последние публикации:</h2>
        <ul>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "Kjvnbr97#7-1";
            $dbname = "blog";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, title, content FROM posts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li onclick=\"togglePost(this)\">";
                    echo $row["title"];
                    echo "<div class='post-content'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "</div>";
                    echo "</li>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </ul>
    </div>
</div>

<script>
    function togglePost(element) {
        const activeElements = document.querySelectorAll('.latest-posts li.active');
        activeElements.forEach(el => {
            if (el !== element) {
                el.classList.remove('active');
            }
        });
        element.classList.toggle('active');
    }
</script>


</body>
</html>