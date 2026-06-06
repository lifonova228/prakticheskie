<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
// Подключение файла с массивом
include 'educations.php';

// Кодируем массив в JSON и делаем его безопасным для URL
$jsonData = urlencode(json_encode($educations));

// Создаем ссылку на условный сервер
echo "<h2>Передайте данные на сервер по ссылке ниже:</h2>";
echo "<a href='server.php?data=$jsonData'>Передать данные на сервер</a>";
?>
</body>
</html>