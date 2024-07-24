<?php
require 'config.php';

$searchTerm = json_decode(file_get_contents('php://input'), true)['searchTerm'];

$pdo = new PDO('mysql:host=localhost;dbname=priut', 'root', 'Kjvnbr97#7-1');

$stmt = $pdo->prepare("SELECT * FROM animals WHERE вид LIKE ?");
$stmt->execute([$searchTerm . '%']);

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
