<?php
include 'teams.php';

foreach ($team as $item) {
    echo "Группа: " . $item['name'] . " (id = " . $item['id_team'] . ")<br/>";
    echo "Страна: " . $item['country'] . "<br/>";
    echo "Дата основания: " . $item['date'] . "<br/>";
    echo "Стиль: " . $item['style'] . "<br/>";
    echo "<hr/>";
    echo "<p>";
}
?>

