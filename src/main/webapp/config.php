<?php
$servername = "localhost";
$username = "root";
$password = "Kjvnbr97#7-1";
$dbname = "priut";


$priut = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, имя, возраст, вид, изображение, краткое_описание, здоров FROM animals";
$result = $priut->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Имя: " . $row["имя"]. " - Возраст: " . $row["возраст"]. " - Вид: " . $row["вид"]. " - Изображение: " . $row["изображение"]. " - Краткое описание: " . $row["краткое_описание"]. " - Здоров: " . $row["здоров"]. "<br>";
    }
} else {
    echo "0 results";
}

$priut->close();
?>
