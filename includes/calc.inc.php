<?php

declare(strict_types = 1);
include 'class-autoload.inc.php';

//We get the operator sign and the numbers to perform a calculation on
$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
   echo $calc->calculate();
} catch (TypeError $e) {
    echo "Error!: $e->getMessage()";
}
?>
