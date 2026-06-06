<?php
// Проверка наличия данных POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Собираем данные формы
    $crit = [
        'name' => $_POST['name'] ?? '',
        'brand' => $_POST['brand'] ?? '',
        'os' => $_POST['os'] ?? '',
        'ssd' => $_POST['ssd'] ?? ''
    ];

    // Преобразуем в JSON
    $jsonCrit = json_encode($crit);

    // Создаем ссылку на db.php с JSON в параметре
    $link = 'db.php?criteria=' . urlencode($jsonCrit);

    // Выводим ссылку
    echo "<p>Данные сохранены. <a href=\"$link\">Перейти к результату поиска</a></p>";
}
?>