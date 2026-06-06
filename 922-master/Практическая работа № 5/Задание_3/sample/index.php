<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

    <?php

    $images = array(
    'cube/1.jpg',
    'cube/2.jpg',
    'cube/3.jpg',
    'cube/4.jpg',
    'cube/5.jpg',
    'cube/6.jpg'
    );
    
    $count = random_int(1, 6); + 1;
    $cube = [];
    $sum = 0;

    for($i = 0; $i < $count; $i++){
        $rand = random_int(0, 5);
        $sum = $sum + $rand + 1;
        echo '<img src="' . $images[$rand] . '" Случайный куб">';
    }
	
    echo "<h2>Сумма набранных очков: $sum </h2>";

    ?>

</body>
</html>