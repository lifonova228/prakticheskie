<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица истинности</title>
</head>
<body>

<form method="POST">
    a: <input type="number" name="a" min="0" max="1" required><br>
    b: <input type="number" name="b" min="0" max="1" required><br>
    c: <input type="number" name="c" min="0" max="1" required><br>
    <button type="submit">Рассчитать</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];

    if ($a == 0 && $b == 0 && $c == 1) {
        $q = 1;
    } elseif ($a == 0 && $b == 1 && $c == 0) {
        $q = 1;
    } elseif ($a == 1 && $b == 0 && $c == 0) {
        $q = 1;
    } elseif ($a == 1 && $b == 1 && $c == 1) {
        $q = 1;
    } else {
        $q = 0;
    }

    echo "<br>Результат: q = $q<br>";
    echo "Количество проверенных условий (if + elseif): 4";
}
?>

</body>
</html>