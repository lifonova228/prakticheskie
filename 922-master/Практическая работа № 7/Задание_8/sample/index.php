<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1. Подключение файла team.txt
// Предполагается, что в нем содержится PHP-код, присваивающий переменной $team JSON строку

include 'team.txt'; // подключение файла

// 2. Декодирование JSON-строки в массив объектов
$teamsArray = json_decode($team);

// 3. Вывод результата
echo '<pre>'; // для приятного форматирования
print_r($teamsArray);
echo '</pre>';
?>
</body>
</html>