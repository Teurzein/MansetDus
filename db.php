<?php
$host = 'localhost';
$db   = 'mansetdus'; // <-- BURAYI kendi oluşturduğun veritabanı adıyla DEĞİŞTİR
$user = 'root';
$pass = ''; // Eğer root'a şifre koymadıysan boş bırak
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
