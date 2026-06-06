<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Изначальный неправильный JSON
$json = '{
  "name": "Harry Potter and the Goblet of Fire",
  "author": "J. K. Rowling",
  "year": "2000",
  "genre": "Fantasy Fiction",
  "bestseller": true
}';

// Декодирование JSON в ассоциативный массив
$array = json_decode($json, true);

// Проверка на ошибки при декодировании
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Ошибка декодирования JSON: " . json_last_error_msg();
} else {
    // Вывод массива в браузер в виде списка
    echo "<h2>Декодированный массив</h2>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>
</body>
</html>