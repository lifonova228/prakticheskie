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

    foreach ($team as $key => $item) {
        echo "
        <p>
            Группа: {$item['name']} (id = {$item['id_team']})<br />
            Страна: {$item['country']}<br />
            Дата основания: {$item['date']}<br />
            Стиль: {$item['style']}<br />
        </p>
        <hr />
        ";
    }
    ?>
</body>
</html>

