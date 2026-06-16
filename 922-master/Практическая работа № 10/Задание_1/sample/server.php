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

		$_ERROR = array();
		// проверяем поле Логин 
		if (!empty(trim($_POST['login']))) {
			$_POST['login'] = trim(htmlspecialchars(filter_var($_POST['login'])));
			if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
				$_ERROR[] = "Логин " . $_POST['login'] . " невалиден";
			}
		} else {
			$_ERROR[] = "Не заполненно поле Логин";
		}

		// проверяем поле E-mail 
		if (!empty(trim($_POST['email']))) {
			$_POST['email'] = trim(htmlspecialchars(filter_var($_POST['email'])));
			if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/", $_POST['email'])) {
				$_ERROR[] = "Почта " . $_POST['email'] . " невалидна";
			}
		} else {
			$_ERROR[] = "Не заполненно поле E-mail";
		}


		// проверяем поле Пароль
		if (!empty(trim($_POST['pwd']))) {
			$_POST['pwd'] = trim(htmlspecialchars(filter_var($_POST['pwd'])));
			if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['pwd'])) {
				$_ERROR[] = "Пароль " . $_POST['pwd'] . " невалиден";
			}
		} else {
			$_ERROR[] = "Не заполненно поле Пароль";
		}

		if (empty($_ERROR)) {
			echo "<p><h2>Форма успешно заполнена</h2></p>";
			echo "<pre>", var_dump($_POST), "<pre />";
		} else {
			echo "<p><h2>Ошибки в заполнении формы: </h2></p>";
			echo "<pre>", var_dump($_ERROR), "<pre />";
		}

	?>	
	

</body>
</html>