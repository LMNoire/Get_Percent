<?php

/*Start session and retrieve $_SESSION data from form1.action.php*/
session_start();

$percent1 = $_SESSION['percent1'];
$num1 = $_SESSION['num1'];
$result1 = $_SESSION['result1'];
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
    <!--Title-->
    <title>Résultat</title>
    <!--CSS stylesheet link-->
    <link href="results.css" rel="Stylesheet"/>
</head>

<!--HTML body start-->
<body>

<!--Title div-->
<div class="h1">
	<h1>CALCULER UN POURCENTAGE</h1>
	<div class="horizontal-line"></div>
</div>

<div class="topcontainer">
    <!--Display the results-->
    <?php echo $percent1."% d'un total de ".$num1." est égal à : ".$result1; ?>
</div>

<div class="botcontainer">
    <!--Link to index-->
    <a href="index.php">Retour à l'accueil</a>
</div>

</body>