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
// Создаем массив данных для каждой ссылки
$samples = [
    ['topic' => 1, 'lesson' => 1],
    ['topic' => 2, 'lesson' => 3],
    ['topic' => 3, 'lesson' => 2],
];

foreach ($samples as $sample) {
    // Кодируем массив как JSON
    $json_str = json_encode($sample);
    // Кодируем для передачи через URL
    $encoded = urlencode($json_str);
    // Генерируем ссылку
    echo "<a href='server.php?data={$encoded}'>Ссылка</a><p>";
}
?>
</body>
</html>