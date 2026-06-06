<?php
// Получаем данные из массива $_GET
$surname = $_GET['surname'] ?? '';
$name = $_GET['name'] ?? '';
$patronymic = $_GET['patronymic'] ?? '';
$position = $_GET['position'] ?? '';
$education_level = $_GET['education_level'] ?? '';
$category = $_GET['category'] ?? '';
$total_experience = $_GET['total_experience'] ?? '';
$technical_experience = $_GET['technical_experience'] ?? '';

// Выводим полученные данные
echo "<h1>Переданные данные</h1>";
echo "<p><strong>Фамилия:</strong> " . htmlspecialchars($surname) . "</p>";
echo "<p><strong>Имя:</strong> " . htmlspecialchars($name) . "</p>";
echo "<p><strong>Отчество:</strong> " . htmlspecialchars($patronymic) . "</p>";
echo "<p><strong>Должность:</strong> " . htmlspecialchars($position) . "</p>";
echo "<p><strong>Уровень образования:</strong> " . htmlspecialchars($education_level) . "</p>";
echo "<p><strong>Категория:</strong> " . htmlspecialchars($category) . "</p>";
echo "<p><strong>Общий стаж:</strong> " . htmlspecialchars($total_experience) . " лет</p>";
echo "<p><strong>Стаж в техникуме:</strong> " . htmlspecialchars($technical_experience) . " лет</p>";
?>