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
    array("id_team" => "1", "name" => "Aerosmith", "alias" => "aerosmith", "country" => "США", "content" => "", "date" => "1970", "style" => "хард-рок", "path" => "assets/teams/aerosmith.jpg"),
    array("id_team" => "2", "name" => "Pink Floyd", "alias" => "pink-floyd", "country" => "Великобритания", "content" => "", "date" => "1965", "style" => "психоделический рок", "path" => "assets/teams/pink-floyd.jpg"),
    array("id_team" => "3", "name" => "The Beatles", "alias" => "the-beatles", "country" => "Великобритания", "content" => "", "date" => "1960", "style" => "рок-н-ролл", "path" => "assets/teams/beatles.jpg"),
    array("id_team" => "4", "name" => "AC/DC", "alias" => "ac-dc", "country" => "Австралия", "content" => "", "date" => "1973", "style" => "хард-блюз-рок", "path" => "assets/teams/acdc.jpg"),
    array("id_team" => "5", "name" => "Scorpions", "alias" => "scorpions", "country" => "ФРГ", "content" => "", "date" => "1965", "style" => "хард-рок", "path" => "assets/teams/scorpions_.jpg"),
    array("id_team" => "6", "name" => "Ленинград", "alias" => "ленинград", "country" => "Россия", "content" => "", "date" => "1997", "style" => "ска, фолк, панк", "path" => "assets/teams/leningrad.jpg")
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