<?php

/*Start session and retrieve $_SESSION data from form2.action.php*/
session_start();

$var3 = $_SESSION['var3'];
$percent3 = $_SESSION['percent3'];
$result3 = $_SESSION['result3'];
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
    <!--Title-->
    <title>Résultats</title>
    <!--CSS stylesheet link-->
    <link href="results.css" rel="Stylesheet"/>
    <!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
    <?php echo "La valeur ".$var3." plus ".$percent3."% est égale à&nbsp"?>
    <p class="results"><?php echo $result3 ?></p>
</div>

<div class="botcontainer">
    <!--Link to index-->
    <a href="index.php">Retour à l'accueil</a>
</div>

</body>