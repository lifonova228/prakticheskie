<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Вы успешно зарегестрированы на сайте</h1>
        <h2>Лаврецкая Елизавета Викторовна</h2>
     <?php   


        $user = [

            'name' => 'Лаврецкая Елизавета Викторовна',
            'Логин' => 'elizaveta',
            'E-mail' => 'lovel@mail.ru',
            'Пароль' => '12345'

        ];


   ?>
            <p>
                Логин: <?= $user['Логин'] ?> <br>
                E-mail: <?= $user['E-mail'] ?> <br>
                Пароль: <?= $user['Пароль'] ?> 
            </p>

</body>
</html>