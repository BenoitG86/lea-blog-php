<?php

require_once 'includes/dbconnect.php';
require_once 'CRUD/readAll.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Exercice de blog en php">
      <title>El blogo</title>
      <link rel="stylesheet" href="styles/style.css">

</head>

<body>
      <header>
            <h1>Mon blog de trucs de blog</h1>
      </header>

      <hr>

      <main>
            <?php foreach ($articles as $article) : ?>
                  <article>
                        <h2><?= $article['title'] ?></h2>
                        <p><?= $article['description'] ?></p>
                        <a href="pages/article.php?id=<?= $article['id'] ?>">Lien vers l'article complet</a>
                  </article>
            <?php endforeach; ?>
      </main>
      
<!-- Fonctionnalité à ajouter avec la DB -->

      <!-- <?php foreach ($categories as $categorie) : ?>
            <form action="">
                  <select name="categories" id="categories">
                        <option value="<?= $categorie['value']; ?>"></option>
                        <option value="<?= $categorie['value']; ?>"></option>
                        <option value="<?= $categorie['value']; ?>"></option>
                  </select>
            </form>
      <?php endforeach; ?> -->

      <hr>

      <footer>
            <nav>
                  <a href="admin/indexAdmin.php">Administration de la page</a>
            </nav>
      </footer>

</body>

</html>