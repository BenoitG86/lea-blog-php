<?php

$requete = "SELECT * FROM article WHERE id=$id";
$articles = $bdd->query($requete);