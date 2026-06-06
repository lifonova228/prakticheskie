<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	
<<<<<<< HEAD
<?php
require "albums.php";

// используем array_map с функцией, которая возвращает элементы только с нужным статусом
$filteredAlbums = array_map(function($item) use ($albums) {
    if (strpos($item["status"], "Серебряный") !== false) {
        return $item;
    }
    // Возвращаем null вместо безрезультатных элементов
    return null;
}, $albums);

// удаляем все NULL
$filteredAlbums = array_filter($filteredAlbums);

// выводим результат
echo "<pre>";
var_dump($filteredAlbums);
echo "</pre>";
?>
=======
	<?php		
		// включаем массив
		require "albums.php";
		
		// определяем callback-функцию
		$callback = function ($item) {
			// если в строке ключе статуса есть вхождение строки Серебряный
			// отбираем этот массив
			if (strpos($item["status"], "Серебряный") != ""){
				return $item;
			}
		};

		// вызываем array_map
		$res = array_map($callback, $albums);
		
		// выводим результат
		echo "<pre>";
		var_dump($res);
		echo "</pre>";
	?>
>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
	

</body>
</html>