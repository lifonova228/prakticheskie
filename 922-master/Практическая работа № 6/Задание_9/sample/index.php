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
	<h2>Список преподавателей</h2>
	
	<?php
		// включение файла с массивом $personnel
		require "personnel.php";
		// массив для сбора статистики
		$statistic = array();
		
		// описание функции сбора статистических данных
		function fnСollectingStatistic ($array){
			global $statistic;
			static $i = 0; // статическая переменная
			
			$statistic[$i]["user"] = $array["surname"] . " " . $array["name"] . " " . $array["patronymic"];
			$statistic[$i]["site"] = $array["site"];
			$statistic[$i]["email"] = $array["email"];
		}
		
		// описание функции вывода таблицы персонала
		function fnOutPersonnel ($personnel) {
			$tr = "";
			// перебираем массив 
			foreach ($personnel as $key => $person) {
				
				// вызываем функцию сбора статистики
				if ($person["site"] == "" || $person["email"] == "") fnСollectingStatistic ($person);
				
				$tr .= "
					<tr>
						<td>{$person['id_personnel']}</td>
						<td>{$person['surname']} {$person['name']} {$person['patronymic']}</td>
						<td>{$person['post']}</td>
						<td>{$person['category']}</td>
					</tr>	
				";
			};
			
			// возвращаем результат-таблицу
			return "
				<table border=1 cellpadding=5>
				<tr>
					<th>№</th>
					<th>Фамилия Имя Отчество</th>
					<th>Должность</th>
					<th>Категория</th>
				</tr>
				{$tr}
				</table>
			";		
		}			
		
		// вызов функции вывода таблицы персонала
		echo fnOutPersonnel ($personnel);	

		// вывод дампа с массивом статистики
		echo "<pre>";
		var_dump($statistic);
	?>
	

</body>
</html>