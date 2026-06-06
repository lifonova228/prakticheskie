<?php
if (isset($_GET['data'])) {
    // Раскодируем JSON
    $jsonDecoded = urldecode($_GET['data']);
    $educationsReceived = json_decode($jsonDecoded, true);

    if ($educationsReceived !== null) {
        echo "<h2>Полученные данные об образовании:</h2>";
        echo "<pre>";
        print_r($educationsReceived);
        echo "</pre>";
    } else {
        echo "Ошибка при декодировании JSON.";
    }
} else {
    echo "Параметр 'data' не передан.";
}
?>