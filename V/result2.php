<?php
session_start();

$num2 = $_SESSION['num2'];
$int2 = $_SESSION['int2'];
$result2 = $_SESSION['result2'];

echo "La valeur ".$num2." est égal à ".$result2."% sur un total de ".$int2;

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