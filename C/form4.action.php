<?php

/*Include path to function*/
include("../M/functions.php");

/*Start session and retrieve $_POST data from index*/
session_start();
$var4 = $_POST["seven"] ;
$percent4 = $_POST["eight"] ;

/*Check if fields are empty*/
if (trim($_POST['seven'])&&trim($_POST['eight']) == !NULL) {
    /*Insert data into $_SESSION and use the method*/
    $_SESSION['var4'] = $var4;
    $_SESSION['percent4'] = $percent4;
    $_SESSION['result4'] = subPercent($percent4, $var4);
    /*Head to the result page*/
    header('Location: ../V/result4.php');
}
/*Elseif head to error page*/
elseif (trim($_POST['seven'])||trim($_POST['eight'])== NULL) {
    header('Location: ../V/error.html');
}