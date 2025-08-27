<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Créer un compte</h2>
  <form method="post">
    <input class="form-control mb-2" type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
    <input class="form-control mb-2" type="password" name="password" placeholder="Mot de passe" required>
    <button class="btn btn-primary">S'inscrire</button>
  </form>
  <a href="login.php">Déjà inscrit ? Connectez-vous</a>
</body>
</html>
