<?php
$nom = $_GET['nom'] ?? 'inconnu';
$ville = $_GET['ville'] ?? 'inconnue';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>GET</title>
</head>
<body>
  <h1>Paramètres GET</h1>
  <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
  <p>Ville : <?php echo htmlspecialchars($ville); ?></p>
</body>
</html>