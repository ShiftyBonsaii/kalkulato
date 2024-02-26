<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = "You really interesting critter bro";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "I hate 362626 lego piece people";
    }

    echo "<h3>Result: $result</h3>";
}
?>