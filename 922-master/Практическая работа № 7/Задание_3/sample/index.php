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
		// исходный двумерный массив
// исходный массив
$educations = array (
    array (
        'id' => 5, 
        'institution' => 'Московский государственный институт электронной техники (технический университет)', 
        'qualification' => 'Факультет инфокоммуникационных технологий', 
        'specialty' => 'Программное обеспечение радиоэлектронных систем', 
        'year_receipts' => 2005, 
        'year_release' => 2010, 
        'note' => ''
    ),
    array (
        'id' => 12, 
        'institution' => 'Санкт-Петербургский государственный университет (СПбГУ)', 
        'qualification' => 'Информационные системы и технологии', 
        'specialty' => 'Безопасность киберфизических систем', 
        'year_receipts' => 1993, 
        'year_release' => 1998, 
        'note' => ''        
    )
);

// Кодируем массив в JSON
$json_data = json_encode($educations);
// URL-кодируем JSON
$encoded_data = urlencode($json_data);

// Создаем ссылку
echo "<a href='server.php?data={$encoded_data}'>Передать данные об образовании</a>";
?>


</body>
</html>