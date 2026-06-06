<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 2</title>
</head>
<body>

<form method="POST">
    Введите количество вспомненных строк (от 2 до 14): 
    <input type="number" name="count" min="0" max="14" step="2" required>
    <button type="submit">Проверить память</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_data = (int)$_POST['count'];

    $input_lines = [
        "Беда.",
        "Плохо.",
        "Кажется, что вы где-то учились",
        "Вы среднестатистический человек.",
        "Нормально.",
        "Хорошо.",
        "Отлично."
    ];

    $poem = "Мой дядя самых честных правил,
Когда не в шутку занемог,
Он уважать себя заставил
И лучше выдумать не мог.
Его пример другим наука;
Но, боже мой, какая скука
С больным сидеть и день и ночь,
Не отходя ни шагу прочь!
Какое низкое коварство!
Полуживого забавлять,
Ему подушки поправлять,
Печально подносить лекарство,
Вздыхать и думать про себя:
Когда же черт возьмет тебя!";

    $poem_lines = explode("\n", $poem);
    $poem_lines = array_map('trim', $poem_lines);
    $poem_lines = array_filter($poem_lines);

    echo "<br>Входные данные - количество вспомненных строк: " . $input_data . "<br>";
    echo "Выходные данные - предложенный текст:<br>";

    switch ($input_data) {
        case 2:  echo "Текст: " . $input_lines[0] . "<br>"; break;
        case 4:  echo "Текст: " . $input_lines[1] . "<br>"; break;
        case 6:  echo "Текст: " . $input_lines[2] . "<br>"; break;
        case 8:  echo "Текст: " . $input_lines[3] . "<br>"; break;
        case 10: echo "Текст: " . $input_lines[4] . "<br>"; break;
        case 12: echo "Текст: " . $input_lines[5] . "<br>"; break;
        case 14: echo "Текст: " . $input_lines[6] . "<br>"; break;
        default:
            echo "Введены некорректные данные. Пожалуйста, введите четное число от 2 до 14.<br>";
            break;
    }

    echo "<br>";

    if ($input_data >= 2 && $input_data <= 14) {
        echo "<b>А.С. Пушкин</b><br>";
        $counter = 0;
        foreach ($poem_lines as $line) {
            if ($counter < $input_data) {
                echo htmlspecialchars($line) . "<br>";
                $counter++;
            }
        }
    }
}
?>

</body>
</html>