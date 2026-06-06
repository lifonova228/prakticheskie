<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>

	
	<?php

$dollars = 1000;
$usd_to_rub = 75.87;
$rub_to_cny = 0.09;

$rubles = $dollars * $usd_to_rub;
$yuan = $rubles * $rub_to_cny;

echo "Доллары" , $dollars;
echo "Доллар в рубль" , $usd_to_rub;
echo "Рубль в юань" , $rub_to_cny;

echo "Сумма в рублях " , $rubles;
echo "Сумма в юанях " , $yuan;

?>

</body>
</html>