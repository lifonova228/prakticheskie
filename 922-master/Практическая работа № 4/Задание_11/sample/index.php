<?php

require_once 'personnels.php';

$term = "surname";
$value = "Маркова";

echo "<h1>Результаты поиска по фамилии: {$value}</h1>";
echo "<hr>";

foreach ($content as $item) {
    if (isset($item[$term]) && $item[$term] == $value) {
        echo "id: " . $item['id_personnel'] . " <br />\n";
        echo "Фамилия: " . $item['surname'] . " <br />\n";
        echo "Имя: " . $item['name'] . " <br />\n";
        echo "Отчество: " . $item['patronymic'] . " <br />\n";
        echo "Должность: " . $item['post'] . " <br />\n";
        echo "Категория: " . $item['category'] . " <br />\n";
        echo "Образование: " . $item['level_edu'] . " <br />\n";
        echo "Стаж работы в ОУ: " . $item['experience_total'] . " <br />\n";
        echo "<br />\n";
    }
}

?>