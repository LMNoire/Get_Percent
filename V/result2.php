<?php

/*Start session and retrieve $_SESSION data from form2.action.php*/
session_start();

$num2 = $_SESSION['num2'];
$int2 = $_SESSION['int2'];
$result2 = $_SESSION['result2'];
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
    <?php echo "La valeur ".$num2." est égal à ".$result2."% sur un total de ".$int2; ?>
</div>

<div class="botcontainer">
    <!--Link to index-->
    <a href="index.php">Retour à l'accueil</a>
</div>

</body>