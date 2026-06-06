<?php

require 'dump/albums.php';
require 'dump/tracks.php';

$target_id = isset($_GET['id_album']) ? $_GET['id_album'] : null;

$albums_to_display = [];

if ($target_id === null) {
    
    $albums_to_display = $albums;
} else {
    
    foreach ($albums as $album) {
        if ($album['id_album'] == $target_id) {
            $albums_to_display[] = $album;
            break; 
        }
    }
}

if (!empty($albums_to_display)) {
    echo "<ul>"; 
    
    foreach ($albums_to_display as $album) {
        echo "<li>";
        echo "<strong>" . $album['title'] . " (" . $album['country'] . ")</strong>";
        
        echo "<ul>"; 
        
        foreach ($tracks as $track) {
            // Связь по первичному и внешнему ключам (id_album)
            if ($track['id_album'] == $album['id_album']) {
                echo "<li>" . $track['name'] . "</li>";
            }
        }
        
        echo "</ul>"; 
        echo "</li>";
    }
    
    echo "</ul>"; 
} else {
    echo "Альбом с ID " . htmlspecialchars($target_id) . " не найден.";
}
?>

