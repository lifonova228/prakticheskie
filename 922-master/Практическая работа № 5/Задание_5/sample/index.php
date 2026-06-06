<?php
if (isset($_GET['search']) && !empty($_GET['search'])) {

    $parts = explode('::', $_GET['search']);
    
    if (count($parts) < 2) {
        echo "Ошибка: Неверный формат запроса. Используйте: ?search=сущность::id";
        exit;
    }

    $entity = trim($parts[0]);
    $id = (int)$parts[1];

    $allowed_entities = ['teams', 'albums', 'tracks'];
    if (!in_array($entity, $allowed_entities)) {
        echo "Ошибка: Неизвестная сущность '$entity'. Допустимые значения: teams, albums, tracks.";
        exit;
    }

    // 2. Формируем путь к файлу
    $filePath = __DIR__ . '/dump/' . $entity . '.php';

    if (file_exists($filePath)) {
        // Подключаем только нужный файл. Он создаст переменную $content
        include $filePath;

        // Проверяем, что переменная $content действительно существует в файле
        if (isset($content) && is_array($content)) {
            $foundItem = null;

            // Ищем нужный элемент по его внутреннему ID
            foreach ($content as $item) {
                if (isset($item['id']) && $item['id'] == $id) {
                    $foundItem = $item;
                    break;
                }
            }

            if ($foundItem) {
                $titles = [
                    'teams' => 'группе',
                    'albums' => 'альбоме',
                    'tracks' => 'треке'
                ];
                $title = $titles[$entity] ?? $entity;

                echo "<h3>Информация о " . htmlspecialchars($title) . " (ID $id):</h3>";
                echo "<ul>";
                foreach ($foundItem as $key => $value) {
                    echo "<li><b>" . htmlspecialchars($key) . ":</b> " . htmlspecialchars($value) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "Запись с ID $id в сущности '$entity' не найдена.";
            }

        } else {
            echo "Ошибка: В файле $entity.php не найдена переменная \$content.";
        }

    } else {
        echo "Ошибка: Файл <b>$entity.php</b> не найден в папке <b>" . __DIR__ . "/dump/</b>";
    }

} else {
    echo "Пожалуйста, введите запрос в адресной строке.<br>";
    echo "Пример: <b>?search=albums::3</b> или <b>?search=teams::2</b>";
}
?>

