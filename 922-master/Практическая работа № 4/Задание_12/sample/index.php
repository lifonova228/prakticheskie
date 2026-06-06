<?php

require 'dump/albums.php';
require 'dump/tracks.php';

echo "<ol>";

foreach ($albums as $album) {

    echo "<li>" . $album['title'] . " (" . $album['country'] . ")";
    
    echo "<ul>";
    
    foreach ($tracks as $track) {
        
        if ($track['id_album'] == $album['id_album']) {
            echo "<li>" . $track['name'] . "</li>";
        }
    }
    
    echo "</ul>";
    echo "</li>";
}

echo "</ol>";
?>

