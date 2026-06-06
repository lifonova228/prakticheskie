<?php

require_once 'tracks.php';

echo "Просмотр треков сервиса:\n";

echo "<ol>\n";

foreach ($track as $track_data) {

    $id = htmlspecialchars($track_data['id_track']);
    $name = htmlspecialchars($track_data['name']);

    echo "    <li>{id=" . $id . "} " . $name . "</li>\n";
}

echo "</ol>\n";

?>

