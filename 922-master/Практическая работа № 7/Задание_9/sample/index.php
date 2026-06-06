<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1. Подключить файл team.json
// Предположим, что файл находится в той же директории
$jsonFile = 'team.json';
$jsonContent = file_get_contents($jsonFile);

// 2. Декодировать JSON-строку в массив
$team = json_decode($jsonContent, true);

// 3. Прочитать содержимое файла Пикник.txt
$pickupFile = 'Пикник.txt';
$pickupContent = file_get_contents($pickupFile);

// 4. Распарсить содержимое файла в ассоциативный массив
// файл содержит пары key = value, разделённые строкой =========================
$lines = explode("\n", $pickupContent);
$data = [];
foreach ($lines as $line) {
    // пропускаем строки с =======
    if (strpos($line, '=') !== false) {
        list($key, $value) = explode('=', $line, 2);
        // уберем пробелы по краям
        $key = trim($key);
        $value = trim($value);
        $data[$key] = $value;
    }
}

// 5. Создать вложенный массив для новой группы
$newGroup = [
    'id_team' => $data['id_team'],
    'name' => $data['name'],
    'alias' => $data['alias'],
    'country' => $data['country'],
    'content' => $data['content'],
    'date' => $data['date'],
    'style' => $data['style'],
    'path' => $data['path'],
    'note' => $data['note'],
];

// 6. Добавить новую группу в массив $team
$team[] = $newGroup;

// 7. Вывести результат в браузер
echo '<pre>';
print_r($team);
echo '</pre>';
?>
</body>
</html>