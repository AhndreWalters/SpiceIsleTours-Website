<?php
$host = getenv('DB_HOST') ?: 'localhost';
$dbname = getenv('DB_NAME') ?: 'spice_isle_tours';
$username = getenv('DB_USER') ?: 'avnadmin';
$password = getenv('DB_PASSWORD') ?: '';
$port = getenv('DB_PORT') ?: '24791';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname; port= $port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
