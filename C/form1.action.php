<?php

include("../M/functions.php");

session_start();
$percent1 = $_POST["first"] ;
$num1 = $_POST["second"] ;
echo $percent1."% d'un total de ".$num1." est égal à : ".convertPercentToNumber($percent1, $num1);

?>