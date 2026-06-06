<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	
	<?php
		const ALBUM_DATA = [
        "The Dark Side of the Moon",
        "Pink Floyd",
        "17 марта 1973",
        "Harvest, Capitol, EMI",
        "LP, кассета, CD, SACD",
        "Платиновый (USA), Платиновый (GBR)"
    ];

    echo ALBUM_DATA[0];
    echo ALBUM_DATA[1];
    echo ALBUM_DATA[2];
    echo ALBUM_DATA[3];
    echo ALBUM_DATA[4];
    echo ALBUM_DATA[5];
	?>
		

</body>
</html>