	<?php
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="assets/logo.png" alt="logo">
        <a href="index.php">
            <h3>Музыкальный сервис</h3>
        </a>
    </div>
    <nav>
        <a href="teams/index.php">Группы</a> |
        <a href="albums/index.php">Альбомы</a> |
        <a href="tracks/index.php">Треки</a> |
        <a href="admin/index.php">Консоль</a>
    </nav>
';

$content = '
    <h1>SILENCE.NET</h1>
    <h3>Музыка — это тишина, которая живёт между звуками</h3>
    <h4>(В.А. Моцарт)</h4>
    <h3>Найди свою тишину</h3>
    <input type="button" value="Поиск в базе">
';

$footer = '
    <div class="block">
        <div class="logo">
            <img src="assets/logo.png" alt="logo">
            <h2>Музыкальный сервис</h2>
        </div>
    </div>
    <div class="block">
        <div class="head">КОМПАНИЯ</div>
        <div class="links">
            <p><a href="about/index.php">О нас</a></p>
            <p><a href="contacts/index.php">Контакты</a></p>
        </div>
    </div>
    <div class="block">
        <div class="head">ПОЛЕЗНЫЕ ССЫЛКИ</div>
        <div class="links">
            <p><a href="https://www.vehi.net/mbulgakov/master/01.html" target="_blank">Хорошая книга</a></p>
            <p><a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D1%81%D1%82%D0%B5%D1%80_%D0%B8_%D0%9C%D0%B0%D1%80%D0%B3%D0%B0%D1%80%D0%B8%D1%82%D0%B0" target="_blank">Справка</a></p>
        </div>
    </div>
';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php echo $head; ?>
</head>
<body>
    <header>
        <div class="content">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main">
        <div class="content">
            <?php echo $content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>