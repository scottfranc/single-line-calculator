<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <p>Calc</p>
        <input type="number" name="num1" placeholder="First num">
        <select name="oper" id="">
            <!-- In the options below, we specify the operators as values and we send that over to PHP, so we don't need to hard-code the operators -->
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="/">Division</option>
            <option value="*">Multiplication</option>
        </select>

    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">Calc</button>
    </form> 
</body> 
</html>