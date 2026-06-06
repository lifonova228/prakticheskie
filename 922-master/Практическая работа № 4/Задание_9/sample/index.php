<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Конструкции</h2>
    <hr>
    <h2>Включения файлов</h2>

    <?php

    echo "<h3>1. Тестирование с использованием include</h3>";
    echo "<p><em>Include выдает предупреждение (Warning) при отсутствии файла, но продолжает выполнение скрипта.</em></p>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Попытка включить файл <b>$i.txt</b>: ";
        include "$i.txt"; // Для 3.txt будет Warning, но цикл продолжится
        echo "<br />";
    }
    echo "<hr>";

    echo "<h3>2. Тестирование с использованием require</h3>";
    echo "<p><em>Require вызывает фатальную ошибку (Fatal Error) при отсутствии критически важного файла и останавливает выполнение всего скрипта.</em></p>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Попытка включить файл <b>$i.txt</b>: ";
        require "$i.txt"; // Для 3.txt будет Fatal Error, скрипт остановится
        echo "<br />";
    }
    ?>

</body>
</html>

