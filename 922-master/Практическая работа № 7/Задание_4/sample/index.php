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
// подключаем массив с альбомами
require "albums.php";

// id альбома, который передаем
$id = 2;

// массив для хранения выбранного альбома
$album = array();

// ищем нужный альбом
foreach ($albums as $item){
	if ($item["id"] == $id) {
		$album = $item; // запоминаем выбранный альбом
		break; // выход из цикла
	}
}

// если нашли альбом
if (!empty($album)) {
    // кодируем как JSON
    $json_data = json_encode($album);
    // URL-кодируем для передачи
    $encoded_data = urlencode($json_data);
    // создаем ссылку
    echo "<a href='server.php?data={$encoded_data}'>Передать альбом {$album['album_name']}</a>";
} else {
    echo "<p>Альбом с id={$id} не найден.</p>";
}
?>
	

</body>
</html>