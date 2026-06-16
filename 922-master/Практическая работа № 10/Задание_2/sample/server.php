<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Безопасность данных, часть 1</h2>
    
    <?php
        $_ERROR["valid"] = [];
        $_ERROR["empty"] = [];

        // Проверяем, отправлена ли форма
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Получаем данные из формы
            $login = $_POST['login'] ?? '';
            $email = $_POST['email'] ?? '';
            $pwd = $_POST['pwd'] ?? '';
            
            // 1. Проверка на пустоту
            if (trim($login) == '') {
                $_ERROR["empty"][] = "Логин не заполнен";
            }
            
            if (trim($email) == '') {
                $_ERROR["empty"][] = "E-mail не заполнен";
            }
            
            if (trim($pwd) == '') {
                $_ERROR["empty"][] = "Пароль не заполнен";
            }
            
            // 2. Если проверка на пустоту пройдена, выполняем санитизацию и валидацию
            if (empty($_ERROR["empty"])) {
                
                // Санитизация данных
                $login = (trim($login));
                $email = (trim($email));
                $pwd = (trim($pwd));
                
                // Валидация данных
                // Проверка логина (только буквы и цифры, минимум 4 символа)
                if (!preg_match('/^[a-zA-Z0-9]{4,}$/', $login)) {
                    $_ERROR["valid"][] = "Логин должен содержать только буквы и цифры (минимум 4 символа)";
                }
                
                // Проверка email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_ERROR["valid"][] = "Некорректный формат E-mail";
                }
                
                // Проверка пароля (минимум 6 символов)
                if (strlen($pwd) < 6) {
                    $_ERROR["valid"][] = "Пароль должен содержать не менее 6 символов";
                }
            }
            
            // 3. Вывод результата
            if (empty($_ERROR["empty"]) && empty($_ERROR["valid"])) {
                echo "<p style='color: green; font-weight: bold;'>✓ Форма успешно отправлена!</p>";
                echo "<p>Логин: $login</p>";
                echo "<p>E-mail: $email</p>";
                echo "<p>Пароль: " . str_repeat('*', strlen($pwd)) . "</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>✗ Обнаружены ошибки:</p>";
                
                // Выводим ошибки пустоты
                if (!empty($_ERROR["empty"])) {
                    echo "<p style='color: red;'><strong>Ошибки проверки на пустоту:</strong></p>";
                    echo "<ul style='color: red;'>";
                    foreach ($_ERROR["empty"] as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                }
                
                // Выводим ошибки валидации
                if (!empty($_ERROR["valid"])) {
                    echo "<p style='color: red;'><strong>Ошибки валидации:</strong></p>";
                    echo "<ul style='color: red;'>";
                    foreach ($_ERROR["valid"] as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                }
            }
            
            // Выводим статистику ошибок
            echo "<hr>";
            echo "<p><strong>Статистика ошибок:</strong></p>";
            echo "<p>Ошибок проверки на пустоту: " . count($_ERROR["empty"]) . "</p>";
            echo "<p>Ошибок валидации: " . count($_ERROR["valid"]) . "</p>";
        }
    ?>    

</body>
</html>