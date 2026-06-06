<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$albums = [
    ["id" => 1, "title" => "Atom Heart Mother", "date" => "10 октября 1970", "label" => "EMI, Harvest, Capitol", "format" => "LP, CD", "status" => "Золотой (USA)"],
    ["id" => 2, "title" => "Meddle", "date" => "30 октября 1971", "label" => "EMI, Harvest, Capitol", "format" => "Vinyl, Кассета, CD", "status" => "Платиновый (USA)"],
    ["id" => 3, "title" => "Obscured by Clouds", "date" => "3 июня 1972", "label" => "EMI, Harvest, Capitol", "format" => "LP, Кассета, CD", "status" => "Золотой (USA), Серебряный (GBR)"],
    ["id" => 4, "title" => "The Dark Side of the Moon", "date" => "17 марта 1973", "label" => "Harvest, Capitol, EMI", "format" => "LP, Кассета, CD, SACD", "status" => "Платиновый (USA, GBR), Бриллиантовый (CAN)"],
    ["id" => 5, "title" => "Wish You Were Here", "date" => "15 сентября 1975", "label" => "Harvest, EMI, Columbia, Capitol", "format" => "LP, 8-track, Кассета, CD, SACD", "status" => "Платиновый (USA, CAN), Золотой (GBR)"],
    ["id" => 6, "title" => "Animals", "date" => "23 января 1977", "label" => "Harvest, EMI, Columbia, Capitol", "format" => "LP, 8-track, Кассета, CD", "status" => "Платиновый (USA, CAN), Золотой (GBR)"],
    ["id" => 7, "title" => "The Wall", "date" => "30 ноября 1979", "label" => "Harvest, EMI, Columbia, Capitol", "format" => "LP, 8-track, Кассета, CD", "status" => "Платиновый (USA, GBR, NLD), Бриллиантовый (CAN)"],
    ["id" => 8, "title" => "The Final Cut", "date" => "21 марта 1983", "label" => "Harvest, EMI, Columbia, Capitol", "format" => "LP, 8-track, Кассета, CD", "status" => "Платиновый (USA), Золотой (GBR, NLD)"],
    ["id" => 9, "title" => "A Momentary Lapse of Reason", "date" => "8 сентября 1987", "label" => "EMI, Columbia", "format" => "LP, Кассета, CD", "status" => "Платиновый (USA, CAN), Золотой (GBR, NLD)"],
    ["id" => 10, "title" => "The Division Bell", "date" => "30 марта 1994", "label" => "EMI, Columbia", "format" => "LP, Кассета, CD", "status" => "Платиновый (USA, GBR, CAN, NLD)"]
];

echo "<h2>Многомерные массивы</h2>";


echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Название альбома</th>
        <th>Дата выпуска</th>
        <th>Лейбл</th>
        <th>Формат</th>
        <th>Статус</th>
      </tr>";


foreach ($albums as $album) {
    echo "<tr>";
    echo "<td>{$album['id']}</td>";
    echo "<td>{$album['title']}</td>";
    echo "<td>{$album['date']}</td>";
    echo "<td>{$album['label']}</td>";
    echo "<td>{$album['format']}</td>";
    echo "<td>{$album['status']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>