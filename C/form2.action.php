<?php

/*Include path to function*/
include("../M/functions.php");

/*Start session and retrieve $_POST data from index*/
session_start();
$num2 = $_POST["third"] ;
$int2 = $_POST["fourth"] ;

/*Check if fields are empty*/
if (trim($_POST['third'])&&trim($_POST['fourth'])== !NULL ) {
    /*Insert data into $_SESSION and use the method*/
    $_SESSION['num2'] = $num2;
    $_SESSION['int2'] = $int2;
    $_SESSION['result2'] = convertNumberToPercent($num2, $int2);
    /*Head to the result page*/
    header('Location: ../V/result2.php');
}
/*Elseif head to error page*/
elseif (trim($_POST['third'])||trim($_POST['fourth'])== NULL) {
    header('Location: ../V/error.html');
}
?>