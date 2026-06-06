<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<?php
$VarStr = 'Слабая типизация PHP';
const CONSTSTR = 'Слабая типизация PHP';
define("ARRSTR", array('Слабая типизация PHP'));

echo "<h2>Результаты проверки var_dump():</h2>";
echo "<pre>";

echo "Переменная \$VarStr: ";
var_dump($VarStr);
echo "\nКонстанта CONSTSTR: ";
var_dump(CONSTSTR);
echo "\nКонстанта-массив ARRSTR: ";
var_dump(ARRSTR);

echo "</pre>";
?>

</body>
</html>