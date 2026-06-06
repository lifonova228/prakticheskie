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
echo "<h2>Полученные от пользователя данные массива JSON:</h2> ";
$json= json_encode($_POST);
// Получим параметр view из GET
$view = isset($_GET['view']) ? $_GET['view'] : '';
    print_r($json);


?>