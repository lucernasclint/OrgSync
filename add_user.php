<?php
include "db.php";

$username = "admin123";
$password = "mypassword";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
$stmt->execute([$username, $hashedPassword, "admin"]);

echo "User added!";
?>
