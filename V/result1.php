<?php

/*Start session and retrieve $_SESSION data from form1.action.php*/
session_start();

$percent1 = $_SESSION['percent1'];
$num1 = $_SESSION['num1'];
$result1 = $_SESSION['result1'];

/*Display the results*/
echo $percent1."% d'un total de ".$num1." est égal à : ".$result1;
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