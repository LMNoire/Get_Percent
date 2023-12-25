<?php

/*Start session and retrieve $_SESSION data from form5.action.php*/
session_start();

$var5 = $_SESSION['var5'];
$percent5 = $_SESSION['percent5'];
$result5 = $_SESSION['result5'];
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php echo "La variation entre ".$var5." et ".$percent5." est égale à&nbsp"?>
    <p class="results"><?php echo $result5."%" ?></p>
    <?php 
        if ($result5 > 0) {
        $aug = $percent5 - $var5 ;
        echo "&nbsp - (Soit une variation de +".$aug.")";
    }
        if ($result5 < 0) {
        $dim = $percent5 - $var5 ;
        echo "&nbsp - (Soit une variation de ".$dim.")";
        }
    ?>
</div>

<div class="botcontainer">
    <!--Link to index-->
    <a href="index.php">Retour à l'accueil</a>
</div>

</body>