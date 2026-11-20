<?php
$pdo = new PDO("mysql:host=localhost;dbname=tp_php;charset=utf8mb4", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query("SELECT * FROM products WHERE price > 300");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des produits - Boutique</title>
</head>
<body>
  <h1>Liste des produits</h1>
  <table border="1" cellpadding="6">
    <tr>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Total stock</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
      <td><?php echo htmlspecialchars($p['name']); ?></td>
      <td><?php echo $p['price']; ?> DH</td>
      <td><?php echo $p['quantity']; ?></td>
      <td><?php echo $p['price'] * $p['quantity']; ?> DH</td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>