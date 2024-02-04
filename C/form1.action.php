<?php

/*Include path to function*/
include("../M/functions.php");

/*Start session and retrieve $_POST data from index*/
session_start();
$percent1 = $_POST["first"] ;
$num1 = $_POST["second"] ;

/*Check if fields are empty*/
if (trim($_POST['first'])&&trim($_POST['second']) == !NULL) {
    /*Insert data into $_SESSION and use the method*/
    $_SESSION['percent1'] = $percent1;
    $_SESSION['num1'] = $num1;
    $_SESSION['result1'] = convertPercentToNumber($percent1, $num1);
    /*Head to the result page*/
    header('Location: ../V/result1.php');
}
/*Elseif head to error page*/
elseif (trim($_POST['first'])||trim($_POST['second']) == NULL) {
    header('Location: ../V/error.html');
}
