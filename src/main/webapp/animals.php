<?php
require 'config.php';

try {
    $conn = new PDO('mysql:host=localhost;dbname=priut', 'root', 'Kjvnbr97#7-1');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM animals");
    $stmt->execute();
    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
} catch (\Throwable $th) {
    die("An unexpected error occurred: " . $th->getMessage());
}

function getAnimalsFromDb(): array
{
    try {
        $conn = new PDO('mysql:host=localhost;dbname=priut', 'root', 'Kjvnbr97#7-1');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM animals");
        $stmt->execute();
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $animals_json = json_encode($animals);

        echo $animals_json;

        $conn = null;

        return $animals;
    } catch (PDOException $e) {
        throw new RuntimeException('Failed to establish database connection.', 0, $e);
    } catch (\Throwable $th) {
        die("An unexpected error occurred: " . $th->getMessage());
    }
}
