<?php

/*Start session and retrieve $_SESSION data from form2.action.php*/
session_start();

$num2 = $_SESSION['num2'];
$int2 = $_SESSION['int2'];
$result2 = $_SESSION['result2'];

/*Display the results*/
echo "La valeur ".$num2." est égal à ".$result2."% sur un total de ".$int2;
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
    <!--Title-->
    <title>Résultat</title>
    <!--CSS stylesheet link-->
    <link href="index.css" rel="Stylesheet"/>
</head>

<!--HTML body start-->
<body>
    <br>
    <!--Link to index-->
    <a href="index.php">Retour à l'accueil</a>
</body>