<?php

require_once '../includes/dbconnect.php';
$id = $_GET['id'];
require_once '../CRUD/readOne.php';


?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modifier article - Administration</title>
      <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
      <h1>Modifier un article</h1>
      <form action="../CRUD/update.php?id=<?= $id; ?>" method="post">
            <?php foreach ($articles as $article) :?>
            <div>
                  <input type="text" name="title" value="<?= $article['title']; ?>">
                  <input type="text" name="description" value="<?= $article['description']; ?>">
            </div>
            <div>
                  <textarea name="text" rows="5" cols="42"><?= $article['text']; ?></textarea>
            </div>
            <div>
                  <input type="submit">
            </div>
            <?php endforeach; ?>
      </form>
</body>

</html>