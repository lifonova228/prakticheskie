	<?php
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <a href="../index.php">
            <h3>Музыкальный сервис</h3>
        </a>
    </div>
    <nav>
        <a href="../teams/index.php">Группы</a> |
        <a href="../albums/index.php">Альбомы</a> |
        <a href="../tracks/index.php">Треки</a> |
        <a href="../admin/index.php">Консоль</a>
    </nav>
';

$content = '
    <h1>Альбомы</h1>
    <table>
        <tr>
            <th>Обложка<br>альбома</th>
            <th>Название<br>альбома</th>
            <th>Год выпуска<br>альбома</th>
            <th>Страна выпуска<br>альбома</th>
        </tr>
        <tr>
            <td><img src="../assets/albums/Back_in_Black.svg" class="album_img" alt=""></td>
            <td>Back in Black <br><span class="td_info">подробнее...</span></td>
            <td>1980</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="../assets/albums/highway-to-hell.jpg" class="album_img" alt=""></td>
            <td>Highway to Hell <br><span class="td_info">подробнее...</span></td>
            <td>1979</td>
            <td>Австралия</td>
        </tr>
        <tr>
            <td><img src="../assets/albums/the-razors-edge.jpg" class="album_img" alt=""></td>
            <td>The Razors Edge <br><span class="td_info">подробнее...</span></td>
            <td>1990</td>
            <td>Австралия</td>
        </tr>
        <tr>
            <td><img src="../assets/albums/greatest-hits-pink-floyd.jpg" class="album_img" alt=""></td>
            <td>Greatest Hits <br><span class="td_info">подробнее...</span></td>
            <td>1999</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="../assets/albums/greatest-hits-beatles.jpg" class="album_img" alt=""></td>
            <td>Greatest Hits <br><span class="td_info">подробнее...</span></td>
            <td>1978</td>
            <td>США</td>
        </tr>
    </table>
';

$footer = '
    <div class="block">
        <div class="logo">
            <img src="../assets/logo.png" alt="logo">
            <h2>Музыкальный сервис</h2>
        </div>
    </div>
    <div class="block">
        <div class="head">КОМПАНИЯ</div>
        <div class="links">
            <p><a href="../about/index.php">О нас</a></p>
            <p><a href="../contacts/index.php">Контакты</a></p>
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
        <div class="content ins">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main ins">
        <div class="content ins">
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