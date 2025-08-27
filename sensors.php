<?php
session_start();
include 'db.php';
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    $sql = "INSERT INTO sensors (name, latitude, longitude) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdd", $name, $latitude, $longitude);
    $stmt->execute();
}
$sensors = $conn->query("SELECT * FROM sensors");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gestion des Capteurs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
  <h3>Gestion des Capteurs</h3>
  <form method="post" class="mb-3">
    <input class="form-control mb-2" type="text" name="name" placeholder="Nom du capteur" required>
    <input class="form-control mb-2" type="text" name="latitude" placeholder="Latitude" required>
    <input class="form-control mb-2" type="text" name="longitude" placeholder="Longitude" required>
    <button class="btn btn-primary">Ajouter</button>
  </form>

  <table class="table table-bordered">
    <tr><th>ID</th><th>Nom</th><th>Latitude</th><th>Longitude</th></tr>
    <?php while($row = $sensors->fetch_assoc()): ?>
      <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["name"] ?></td>
        <td><?= $row["latitude"] ?></td>
        <td><?= $row["longitude"] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <a href="dashboard.php" class="btn btn-secondary">Retour</a>
</body>
</html>
