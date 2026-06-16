<?php
    $_ERROR = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'] ?? '';
        
        // Проверка на пустоту
        if (empty(trim($login))) {
            $_ERROR[] = "Логин не заполнен";
        }
        
        // Санитизация
        $login = filter_var($login, FILTER_SANITIZE_STRING);
        
        // Валидация
        if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
            $_ERROR[] = "Логин должен содержать 5-10 латинских букв или цифр";
        }
        
        // Вывод результата
        if (empty($_ERROR)) {
            echo "<p style='color:green;'>Успешно! Логин: $login</p>";
        } else {
            echo "<p style='color:red;'>Ошибки:</p><ul>";
            foreach ($_ERROR as $e) {
                echo "<li style='color:red;'>$e</li>";
            }
            echo "</ul>";
        }
    }
?>