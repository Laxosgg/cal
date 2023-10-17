<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор на PHP</title>
</head>
<body>
<h1>Пернебай Ерасыл</h1>
<form method="post">
    <input type="text" name="num1" required>
    <input type="text" name="num2" required>
    <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Посчитать">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
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
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Деление на ноль!";
                }
                break;
            default:
                $result = "Неверная операция";
        }

        echo "Результат: $result";
    } else {
        echo "Пожалуйста, введите числа.";
    }
}
?>

</body>
</html>