<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['loader'])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Ошибка: скрипт должен запускаться только как обработчик формы.";
    exit;
}

$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$alias = isset($_POST['alias']) ? htmlspecialchars(trim($_POST['alias'])) : '';
$country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
$date = isset($_POST['date']) ? htmlspecialchars(trim($_POST['date'])) : '';
$style = isset($_POST['style']) ? htmlspecialchars(trim($_POST['style'])) : '';
$content = isset($_POST['content']) ? htmlspecialchars(trim($_POST['content'])) : '';

$file_uploaded = false;
$file_info = [];

if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
    $file_uploaded = true;
    $file = $_FILES['image'];
    
    $file_info['name'] = $file['name'];
    $file_info['size'] = $file['size'];
    $file_info['type'] = $file['type'];
    $file_info['tmp_name'] = $file['tmp_name'];
    $file_info['error'] = $file['error'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'images/';

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $destination = $upload_dir . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $destination);
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Скрипт-обработчик формы</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            color: #333;
        }
        h1 {
            font-size: 24px;
            color: #111;
        }
        h2 {
            font-size: 18px;
            color: #222;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-top: 20px;
        }
        ul {
            list-style-type: square;
            padding-left: 20px;
        }
        li {
            margin-bottom: 8px;
        }
        .bold {
            font-weight: bold;
        }
        .content-text {
            margin-top: 10px;
            padding-left: 5px;
        }
    </style>
</head>
<body>

    <h1>Скрипт-обработчик формы</h1>

    <h2>На сервере приняты данные формы</h2>
    <ul>
        <li><span class="bold">Название группы:</span> <?php echo $name; ?></li>
        <li><span class="bold">Алиас для url:</span> <?php echo $alias; ?></li>
        <li><span class="bold">Страна:</span> <?php echo $country; ?></li>
        <li><span class="bold">Дата основания:</span> <?php echo $date; ?></li>
        <li><span class="bold">Стиль:</span> <?php echo $style; ?></li>
    </ul>
    
    <?php if (!empty($content)): ?>
        <div class="content-text">
            <span class="bold">Описание группы:</span><br>
            <?php echo nl2br($content); ?>
        </div>
    <?php endif; ?>

    <?php if ($file_uploaded): ?>
        <h2>Пользователь пытается загрузить файл</h2>
        <ul>
            <li><span class="bold">Имя файла:</span> <?php echo htmlspecialchars($file_info['name']); ?></li>
            <li><span class="bold">Размер файла:</span> <?php echo $file_info['size']; ?> байт</li>
            <li><span class="bold">Тип содержимого файла:</span> <?php echo htmlspecialchars($file_info['type']); ?></li>
            <li><span class="bold">Имя временного файла:</span> <?php echo htmlspecialchars($file_info['tmp_name']); ?></li>
            <li><span class="bold">Код ошибки:</span> <?php echo $file_info['error']; ?></li>
        </ul>
    <?php endif; ?>

</body>
</html>