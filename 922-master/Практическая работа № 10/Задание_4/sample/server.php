<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Безопасность данных, часть 2</h2>
	<hr>
	<h2>Загрузка файлов</h2>

	<?php
    $_ERROR = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['load'])) {
        
        // Проверяем, загружен ли файл
        if (!isset($_FILES['myfile']) || $_FILES['myfile']['error'] != 0) {
            $_ERROR[] = "Ошибка загрузки файла";
        } else {
            
            $fileTmp = $_FILES['myfile']['tmp_name'];
            $fileName = $_FILES['myfile']['name'];
            
            // Проверяем, является ли файл изображением
            $imageType = exif_imagetype($fileTmp);
            
            if ($imageType === false) {
                $_ERROR[] = "Файл не является изображением";
            } else {
                // Проверяем тип изображения
                if ($imageType == IMAGETYPE_JPEG || 
                    $imageType == IMAGETYPE_PNG || 
                    $imageType == IMAGETYPE_BMP) {
                    
                    echo "<p style='color:green;'>✓ Файл успешно загружен!</p>";
                    echo "<p>Файл: " . htmlspecialchars($fileName) . "</p>";
                    
                    // Получаем размеры
                    $info = getimagesize($fileTmp);
                    if ($info) {
                        echo "<p>Размеры: " . $info[0] . "x" . $info[1] . " пикселей</p>";
                    }
                    
                } else {
                    $_ERROR[] = "Недопустимый тип файла. Разрешены: JPEG, PNG, BMP";
                }
            }
        }
        
        // Вывод ошибок
        if (!empty($_ERROR)) {
            echo "<p style='color:red;'>Ошибки:</p><ul>";
            foreach ($_ERROR as $e) {
                echo "<li style='color:red;'>$e</li>";
            }
            echo "</ul>";
        }
    }
?>

</body>
</html>