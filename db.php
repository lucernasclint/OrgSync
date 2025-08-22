<?php
$host = "localhost";
$dbname = "orgsync_db";
$user = "root";   // default in XAMPP
$pass = "";       // default password is empty in XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
