<?php

require 'tracks.php';

echo "<h3>1. Цикл do-while (маркированный список)</h3>";
if (!empty($track)) {
    echo "<ul>";
    $i = 0;
    do {
        echo "<li>(" . $track[$i]['id_track'] . ") " . $track[$i]['name'] . "</li>";
        $i++;
    } while ($i < count($track));
    echo "</ul>";
}

echo "<h3>2. Цикл for (нумерованный список)</h3>";
echo "<ol>";
for ($i = 0; $i < count($track); $i++) {
    echo "<li>(" . $track[$i]['id_track'] . ") " . $track[$i]['name'] . " (id альбома: " . $track[$i]['id_album'] . ")</li>";
}
echo "</ol>";

echo "<style>table { border-collapse: collapse; margin-bottom: 20px; } th, td { border: 1px solid black; padding: 5px; text-align: left; }</style>";

echo "<h3>3. Цикл foreach (таблица)</h3>";
echo "<table>";
echo "<tr>
        <th>id</th>
        <th>Трек</th>
        <th>Примечание</th>
        <th>Id-альбома</th>
      </tr>";
foreach ($track as $item) {
    echo "<tr>";
    echo "<td>" . $item['id_track'] . "</td>";
    echo "<td>" . $item['name'] . "</td>";
    echo "<td>" . $item['note'] . "</td>";
    echo "<td>" . $item['id_album'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>4. Цикл while (таблица)</h3>";
echo "<table>";
echo "<tr>
        <th>id</th>
        <th>Трек</th>
        <th>Примечание</th>
        <th>Id-альбома</th>
      </tr>";
$j = 0;
while ($j < count($track)) {
    echo "<tr>";
    echo "<td>" . $track[$j]['id_track'] . "</td>";
    echo "<td>" . $track[$j]['name'] . "</td>";
    echo "<td>" . $track[$j]['note'] . "</td>";
    echo "<td>" . $track[$j]['id_album'] . "</td>";
    echo "</tr>";
    $j++;
}
echo "</table>";
?>

