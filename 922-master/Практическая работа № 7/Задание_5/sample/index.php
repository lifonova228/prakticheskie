<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// подключаем массив
require 'array.php';

// вручную создаем строку JSON (обратите внимание на правильную структуру)
$jsonString = '[
    "Мастер и Маргарита",
    "М.Булгаков",
    1940,
    "Мистика",
    true
]';

// декодируем JSON обратно в массив
$decodedArray = json_decode($jsonString, true);

// выводим результат
echo "<h2>Декодированный массив</h2>";
echo "<pre>";
print_r($decodedArray);
echo "</pre>";
?>
</body>
</html>