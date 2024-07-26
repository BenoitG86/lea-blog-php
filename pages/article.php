<?php

require_once '../includes/dbconnect.php';
$id = $_GET['id'];
require_once '../CRUD/readOne.php';
$article = $articles->fetch();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Exercice de blog en php">
      <title>Article - <?= $article['title'];?></title>
      <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

      <article>
            <hgroup>
                  <h1><?= $article['title'] ?></h1>
                  <p><?= $article['description'] ?></p>
            </hgroup>
            <p><?= $article['text'] ?></p>
            <p>Article publié le <time datetime="<?= $article['date'] ?>"><?= $article['date'] ?></time></p>
      </article>

      <a href="../index.php">Retour à l'accueil</a>


</body>

</html>