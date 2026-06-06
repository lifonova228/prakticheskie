<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Альбомы</h2>
	
	<?php
		// включение файла album.php
		require "album.php";
		// включение файла team.php
		// require "team.php";
		
		function fnOutAlbum() {
			global $album;
			
			$tr = "";
			
			// перебираем массив $album для формирования таблицы
			foreach ($album as $key => $item) {
				
				$tr .= "
					<tr>
						<td>{$item['id_album']}</td>
						<td>{$item['title']}</td>
						<td>{$item['date']}</td>
						<td>{$item['country']}</td>
						<td>{$item['id_team']}</td>
					</tr>	
				";
			};

			$out = "
				<table border=1 cellpadding=5>
				<tr>
					<th>ID</th>
					<th>Альбом</th>
					<th>Дата выпуска</th>
					<th>Страна</th>
					<th>Идентификатор группы</th>
				</tr>
				{$tr}
				</table>
			";
			
			return $out;		
		}		
		
		// вывод альбомов из массива album
		echo fnOutAlbum();	
	?>
	

</body>
</html>