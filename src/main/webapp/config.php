<?php
$servername = "localhost";
$username = "root";
$password = "Kjvnbr97#7-1";
$dbname = "priut";

$priut = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, имя, возраст, вид, изображение, краткое_описание, здоров FROM animals";
$result = $priut->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-container">'; // Начало контейнера карточек
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="card">
            <img src="' . $row["изображение"] . '" alt="Image" style="border-radius: 10px; width: 100%; height: auto;">
            <h2 style="font-size: 1.5em; margin: 10px 0;">Имя: ' . $row["имя"] . '</h2>
            <p style="color: #666; margin: 10px 0;">Возраст: ' . $row["возраст"] . '</p>
            <p style="color: #666; margin: 10px 0;">Вид: ' . $row["вид"] . '</p>
            <p style="color: #666; margin: 10px 0;">' . $row["краткое_описание"] . '</p>
            <p style="margin: 10px 0; ' . ($row["здоров"] ? 'color: green;' : 'color: red;') . '">Здоров: ' . ($row["здоров"] ? 'Да' : 'Нет') . '</p>
        </div>';
    }
    echo '</div>'; // Конец контейнера карточек
} else {
    echo "0 results";
}

$priut->close();


