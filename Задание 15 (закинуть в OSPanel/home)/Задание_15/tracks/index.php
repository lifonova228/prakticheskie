<?php
// Инициализация переменных (формирование данных)
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <a href="../index.php"><h3>Музыкальный сервис</h3></a>
    </div>
    <nav>
        <a href="../teams/index.php">Группы</a> |
        <a href="../albums/index.php">Альбомы</a> |
        <a href="../tracks/index.php">Треки</a> |
        <a href="../admin/index.php">Консоль</a>
    </nav>
';

$content = '
    <h1>Треки</h1>
    <table>
        <tr>
            <th>ID трека</th>
            <th>Название песни</th>
            <th>Примечание</th>
        </tr>

        <tr>
            <td>37</td>
            <td>Hells Bells <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>39</td>
            <td>What Do You Do for Money Honey <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>48</td>
            <td>Given the Dog a Bone <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>41</td>
            <td>Let Me Put My Love Into You <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>19</td>
            <td>Sun King <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>20</td>
            <td>Mean Mr Mustard <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>21</td>
            <td>Polythene Pam <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>22</td>
            <td>Shine On You Crazy Diamond (Part One) <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>23</td>
            <td>Welcome to the Machine <br><span class="td_info">подробнее...</span></td>
            <td></td>
        </tr>

        <tr>
            <td>50</td>
            <td>Unhappy Girl <br><span class="td_info">подробнее...</span></td>
            <td></td>
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
            <p><a href="https://www.spotify.com/ru-ru/" target="_blank">Spotify</a></p>
            <p><a href="https://support.spotify.com/ru-ru/" target="_blank">Справка</a></p>
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