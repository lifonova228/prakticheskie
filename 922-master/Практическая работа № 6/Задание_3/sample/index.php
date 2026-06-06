<?php
// Включение файла track.php
include "track.php";

// Подключение файла с функцией
include "function.php";

$id = 10;  // Выведет треки альбома "Rocks" (Aerosmith)
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список треков альбома</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            color: #333;
        }
        .album-id {
            font-size: 18px;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Список треков</h1>
    <p>Альбом ID: <span class="album-id"><?php echo $id; ?></span></p>

    <?php
    echo fnOutTrack($track, $id);
    ?>

    <hr>
    <h2>Проверка других альбомов:</h2>
    <ul>
        <li><a href="?id=1">Альбом ID 1 - The Dark Side of the Moon (Pink Floyd)</a></li>
        <li><a href="?id=2">Альбом ID 2 - Wish You Were Here (Pink Floyd)</a></li>
        <li><a href="?id=4">Альбом ID 4 - Abbey Road (The Beatles)</a></li>
        <li><a href="?id=6">Альбом ID 6 - Back in Black (AC/DC)</a></li>
        <li><a href="?id=10">Альбом ID 10 - Rocks (Aerosmith)</a></li>
        <li><a href="?id=11">Альбом ID 11 - Strange Days (The Doors)</a></li>
    </ul>

    <?php
  
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $selectedId = (int)$_GET['id'];
        echo "<h2>Результат для ID = {$selectedId}:</h2>";
        echo fnOutTrack($track, $selectedId);
    }
    ?>

</body>
</html>