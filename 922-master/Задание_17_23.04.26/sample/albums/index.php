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

$content = array(
    array("id_album" => "1", "name" => "The Dark Side of the Moon", "alias" => "the-dark-side-of-the-moon", "country" => "Великобритания", "date" => "1973", "path" => "assets/albums/the-dark-side-of-the-moon.jpg", "id_team" => "2"),
    array("id_album" => "2", "name" => "Wish You Were Here", "alias" => "wish-you-were-here", "country" => "Великобритания", "date" => "1975", "path" => "assets/albums/wish-you-were-here.jpg", "id_team" => "2"),
    array("id_album" => "3", "name" => "Greatest Hits", "alias" => "greatest-hits", "country" => "США", "date" => "1999", "path" => "assets/albums/greatest-hits-pink-floyd.jpg", "id_team" => "2"),
    array("id_album" => "4", "name" => "Abbey Road", "alias" => "abbey-road", "country" => "Великобритания", "date" => "1969", "path" => "assets/albums/abbey-road.jpg", "id_team" => "3"),
    array("id_album" => "5", "name" => "A Hard Day's Night", "alias" => "a-hard-days-night", "country" => "Великобритания", "date" => "1964", "path" => "assets/albums/a-hard-days-night.jpg", "id_team" => "3"),
    array("id_album" => "6", "name" => "Back in Black", "alias" => "back-in-black", "country" => "США", "date" => "1980", "path" => "assets/albums/Back_in_Black.svg", "id_team" => "4"),
    array("id_album" => "7", "name" => "Highway to Hell", "alias" => "highway-to-hell", "country" => "Австралия", "date" => "1979", "path" => "assets/albums/highway-to-hell.jpg", "id_team" => "4"),
    array("id_album" => "8", "name" => "The Razors Edge", "alias" => "the-razors-edge", "country" => "Австралия", "date" => "1990", "path" => "assets/albums/the-razors-edge.jpg", "id_team" => "4"),
    array("id_album" => "9", "name" => "Let There Be Rock", "alias" => "let-there-be-rock", "country" => "ФРГ", "date" => "1977", "path" => "assets/albums/let-there-be-rock.jpg", "id_team" => "4"),
    array("id_album" => "10", "name" => "Rocks", "alias" => "rocks", "country" => "Великобритания", "date" => "1982", "path" => "assets/albums/rocks.jpg", "id_team" => "1")
);

$vivod_content = '<pre>' . print_r($content, true) . '</pre>';

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
            <?php echo $vivod_content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>