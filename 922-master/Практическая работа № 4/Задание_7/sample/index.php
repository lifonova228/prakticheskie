<?php

include 'tracks.php';

echo "<strong>Треки альбома Back in Black (AC/DC):</strong>";

echo "<ul>";

foreach ($track as $item) {
    if ($item['id_album'] == '6') {
        echo "<li>" . $item['name'] . "</li>";
    }
}

echo "</ul>";
?>

