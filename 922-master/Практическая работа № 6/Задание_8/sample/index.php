<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Функции</h1>
    <h2>Область видимости переменных</h2>

    <?php
    require "personnel.php";

    function fnChangingTerm(&$person, $term, $val) {
        $person[$term] = $val;
    }

    if (isset($_GET["num"]) && isset($_GET["term"]) && isset($_GET["val"])) {
        
        $num = $_GET["num"];
        $term = $_GET["term"];
        $val = $_GET["val"];

        if (isset($personnel[$num])) {

            fnChangingTerm($personnel[$num], $term, $val);

            echo "<pre>";
            var_dump($personnel[$num]);
            echo "</pre>";
            
        } else {
            echo "<p style='color: red;'>Ошибка: Преподаватель с номером " . htmlspecialchars($num) . " не найден!</p>";
        }

    } else {
        echo "<p style='color: blue;'>Для работы скрипта передайте параметры в адресной строке браузера.</p>";
        echo "<p>Пример ссылки: <a href='?num=1&term=surname&val=Иванов'>index.php?num=1&term=surname&val=Иванов</a></p>";
    }
    ?>

</body>
</html>