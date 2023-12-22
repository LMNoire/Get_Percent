<?php

include("../M/functions.php");

session_start();
$percent1 = $_POST["first"] ;
$num1 = $_POST["second"] ;

if (trim($_POST['first'])&&trim($_POST['second'])== !NULL ) {
    $_SESSION['percent1'] = $percent1;
    $_SESSION['num1'] = $num1;
    $_SESSION['result1'] = convertPercentToNumber($percent1, $num1);
    header('Location: ../V/result1.php');
}
elseif (trim($_POST['first'])||trim($_POST['second'])== NULL) {
    header('Location: ../V/error.html');
}
?>