<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	
	<?php
		require "albums.php";

		// перебираем массив
		foreach ($albums as $key => $item) {
			// выводим данные массива
			printf("
				Номер - %s<br />
				ID альбома: %d<br />
				Название: %s<br />
				Дата выпуска: %s<br />
				Лейбл: %s<br />
				Формат: %s<br />
				Статус: %s<p>
				<hr />
			",
				($key < 9) ? "000" . ++$key : "00". ++$key, // отформатируем вывод номера 
				$item['id'],
				$item['album_name'],
				$item['date'],
				$item['label'],
				$item['format'],
				$item['status']			
			);	
		};
	?>
	

</body>
</html>