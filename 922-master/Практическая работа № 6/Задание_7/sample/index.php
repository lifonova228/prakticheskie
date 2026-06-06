<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	
	<?php
		// включение файла album.php
		require "album.php";
		
		// включение файла team.php
		require "team.php";
		
		// !!! включение файла с функциями
		require "fun.php";
		
		// вывод альбомов из массива album
		echo fnOutAlbum($album, $team);
	?>
	

</body>
</html>