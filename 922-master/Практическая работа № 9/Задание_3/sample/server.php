<?php
// 1. Проверка безопасности: запуск скрипта только в качестве обработчика формы POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['loader'])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Ошибка: доступ ограничен. Скрипт должен вызываться только через отправку формы.";
    exit;
}

// 2. Получение и фильтрация текстовых данных из формы
$surname = isset($_POST['surname']) ? htmlspecialchars(trim($_POST['surname'])) : '';
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$patronymic = isset($_POST['patronymic']) ? htmlspecialchars(trim($_POST['patronymic'])) : '';
$post = isset($_POST['post']) ? htmlspecialchars(trim($_POST['post'])) : '';
$category = isset($_POST['category']) ? htmlspecialchars(trim($_POST['category'])) : '';
$experience = isset($_POST['experience_college']) ? htmlspecialchars(trim($_POST['experience_college'])) : '0';

// 3. Обработка изображения
$upload_dir = 'images/';
$upload_path = __DIR__ . '/' . $upload_dir; // Абсолютный путь для сохранения на сервере

// Встроенная SVG-заглушка по умолчанию (если файл не загружен, отобразится красивый серый аватар)
$image_src = "data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cbd5e0'><rect width='100%' height='100%' fill='%23f7fafc'/><circle cx='12' cy='8' r='4' fill='%23a0aec0'/><path d='M12 14c-4 0-7 2-7 5v1h14v-1c0-3-3-5-7-5z' fill='%23a0aec0'/></svg>";

// Проверяем, был ли успешно загружен файл пользователем
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $file_type = $_FILES['image']['type'];

    if (in_array($file_type, $allowed_types)) {
        // Создаем папку images, если её ещё нет
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        // Генерируем уникальное имя файла
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $new_filename = uniqid('user_', true) . '.' . $extension;
        
        // Перемещаем файл, используя абсолютный путь
        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path . $new_filename)) {
            // Для тега img указываем относительный путь
            $image_src = $upload_dir . $new_filename;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о пользователе</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            width: 400px;
            padding: 30px;
            text-align: center;
            border: 1px solid #e3e6ec;
        }
        .profile-card h1 {
            font-size: 20px;
            color: #333333;
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .avatar-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }
        .avatar-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f0f2f5;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .user-name {
            font-size: 22px;
            font-weight: bold;
            color: #1a1a1a;
            margin: 10px 0 20px 0;
            text-transform: capitalize;
        }
        .info-list {
            text-align: left;
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-radius: 8px;
            border-left: 4px solid #007bff;
        }
        .info-item {
            margin-bottom: 10px;
            font-size: 15px;
            color: #4a5568;
        }
        .info-item:last-child {
            margin-bottom: 0;
        }
        .info-label {
            font-weight: bold;
            color: #2d3748;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <h1>Анкета сотрудника</h1>
        
        <div class="avatar-container">
            <!-- Отображает либо загруженное фото, либо встроенный красивый SVG-аватар -->
            <img src="<?php echo $image_src; ?>" alt="Фото пользователя">
        </div>

        <div class="user-name">
            <?php echo "$surname $name $patronymic"; ?>
        </div>

        <div class="info-list">
            <div class="info-item">
                <span class="info-label">Должность:</span> <?php echo !empty($post) ? $post : 'Не указана'; ?>
            </div>
            <div class="info-item">
                <span class="info-label">Категория:</span> <?php echo !empty($category) ? $category : 'Не указана'; ?>
            </div>
            <div class="info-item">
                <span class="info-label">Стаж в техникуме:</span> <?php echo $experience; ?> лет
            </div>
        </div>
    </div>

</body>
</html>