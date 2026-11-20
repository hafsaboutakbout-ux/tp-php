<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>POST</title>
</head>
<body>
  <h1>Formulaire POST</h1>
  <form method="post" action="04-post.php">
    <p>Nom : <input type="text" name="nom"></p>
    <p>Email : <input type="email" name="email"></p>
    <p>Ville : <input type="text" name="ville"></p>
    <button type="submit">Envoyer</button>
  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>Données reçues</h2>
    <p>Nom : <?php echo htmlspecialchars($_POST['nom'] ?? ''); ?></p>
    <p>Email : <?php echo htmlspecialchars($_POST['email'] ?? ''); ?></p>
    <p>Ville : <?php echo htmlspecialchars($_POST['ville'] ?? ''); ?></p>
  <?php endif; ?>
</body>
</html>