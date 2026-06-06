<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	/*

	исходный одномерный ассоциативный PHP массив
	
    */

    $assoc_array = [ 
		"name" => "Мастер и Маргарита",
		"author" => "М.Булгаков",
		"year" => 1940,
		"genre" => "Мистика",
		"bestseller" => true
	];
// Подключаем массив из файла array.php
require 'array.php';

// Преобразуем ассоциативный массив в JSON строку
$jsonString = json_encode($assoc_array);

// Выводим JSON строку (опционально)
echo "<h2>JSON строка</h2>";
echo "<pre>{$jsonString}</pre>";

// Декодируем JSON обратно в массив
$decodedArray = json_decode($jsonString, true);

// Выводим результат
echo "<h2>Декодированный массив</h2>";
echo "<pre>";
print_r($decodedArray);
echo "</pre>";
?>
</body>
</html>