<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат загрузки файлов</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            padding: 30px;
        }
        .container {
            background-color: #fff;
            max-width: 600px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #e1e4e8;
        }
        h1 {
            font-size: 22px;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .success {
            color: #27ae60;
            background-color: #e8f8f0;
            padding: 10px;
            border-left: 4px solid #2cc16f;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .info {
            color: #7f8c8d;
            font-style: italic;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .back-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Результат множественной загрузки файлов</h1>

    <?php
    // Проверка: запущен ли скрипт как обработчик формы
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loader'])) {
        
        $upload_dir = __DIR__ . '/upload/';
        
        // Создаем директорию upload, если её ещё нет
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $uploaded_count = 0;

        // Проверяем, передан ли массив файлов
        if (isset($_FILES['myfile'])) {
            $files = $_FILES['myfile'];

            // Так как файлы передаются массивом, обходим их в цикле по индексам
            for ($i = 0; $i < count($files['name']); $i++) {
                
                // Проверяем, был ли выбран файл в конкретном поле (код ошибки 4 означает, что файл не выбран)
                if ($files['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                    
                    $tmp_name = $files['tmp_name'][$i];
                    // Получаем оригинальное имя файла
                    $original_name = basename($files['name'][$i]);
                    // Формируем итоговый путь сохранения
                    $destination = $upload_dir . $original_name;

                    // Перемещаем файл из временного хранилища в папку upload
                    if (move_uploaded_file($tmp_name, $destination)) {
                        echo "<div class='success'>Файл <strong>" . htmlspecialchars($original_name) . "</strong> успешно загружен в каталог upload/.</div>";
                        $uploaded_count++;
                    } else {
                        echo "<div style='color: #c0392b; background-color: #fdf2f2; padding: 10px; border-left: 4px solid #e74c3c; margin-bottom: 10px;'>Не удалось загрузить файл: " . htmlspecialchars($original_name) . "</div>";
                    }
                }
            }
        }

        if ($uploaded_count === 0) {
            echo "<p class='info'>Вы не выбрали ни одного файла для загрузки.</p>";
        }

    } else {
        echo "<p style='color: #e74c3c; font-weight: bold;'>Ошибка: скрипт должен запускаться только как обработчик формы!</p>";
    }
    ?>

    <a href="index.html" class="back-btn">« Назад к форме</a>
</div>

</body>
</html>