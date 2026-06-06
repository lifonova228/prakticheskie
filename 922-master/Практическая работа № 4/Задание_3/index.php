<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Решение квадратного уравнения</title>
</head>
<body>

<h3>Решение квадратного уравнения: a*x^2 + b*x + c = 0</h3>

<form method="POST">
    Введите a: <input type="number" step="any" name="a" required><br>
    Введите b: <input type="number" step="any" name="b" required><br>
    Введите c: <input type="number" step="any" name="c" required><br>
    <button type="submit">Рассчитать</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];

    echo "<h4>Результат:</h4>";

    if ($a == 0) {
        echo "Ошибка: коэффициент 'a' не может быть равен 0 (уравнение не квадратное).";
    } else {
        $D = $b * $b - 4 * $a * $c;
        echo "Дискриминант D = $D<br><br>";

        if ($D > 0) {
            $sqrtD = sqrt($D);
            $x1 = (-$b + $sqrtD) / (2 * $a);
            $x2 = (-$b - $sqrtD) / (2 * $a);
            echo "Уравнение имеет два корня:<br>";
            echo "x1 = $x1<br>";
            echo "x2 = $x2<br>";
        } elseif ($D == 0) {
            $x = -$b / (2 * $a);
            echo "Уравнение имеет один корень (два совпадающих):<br>";
            echo "x = $x<br>";
        } else {
            echo "Уравнение не имеет действительных корней.<br>";
        }
    }
}
?>

</body>
</html>