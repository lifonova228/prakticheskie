<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$pink_floyd_multidimensional = [
    [
        "id" => 1,
        "album_name" => "Atom Heart Mother",
        "release_date" => "10 октября 1970",
        "labels" => ["EMI", "Harvest", "Capitol"], 
        "formats" => ["LP", "CD"],                 
        "statuses" => [                            
            "USA" => "Золотой"
        ]
    ],
    [
        "id" => 2,
        "album_name" => "Meddle",
        "release_date" => "30 октября 1971",
        "labels" => ["EMI", "Harvest", "Capitol"],
        "formats" => ["Vinyl", "Кассета", "CD"],
        "statuses" => [
            "USA" => "Платиновый"
        ]
    ],
    [
        "id" => 4, 
        "album_name" => "The Dark Side of the Moon",
        "release_date" => "17 марта 1973",
        "labels" => ["Harvest", "Capitol", "EMI"],
        "formats" => ["LP", "Кассета", "CD", "SACD"],
        "statuses" => [
            "USA" => "Платиновый",
            "GBR" => "Платиновый",
            "CAN" => "Бриллиантовый"
        ]
    ]
    
];

echo "<h3>Многомерный массив (атомарные значения)</h3>";
echo "<pre>";
print_r($pink_floyd_multidimensional);
echo "</pre>";
?>

</body>
</html>