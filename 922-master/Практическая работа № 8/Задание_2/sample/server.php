<?php
// Получаем данные из массива $_GET

$name = $_POST['name'] ?? '';
$alias = $_POST['alias'] ?? '';
$country = $_POST['country'] ?? '';
$date = $_POST['date'] ?? '';
$style = $_POST['style'] ?? '';
$path = $_POST['path'] ?? '';
$content = $_POST['content'] ?? '';
$note = $_POST['note'] ?? ''; 
$json_auto = json_encode($_POST);
// Выводим полученные данные
echo "<h1>Переданные данные</h1>";
echo "<strong>JSON строка</strong></br>";
echo $json_auto,"</br>";
echo "<strong>PHP массив </strong> </br>";
var_dump("<pre>", $_POST, "</pre>"); 
?>