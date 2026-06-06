<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Отправка данных в строке запроса</h2>
	<hr>
	<h2>Информация полученная из строки запроса</h2>
	
	<?php
if (isset($_GET['data'])) {
    $json_str = urldecode($_GET['data']);
    $educations = json_decode($json_str, true);

    if (is_array($educations)) {
        echo "<h2>Полученные данные об образовании:</h2>";
        echo "<pre>";
        print_r($educations);
        echo "</pre>";
    } else {
        echo "<p>Ошибка декодирования JSON.</p>";
    }
} else {
    echo "<p>Параметр data не передан.</p>";
}
?>


</body>
</html>