<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Циклы</h2>
    <hr>
    <h2>Вывод массива</h2>

    <?php

    require_once 'data.php';

    $li = "";

    foreach ($track as $item) {

        $li .= "<li>(id={$item['id_track']}) {$item['name']}</li>";
    }

    echo "<ol>" . $li . "</ol>";
    ?>
</body>
</html>

