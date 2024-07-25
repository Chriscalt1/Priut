<?php
$servername = "localhost";
$username = "root";
$password = "Kjvnbr97#7-1";
$dbname = "priut";

$priut = new mysqli($servername, $username, $password, $dbname);


$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 9;
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$sql = "SELECT id, имя, возраст, вид, изображение, краткое_описание, здоров FROM animals";
$result = $priut->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="card">
            <img src="' . $row["изображение"] . '" alt="Image">
            <h2>Имя: ' . $row["имя"] . '</h2>
            <p>Возраст: ' . $row["возраст"] . '</p>
            <p>Вид: ' . $row["вид"] . '</p>
            <p>' . $row["краткое_описание"] . '</p>
            <p class="' . ($row["здоров"] ? 'healthy' : 'unhealthy') . '">Здоров: ' . ($row["здоров"] ? 'Да' : 'Нет') . '</p>
        </div>';
    }
    echo '</div>';
} else {
    echo "0 results";
}

$priut->close();



