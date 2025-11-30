<?php
$host = 'mysql-13861cad-walterstrahndre-2a07.j.aivencloud.com';
$dbname = 'spice_isle_tours';
$username = 'avnadmin';
$password = $_ENV['DB_password'] ?? '';
$port = '24791';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname; port= $port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
