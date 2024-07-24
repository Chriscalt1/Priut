<?php
$servername = "localhost";
$username = "root";
$password = "Kjvnbr97#7-1";
$dbname = "priut";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT изображение, имя, возраст, вид, краткое_описание, здоров FROM animals";

if (!empty($searchQuery)) {
    $searchQuery = $conn->real_escape_string($searchQuery);
    $sql .= " WHERE имя LIKE '%$searchQuery%' OR вид LIKE '%$searchQuery%'";
}

$result = $conn->query($sql);
$results = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $results[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($results);

$conn->close();
