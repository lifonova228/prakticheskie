<?php
	// функция получения данных
	function fnGetData () {
		// подключаем файлы, получаем данные
		require 'personnel.php';
		require 'courses.php';
		require 'educations.php';
		
		// возвращаем ассоциативный массив со всеми данными
		return array(
			'personnel' => $personnel,
			'courses' => $courses,
			'educations' => $educations
		);
	}
?>