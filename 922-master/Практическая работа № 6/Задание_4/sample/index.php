<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	
	<?php
		require 'function.php';	
		$data = fnGetData();
		
		// забираем данные по категории
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		// Функция вывода персональных данных
		function getPersonData($data) {
			echo "<h3>Персональные данные</h3>";
			echo "<p>ФИО: {$data['surname']} {$data['name']} {$data['patronymic']}</p>";
			echo "<p>Должность: {$data['post']}</p>";
			echo "<p>Категория: {$data['category']}</p>";
			echo "<p>Общий стаж: {$data['experience_total']} лет</p>";
			echo "<hr>";
		};
		
		// Функция вывода образования
		function getPersonEdu($data) {
			echo "<h3>Образование</h3>";
			foreach ($data as $edu) {
				echo "<p><strong>Учебное заведение:</strong> {$edu['institution']}</p>";
				echo "<p><strong>Квалификация:</strong> {$edu['qualification']}</p>";
				echo "<p><strong>Годы:</strong> {$edu['year_receipts']} - {$edu['year_release']}</p>";
				echo "<hr>";
			}
		};
		
		// Функция вывода курсов
		function getPersonCours($data) {
			echo "<h3>Курсы</h3>";
			foreach ($data as $course) {
				echo "<p><strong>Название:</strong> {$course['name']}</p>";
				echo "<p><strong>Длительность:</strong> {$course['duration']} часов</p>";
				echo "<p><strong>Цена:</strong> {$course['price']} руб.</p>";
				echo "<hr>";
			}
		}
		
		// выводим персональные данные
		getPersonData($person);
		// выводим данные об образовании
		getPersonEdu($educations);
		// выводим данные о курсах
		getPersonCours($courses);
	?>
	
</body>
</html>