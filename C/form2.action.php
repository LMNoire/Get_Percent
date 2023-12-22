<?php

include("../M/functions.php");

session_start();
$num2 = $_POST["third"] ;
$int2 = $_POST["fourth"] ;

if (trim($_POST['third'])&&trim($_POST['fourth'])== !NULL ) {
    $_SESSION['num2'] = $num2;
    $_SESSION['int2'] = $int2;
    $_SESSION['result2'] = convertNumberToPercent($num2, $int2);
    header('Location: ../V/result2.php');
}
elseif (trim($_POST['third'])||trim($_POST['fourth'])== NULL) {
    header('Location: ../V/error.html');
}
?>