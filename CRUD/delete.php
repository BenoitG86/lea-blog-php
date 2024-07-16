<?php

require_once '../includes/dbconnect.php';

$id = $_GET['id'];

$deleteQuery = "DELETE FROM article WHERE id=$id";
$bdd->exec($deleteQuery);

header("Location: ../admin/indexAdmin.php");