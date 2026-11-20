<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Calcul du total</title>
</head>
<body>
  <h1>Ajouter un produit</h1>
  <form method="post">
    <p>Produit : <input type="text" name="produit" required></p>
    <p>Catégorie : <input type="text" name="categorie"></p>
    <p>Prix : <input type="number" step="0.01" name="prix" required></p>
    <p>Quantité : <input type="number" name="quantite" required></p>
    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $produit   = htmlspecialchars($_POST['produit'] ?? '');
      $categorie = htmlspecialchars($_POST['categorie'] ?? '');
      $prix      = (float) ($_POST['prix'] ?? 0);
      $quantite  = (int) ($_POST['quantite'] ?? 0);
      $total     = $prix * $quantite;

      echo "<h2>Résultat</h2>";
      echo "<p>Produit : $produit (catégorie : $categorie)</p>";
      echo "<p>Prix : $prix DH, quantité : $quantite</p>";
      echo "<p><strong>Total : $total DH</strong></p>";
  }
  ?>
</body>
</html>