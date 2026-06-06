<?php

include 'albums.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №5 - Список альбомов</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Альбом</th>
                <th>Дата выпуска</th>
                <th>Страна</th>
                <th>Идентификатор группы</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($album as $item) {
                echo "<tr>";
                echo "<td>" . $item['id_album'] . "</td>";
                echo "<td>" . $item['title'] . "</td>";
                echo "<td>" . $item['date'] . "</td>";
                echo "<td>" . $item['country'] . "</td>";
                echo "<td>" . $item['id_team'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

