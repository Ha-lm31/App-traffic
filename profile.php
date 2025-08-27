<?php
session_start();
include 'db.php';
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION["user_id"];
$result = $conn->query("SELECT * FROM users WHERE id=$user_id");
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h3>Mon Profil</h3>
  <p><b>Nom d'utilisateur :</b> <?= $user["username"] ?></p>
  <p><b>Email :</b> <?= $user["email"] ?></p>
  <a href="dashboard.php" class="btn btn-secondary">Retour</a>
</body>
</html>
