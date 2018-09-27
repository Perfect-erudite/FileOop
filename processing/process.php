<?php
    include "../includes/calculation.inc.php";

    // if(!$_POST['submit']){
    //     die("Error!!!: Submit button not clicked");
    // }

    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $operators = $_POST['operator'];
    

    $result = new Calculation($number1, $number2, $operators);
    echo $result->actualCal();
?>