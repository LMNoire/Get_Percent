<?php

/*Include path to function*/
include("../M/functions.php");

/*Start session and retrieve $_POST data from index*/
session_start();
$var3 = $_POST["fifth"] ;
$percent3 = $_POST["sixth"] ;

/*Check if fields are empty*/
if (trim($_POST['fifth'])&&trim($_POST['sixth']) == !NULL) {
    /*Insert data into $_SESSION and use the method*/
    $_SESSION['percent3'] = $percent3;
    $_SESSION['var3'] = $var3;
    $_SESSION['result3'] = addPercent($percent3, $var3);
    /*Head to the result page*/
    header('Location: ../V/result3.php');
}
/*Elseif head to error page*/
elseif (trim($_POST['fifth'])||trim($_POST['sixth'])== NULL) {
    header('Location: ../V/error.html');
}