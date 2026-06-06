<?php

require 'dump/albums.php';
require 'dump/tracks.php';

$album_id_to_display = isset($_GET['album_id']) ? (int)$_GET['album_id'] : null;

if ($album_id_to_display === null) {
    echo "Пожалуйста, укажите идентификатор альбома в URL, например: ?album_id=1";
    exit; 
}

$current_album = null;
foreach ($albums as $album) {
    if ($album['id_album'] == $album_id_to_display) {
        $current_album = $album;
        break; 
    }
}

if ($current_album === null) {
    echo "Альбом с идентификатором " . htmlspecialchars($album_id_to_display) . " не найден.";
    exit;
}

echo "<h1>" . htmlspecialchars($current_album['title']) . " (" . htmlspecialchars($current_album['country']) . ")</h1>";

echo "<ul>";

foreach ($tracks as $track) {

    if ($track['id_album'] == $album_id_to_display) {
        echo "<li>" . htmlspecialchars($track['name']) . "</li>";
    }
}

echo "</ul>";

?>

