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
// Инициализация массива
$course = [
    [
        "Основы программирования", 
        ["Введение в PHP", "Переменные", "Константы", "Типы данных", "Строки"]
    ],
    [
        "Функции",
        ["Встроенные функции", "Пользовательские функции", "Область видимости переменных"]
    ],
    [
        "Управляющие конструкции",
        ["Условные операторы", "Циклы", "Конструкции"]
    ]
];

// Получение строки JSON из GET
if (isset($_GET['data'])) {
    $json_str = urldecode($_GET['data']);
    $params = json_decode($json_str, true); // true - чтобы получить массив

    // Проверка и использование данных
    if (is_array($params) && isset($params['topic'], $params['lesson'])) {
        $topic_index = (int)$params['topic'] - 1;
        $lesson_index = (int)$params['lesson'] - 1;

        if (isset($course[$topic_index]) && isset($course[$topic_index][1][$lesson_index])) {
            $topic_name = $course[$topic_index][0];
            $lesson_name = $course[$topic_index][1][$lesson_index];

            echo "<h3>Вы выбрали тему: $topic_name</h3>";
            echo "<p>Урок: $lesson_name</p>";
        } else {
            echo "<p>Некорректные параметры или темы/урока не существует.</p>";
        }
    } else {
        echo "<p>Некорректный формат данных.</p>";
    }
} else {
    echo "<p>Параметр data не передан.</p>";
}
?>
	

</body>
</html>