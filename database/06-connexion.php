<?php
$host = "localhost";
$dbname = "tp_php";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à MySQL réussie avec PDO !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>