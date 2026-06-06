<?php
// Пользовательская функция вывода треков по идентификатору альбома
function fnOutTrack($track, $albumId) {
    $out = "<table border='1' cellpadding='5' cellspacing='0'>";
    $out .= "<tr>";
    $out .= "<th>ID трека</th>";
    $out .= "<th>Название трека</th>";
    $out .= "<th>Примечание</th>";
    $out .= "<th>Альбом</th>";
    $out .= "</tr>";
    
    // Флаг для проверки, найдены ли треки
    $found = false;
    
    // Перебираем массив треков
    foreach ($track as $item) {
        // Если id_album совпадает с переданным идентификатором
        if ($item['id_album'] == $albumId) {
            $found = true;
            $out .= "<tr>";
            $out .= "<td>{$item['id_track']}</td>";
            $out .= "<td>{$item['name']}</td>";
            $out .= "<td>{$item['note']}</td>";
            $out .= "<td>{$albumId}</td>";
            $out .= "</tr>";
        }
    }
    
    // Если треки не найдены, выводим сообщение
    if (!$found) {
        $out .= "<tr>";
        $out .= "<td colspan='4' align='center'>Треки для альбома с ID = {$albumId} не найдены</td>";
        $out .= "</tr>";
    }
    
    $out .= "</table>";
    
    return $out;
}
?>