<?php

include("../M/functions.php");

session_start();
$num2 = $_POST["third"] ;
$int2 = $_POST["fourth"] ;
echo "La valeur ".$num2." est égal à ".convertNumberToPercent($num2, $int2)."% sur un total de ".$int2;

?>