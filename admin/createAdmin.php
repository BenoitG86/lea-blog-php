<?php

require_once '../includes/dbconnect.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ajouter un nouvel article - Administration</title>
      <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
      <h1>Ajouter un nouvel article</h1>
      <form action="../CRUD/create.php" method="post">
            <div>
                  <input type="text" name="title" placeholder="titre">
                  <input type="text" name="description" placeholder="description">
            </div>
            <div>
                  <textarea name="text" placeholder="article" rows="5" cols="42"></textarea>
            </div>
            <div>
                  <input type="submit">
            </div>
      </form>
</body>

</html>