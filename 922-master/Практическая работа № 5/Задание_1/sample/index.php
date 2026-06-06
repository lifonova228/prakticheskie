<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php
		require "teams.php";

		if (isset($_GET['id']) || empty($_GET['id'])) {
    	foreach ($content as $team) {
        echo "<h3>{$team['name']}</h3>";
        echo "<p>Страна: {$team['country']}</p>";
        echo "<p>Год основания: {$team['date']}</p>";
        echo "<p>Стиль: {$team['style']}</p>";
	}}
	else;
		echo "ошибка";
	?>
	

</body>
</html>