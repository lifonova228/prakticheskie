<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Управляющие конструкции</h1>
	<h2>Циклы</h2>
	<hr>
	<h2>Вывод массива</h2>

	<?php
    include 'team.php';  
		

		function printTeam($arr) {
    reset($arr);
    for(; ($item = current($arr)) !== false; next($arr)) {
        echo "
            Группа: {$item['name']} (id = {$item['id_team']})<br/>
            Страна: {$item['country']}<br />
            Дата основания: {$item['date']}<br />
            Стиль: {$item['style']}<br />
            <hr/><p>
        ";
    }
}
printTeam($team);
	?>


</body>
</html>