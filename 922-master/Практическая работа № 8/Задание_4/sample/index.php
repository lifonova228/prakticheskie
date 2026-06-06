<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>	
<body>

	<h1>Отправка данных на сервер</h1>
	<h2>Отправка форм</h2>
	
	<?php	

// проверяем массив $_GET 
echo "<pre><b>Данные массива GET</b><br />"; 
print_r($_GET); 
echo "</pre>"; 
// проверяем массив $_POST 
echo "<pre><b>Данные массива POST</b><br />"; 
print_r($_POST); 
echo "</pre>"; 
if(isset($_GET['data']['role']) && 
isset($_GET['data']['action']) && isset($_GET['mood'])){ 
// выводим полученные от пользователя данные (массив GET) 
echo <<<HERE
<h2>Полученные от пользователя данные массива 
                                          
                           
                                             
GET:</h2> 
Роль: {$_GET['data']['role']} <br /> 
Действие: {$_GET['data']['action']} <br /> 
Настроение: {$_GET['mood']} 
HERE; 
} 
if(isset($_POST['login']) && isset($_POST['email']) && 
isset($_POST['pwd'])){ 
// выводим полученные от пользователя данные (массив POST) 
echo <<<HERE
<h2>Полученные от пользователя данные массива 
POST:</h2> 
Логин: {$_POST['login']} <br /> 
E-mail: {$_POST['email']} <br /> 
Пароль: {$_POST['pwd']} 
HERE; 
}
		
		//?view=dump  -> $_GET["post"]
		//?view=json  -> отобразим данные формы объектом JSON
		//*/

		// ...
	?>

	<form action="server.php?view=<?php echo htmlspecialchars($_GET['view'] ?? '') ?>" method="post">
		Название: <input type="text" name="name"><p>
		Алиас: <input type="text" name="alias"><p>
		Страна: <input type="text" name="country"><p>
		Год основания: <input type="text" name="date"><p>
		Стиль: <input type="text" name="style"><p>
		Изображение: <input type="text" name="path"><p>
		Контент: <textarea name="content"></textarea><p>
		Примечание: <input type="text" name="note"><p>

		<input type="submit">
	</form>


</body>
</html>