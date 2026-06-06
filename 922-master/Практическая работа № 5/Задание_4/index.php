<?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    
    $a = (int)$_GET['a'];
    $b = (int)$_GET['b'];
    $c = (int)$_GET['c'];

    echo "<p>{$a}x<sup>2</sup> + ({$b}x) + ({$c}) = 0</p>";

    if ($a == 0) {
        echo "Ошибка: Коэффициент 'a' не может быть равен 0 в квадратном уравнении.";
    } else {

        $d = pow($b, 2) - 4 * $a * $c;

        if ($d > 0) {
            $x1 = (-$b + sqrt($d)) / (2 * $a);
            $x2 = (-$b - sqrt($d)) / (2 * $a);
            echo "x1 = " . $x1 . "<br />";
            echo "x2 = " . $x2;
        } elseif ($d == 0) {
            $x = -$b / (2 * $a);
            echo "x = " . $x;
        } else {
            echo "Нет корней";
        }
    }
} else {

    echo "Пожалуйста, введите значения коэффициентов в адресной строке. <br>";
    echo "Пример: index.php?a=1&b=-5&c=6";
}
?>