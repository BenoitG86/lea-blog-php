<?php

require_once '../includes/dbconnect.php';

$id = $_GET['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$article = $_POST['text'];

$stmt = $bdd->prepare("UPDATE `article` SET `title` = :title, `description` = :description, `text` = :article  WHERE `article`.`id` = :id;");

$stmt->bindValue('title', $title, PDO::PARAM_STR);
$stmt->bindValue('description', $description, PDO::PARAM_STR);
$stmt->bindValue('article', $article, PDO::PARAM_STR);
$stmt->bindValue('id', $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: ../admin/indexAdmin.php");