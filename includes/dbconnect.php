<?php

$host = 'localhost';
$db = 'blog';
$user = 'root';
$password = '';
$option =  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$bdd = new PDO('mysql:host=' . $host . '; dbname=' . $db , $user, $password, $option);