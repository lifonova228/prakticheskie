<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require "album.php";
function fnOutAlbum($arr) {
    $out = '
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
        </tr>
    ';

    foreach ($arr as $item) {
        $out .= "<tr>
            <td>{$item['id_album']}</td>
            <td>{$item['title']}</td>
            <td>{$item['date']}</td>
            <td>{$item['country']}</td>
        </tr>";
    }

    $out .= '</table>';
    return $out;
}
echo fnOutAlbum($album);
?>
</body>
</html>