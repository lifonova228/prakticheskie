<?php

function fnGetTeamName($pteam, $id) {
    foreach ($pteam as $team) {
        if ($team['id_team'] == $id) {
            return $team['name'];
        }
    }
    return "Неизвестно";
}

function fnOutAlbum($palbum, $pteam) {
    $out = '<table border="1" cellpadding="5" cellspacing="0">';
    $out .= '<tr>
                <th>ID</th>
                <th>Альбом</th>
                <th>Дата выпуска</th>
                <th>Исполнитель</th>
             </tr>';

    foreach ($palbum as $item) {

        $teamName = fnGetTeamName($pteam, $item['id_team']);
        
        $out .= "<tr>";
        $out .= "<td>" . $item['id_album'] . "</td>";
        $out .= "<td>" . $item['title'] . "</td>";
        $out .= "<td>" . $item['date'] . "</td>";
        $out .= "<td>" . $teamName . "</td>";
        $out .= "</tr>";
    }
    
    $out .= "</table>";
    return $out;
}

?>