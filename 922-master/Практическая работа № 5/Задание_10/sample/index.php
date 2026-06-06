<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require 'albums.php';

    $new_albums = $albums;
    $count = 0;

    echo "<h1>Информация об альбомах:</h1>";

    foreach ($new_albums as $item) {
        if (!array_key_exists("id", $item)) {
            $new_albums[$count]["id"] = $count + 1;
    }

        echo 'ID: ', $new_albums[$count]["id"],"<br>";
        echo 'Название: ', $new_albums[$count]['album_name'],"<br>";
        echo 'Дата создания: ', $new_albums[$count]['date'],"<br>";
        echo 'Лейбл: ', $new_albums[$count]['label'],"<br>";
        echo 'Формат: ', $new_albums[$count]['format'],"<br>";
        echo 'Статус: ', $new_albums[$count]['status'],"<br>";
        echo "<hr />";

        $count = $count + 1;
    }

    echo '<pre>';
    print_r($new_albums);
    echo '</pre>';

    ?>
</body>
</html>