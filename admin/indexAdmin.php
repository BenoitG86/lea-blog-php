<?php

require_once '../includes/dbconnect.php';
require_once '../CRUD/read.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Exercice de blog en php">
      <title>El blogo - Administration</title>
      <link rel="stylesheet" href="../styles/style.css">
      <script src="../app/confirm.js" defer></script>
</head>

<body>
      <header>
            <h1>Mon blog de trucs de blog</h1>
      </header>

      <hr>

      <section>
            <?php foreach ($articles as $article) : ?>
                  <article>
                        <h2><?= $article['title'] ?></h2>
                        <p><?= $article['description'] ?></p>
                        <p><?= $article['text'] ?></p>
                  </article>
                  <div>
                        <a href="../CRUD/delete.php?id=<?= $article['id'] ?>" class="confirmDelete">Supprimer</a>
                        <a href="updateAdmin.php?id=<?= $article['id'] ?>">Modifier</a>
                  </div>
            <?php endforeach; ?>
      </section>

      <hr>

      <nav>
            <ul>
                  <li><a href="createAdmin.php">Ajouter un nouvel article</a></li>
                  <li><a href="../accueil.php">Retour à l'accueil</a> </li>
            </ul>
      </nav>

</body>

</html>