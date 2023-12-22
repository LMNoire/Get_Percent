<?php
session_start();

$percent1 = $_SESSION['percent1'];
$num1 = $_SESSION['num1'];
$result1 = $_SESSION['result1'];

echo $percent1."% d'un total de ".$num1." est égal à : ".$result1;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Résultat</title>
    <!--CSS stylesheet link-->
    <link href="index.css" rel="Stylesheet"/>
</head>

<body>
    <br>
    <a href="index.php">Retour à l'accueil</a>
</body>