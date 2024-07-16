<?php

require_once '../includes/dbconnect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$article = $_POST['text'];

$stmt = $bdd->prepare("INSERT INTO `article` (`id`, `title`, `description`, `text`, `date`) VALUES (NULL, :title, :description, :article, current_timestamp());");
$stmt->bindValue('title', $title, PDO::PARAM_STR);
$stmt->bindValue('description', $description, PDO::PARAM_STR);
$stmt->bindValue('article', $article, PDO::PARAM_STR);

$stmt->execute();

header("Location: ../admin/indexAdmin.php");