<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Отправка данных в строке запроса</h2>
	
	<?php
// Исходный массив
$array = [
    [
        "id" => "1",
        "album_name" => "Atom Heart Mother",
        "date" => "10 октября 1970",
        "label" => "EMI, Harvest, Capitol",
        "status" => "Золотой (USA)"
    ],
    [
        "id" => "2",
        "album_name" => "Meddle",
        "date" => "30 октября 1971",
        "label" => "EMI, Harvest, Capitol",
        "status" => "Платиновый (USA)"
    ]
];

echo "<h2>Исходный массив</h2>";
echo "<pre>";
print_r($array);
echo "</pre>";

$la= json_encode($array);

// Теперь подготовим строку для передачи, закодировав в URL
// Обычно JSON строку нужно URL-кодировать
$laa = urlencode($la);

// Для демонстрации: как бы мы получили эту строку назад и расшифровали
$lo = urldecode($laa);
$loo = json_decode($lo, true);

// Выводим полученный массив
echo "<h2>Декодированный массив из JSON строки</h2>";
echo "<pre>";
print_r($loo);
echo "</pre>";
?>
	

</body>
</html>