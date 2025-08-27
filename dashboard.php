<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Traffic AI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>#map { height: 500px; }</style>
</head>
<body class="container-fluid">
  <nav class="navbar navbar-dark bg-dark p-3">
    <span class="navbar-brand">🚦 Traffic Optimizer</span>
    <div>
      <a href="profile.php" class="btn btn-light btn-sm">Profil</a>
      <a href="sensors.php" class="btn btn-warning btn-sm">Capteurs</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Déconnexion</a>
    </div>
  </nav>

  <div class="mt-3">
    <h3>Carte des intersections</h3>
    <div id="map"></div>
  </div>

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    var map = L.map('map').setView([36.7528, 3.0420], 12); // Alger par défaut
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap'
    }).addTo(map);

    // Exemple capteur
    L.marker([36.7528, 3.0420]).addTo(map).bindPopup("Capteur 1 - Intersection A");
  </script>
</body>
</html>
