<?php
$host = "localhost";
$user = "root";   // ou ton utilisateur MySQL
$pass = "";
$db   = "traffic_app";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>
