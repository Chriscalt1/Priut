<?php
$servername = "localhost";
$username = "root";
$password = "Kjvnbr97#7-1";
$dbname = "priut";

$priut = new mysqli($servername, $username, $password, $dbname);

if ($priut->connect_error) {
    die("Connection failed: " . $priut->connect_error);
}

$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 50;
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$sql = "SELECT id, имя, возраст, вид, изображение, краткое_описание, здоров FROM animals LIMIT ?, ?";
$stmt = $priut->prepare($sql);
$stmt->bind_param("ii", $offset, $limit);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    while($row = $result->fetch_assoc()) {
        $imageData = base64_encode($row["изображение"]);
        $imageSrc = 'data:image/jpeg;base64,' . $imageData;

        echo '
        <div class="card">
            <img src="' . $imageSrc . '" alt="Image">
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

$stmt->close();
$priut->close();
?>




