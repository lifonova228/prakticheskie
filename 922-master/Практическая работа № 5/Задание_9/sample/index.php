<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require 'person.php';

    if (!array_key_exists('category', $person)) {
        $person['category'] = "Соответствие занимаемой должности";
    }

    echo "<pre>";
    var_dump($person);
    echo "</pre>";


    ?>
</body>
</html>