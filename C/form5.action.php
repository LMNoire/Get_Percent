<?php

/*Include path to function*/
include("../M/functions.php");

/*Start session and retrieve $_POST data from index*/
session_start();
$var5 = $_POST["nine"] ;
$percent5 = $_POST["ten"] ;

/*Check if fields are empty*/
if (trim($_POST['nine'])&&trim($_POST['ten']) == !NULL) {
    /*Insert data into $_SESSION and use the method*/
    $_SESSION['var5'] = $var5;
    $_SESSION['percent5'] = $percent5;
    $_SESSION['result5'] = variationPercent($percent5, $var5);
    /*Head to the result page*/
    header('Location: ../V/result5.php');
}
/*Elseif head to error page*/
elseif (trim($_POST['nine'])||trim($_POST['ten'])== NULL) {
    header('Location: ../error.html');
}